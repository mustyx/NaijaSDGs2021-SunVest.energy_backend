<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectWithInvestmentResource;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Projects
 *
 * Manage projects user has investments in
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
        $projects = auth()->user()->projects();
        return $this->success(ProjectResource::collection($projects));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * GET Single Project
     *
     * Get information on a single project
     * @param  Project $project Example: slug
     */
    public function show(Project $project)
    {
        if($project->investments()->where('user_id',auth()->id())->exists()){
            return $this->success(new ProjectWithInvestmentResource($project));
        }
        return $this->error('Invalid project',403);
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}
