<?php

namespace App\Http\Requests\ProjectRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string',
            'bio' => 'sometimes|string',
            'cost' => 'sometimes|string',
            'parentage_executive_owner' => 'sometimes|string',
            'parentage_project_owner' => 'sometimes|string',
            'project_owner' => 'sometimes|string',
            'executive_owner' => 'sometimes|string',
            'payment_method' => 'sometimes|string',
            'total_amount' => 'sometimes|integer',

        ];
    }
}
