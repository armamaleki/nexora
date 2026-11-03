<?php

namespace App\Http\Requests\Dashboard\Role;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check()
            && auth()->user()->can('roles.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
//                'regex:/^[a-zA-Z0-9_-]+$/',
                Rule::unique('roles', 'name')
                    ->where('guard_name', 'web'),
                Rule::notIn(['super-admin']),
            ],

            'permissions' => [
                'required',
                'array',
            ],

            'permissions.*' => [
                'required',
                'string',
                'distinct',
                Rule::exists('permissions', 'name')
                    ->where('guard_name', 'web'),
            ],
        ];
    }
}
