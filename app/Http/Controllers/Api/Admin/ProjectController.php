<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectWithInvestmentResource;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Projects - ADMIN
 *
 * Manage projects
 */

class ProjectController extends Controller
{
    use ApiResponseTrait;

    /**
     * GET Projects
     *
     * List all projects
     * @queryParam page Which page to show. Example: 3
     * @response {"status":"Success","message":null,"data":[{"id":1,"name":"5KVA Rooftop Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":0,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-01T06:44:50.000000Z","end_date":"2021-05-20T06:44:50.000000Z","ad_due_date":"2021-04-28T06:44:50.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"}]}
     */
    public function index()
    {
        $projects = Project::with('investments')->get();
        return $this->success(ProjectResource::collection($projects));
    }

    /**
     * POST Project
     *
     * Create a new project
     * @bodyParam  name string required Name of project. Example: "5KVA Solar Mini-Grid"
     * @bodyParam  description string required Detailed description of projects.
     * @bodyParam  total_cells integer required Total number of cells the project has. Example: 50
     * @bodyParam  cost_per_cell integer required Investment cost per cell. Example: 5000
     * @bodyParam  profit numeric required Expected percentage profit after maturity Example: 10.5
     * @bodyParam  maturity_period integer required How long it will take for investment to mature in weeks. Example: 20
     * @bodyParam  start_date date_format:d/m/Y required When project development will start. Example: "25/04/2021"
     * @bodyParam  due_date date_format:d/m/Y required When project development will end. Example: "25/05/2021"
     * @bodyParam  ad_due_date date_format:d/m/Y required When this investment ad will expire. Example: "20/04/2021"
     *
     * @response {"status":"Success","message":"Project successfully created.","data":null}
     */
    public function store(StoreProjectRequest $request, ProjectService $projectService)
    {
        $project = $projectService->createNewProject($request);
        if(!is_null($project)) {
            return $this->success(new ProjectResource($project),'Project successfully created.',201);
        }
        return $this->error('Failed to create project',422);
    }

    /**
     * GET Single Project
     *
     * Get information on a single project
     * @param  Project $project Example: slug
     *
     * @response {"status":"Success","message":null,"data":{"id":1,"name":"5KVA Rooftop Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":0,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-01T06:44:50.000000Z","end_date":"2021-05-20T06:44:50.000000Z","ad_due_date":"2021-04-28T06:44:50.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z","investments":[]}}
     */
    public function show(Project $project)
    {
        return $this->success(new ProjectWithInvestmentResource($project));
    }

    /**
     * PUT Project
     *
     * Update project data. This should be a POST request
     * @bodyParam  _method string required This will tell backend to see it as an update request. Example: "PUT"
     * @bodyParam  name string required Name of project. Example: "5KVA Solar Mini-Grid"
     * @bodyParam  description string required Detailed description of projects.
     * @bodyParam  total_cells integer required Total number of cells the project has. Example: 50
     * @bodyParam  cost_per_cell integer required Investment cost per cell. Example: 5000
     * @bodyParam  profit numeric required Expected percentage profit after maturity Example: 10.5
     * @bodyParam  maturity_period integer required How long it will take for investment to mature in weeks. Example: 20
     * @bodyParam  start_date date_format:d/m/Y required When project development will start. Example: "25/04/2021"
     * @bodyParam  due_date date_format:d/m/Y required When project development will end. Example: "25/05/2021"
     * @bodyParam  ad_due_date date_format:d/m/Y required When this investment ad will expire. Example: "20/04/2021"
     *
     * @response {"status":"Success","message":"Project successfully updated.","data":{"id":1,"name":"5KVA Rooftop Solar Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":0,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-05T14:30:52.000000Z","end_date":"2021-05-20T14:30:52.000000Z","ad_due_date":"2021-04-28T14:30:52.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"}}
     */
    public function update(UpdateProjectRequest $request, Project $project, ProjectService $projectService)
    {
        $update = $projectService->updateProject($request,$project);
        return $this->success(new ProjectResource($update),'Project successfully updated.',201);
    }

    /**
     * DELETE Project
     *
     * Soft delete a project. This should be a POST request
     * @param  Project $project
     * @bodyParam _method string required This will tell backend that its actually a delete request. Example: "DELETE"
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return $this->success([],'Project soft-deleted successfully.');
    }
}
