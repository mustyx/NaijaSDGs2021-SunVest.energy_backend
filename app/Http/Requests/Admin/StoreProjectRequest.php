<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required','string'],
            'total_cells' => ['required','integer'],
            'cost_per_cell' => ['required','integer'],
            'profit' => ['required','numeric'],
            'maturity_period' => ['required','integer'],
            'start_date' => ['required','date_format:d/m/Y'],
            'end_date' => ['required','date_format:d/m/Y'],
            'ad_due_date' => ['required','date_format:d/m/Y'],
        ];

    }
}
