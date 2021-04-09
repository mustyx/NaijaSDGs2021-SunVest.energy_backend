<?php
namespace App\Services;

use App\Models\Project;
use Carbon\Carbon;

class ProjectService
{
    public function createNewProject($request){
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'total_cells' => $request->total_cells,
            'cost_per_cell' => $request->cost_per_cell,
            'profit' => $request->profit,
            'maturity_period' => $request->maturity_period,
            'start_date' => Carbon::createFromFormat('d/m/Y',$request->start_date),
            'end_date' => Carbon::createFromFormat('d/m/Y',$request->end_date),
            'ad_due_date' => Carbon::createFromFormat('d/m/Y',$request->ad_due_date),
            'created_by' => auth()->id(),
        ];
        if($request->filled('is_active')){
            $data['is_active'] = true;
        }
        return Project::create($data);
    }

    public function updateProject($request,$project){
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'total_cells' => $request->total_cells,
            'cost_per_cell' => $request->cost_per_cell,
            'profit' => $request->profit,
            'maturity_period' => $request->maturity_period,
            'start_date' => Carbon::createFromFormat('d/m/Y',$request->start_date),
            'end_date' => Carbon::createFromFormat('d/m/Y',$request->end_date),
            'ad_due_date' => Carbon::createFromFormat('d/m/Y',$request->ad_due_date),
        ];
        if($request->filled('is_active')){
            $data['is_active'] = true;
        }
        $project->update($data);
        return $project->refresh();
    }
}
