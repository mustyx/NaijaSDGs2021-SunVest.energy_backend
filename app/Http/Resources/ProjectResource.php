<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'total_cells' => $this->total_cells,
            'taken_cells' => $this->investments()->sum('cells'),
            'cost_per_cell' => $this->cost_per_cell,
            'profit' => $this->profit,
            'maturity_period' => $this->maturity_period,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'ad_due_date' => $this->ad_due_date,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
        ];
    }

    public function withResponse($request, $response)
    {
        $response->setEncodingOptions(JSON_UNESCAPED_SLASHES);
    }
}
