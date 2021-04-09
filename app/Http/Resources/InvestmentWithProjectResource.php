<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvestmentWithProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'project_id' => $this->project_id,
            'cells' => $this->cells,
            'cost_per_cell' => $this->cost_per_cell,
            'profit' => $this->profit,
            'maturity_period' => $this->maturity_period,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
            'created_at' => $this->created_at,
            'project' => new ProjectResource($this->project)
        ];
    }
}
