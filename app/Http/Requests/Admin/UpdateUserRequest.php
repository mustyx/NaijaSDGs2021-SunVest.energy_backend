<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Actions\Fortify\PasswordValidationRules;

class UpdateUserRequest extends FormRequest
{
    use PasswordValidationRules;
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
        switch ($this->update_type){
            case 'password':
                return [
                    'password' => $this->passwordRules(),
                ];
                break;
            default:
                return [
                    'firstName' => ['required', 'string', 'max:255'],
                    'lastName' => ['required', 'string', 'max:255'],
                    'phone' => ['required','numeric'],
                ];
        }
    }
}
