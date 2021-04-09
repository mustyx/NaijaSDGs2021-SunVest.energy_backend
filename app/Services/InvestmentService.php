<?php
namespace App\Services;

use App\Models\Investment;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;

class InvestmentService
{
    public function createNewInvestment($request){
        $user = User::where('id',$$request->user_id)->orWhere('username',$request->user_id)->firstOrFail();
        $project = Project::where('id',$$request->project_id)->orWhere('slug',$request->project_id)->firstOrFail();

        $startDate = Carbon::createFromTimestamp($request->start_date)->addDay();
        $dueDate = $startDate->addWeeks($project->maturity_period);

        $data = [
            'user_id' => $user->id,
            'project_id' => $project->id,
            'cells' => $request->cells,
            'cost_per_cell' => $project->cost_per_cell,
            'profit' => $project->profit,
            'maturity_period' => $project->maturity_period,
            'start_date' => $startDate,
            'due_date' => $dueDate,
        ];
        return Investment::create($data);
    }

    public function updateInvestment($request,$investment){
        $user = User::where('id',$$request->user_id)->orWhere('username',$request->user_id)->firstOrFail();
        $project = Project::where('id',$$request->project_id)->orWhere('slug',$request->project_id)->firstOrFail();

        $startDate = Carbon::createFromTimestamp($request->start_date)->addDay();
        $dueDate = $startDate->addWeeks($project->maturity_period);

        $data = [
            'user_id' => $user->id,
            'project_id' => $project->id,
            'cells' => $request->cells,
            'cost_per_cell' => $project->cost_per_cell,
            'profit' => $project->profit,
            'maturity_period' => $project->maturity_period,
            'start_date' => $startDate,
            'due_date' => $dueDate,
        ];

        $investment->update($data);
        return $investment->refresh();
    }
}
