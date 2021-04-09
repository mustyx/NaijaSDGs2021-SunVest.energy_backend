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
     */
    public function index()
    {
        $projects = Project::all();
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
     */
    public function store(StoreProjectRequest $request, ProjectService $projectService)
    {
        $project = $projectService->createNewProject($request);
        if(!is_null($project)) {
            return $this->success(null,'Project successfully created.',201);
        }
        return $this->error('Failed to create project',422);
    }

    /**
     * GET Single Project
     *
     * Get information on a single project
     * @param  Project $project Example: slug
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
