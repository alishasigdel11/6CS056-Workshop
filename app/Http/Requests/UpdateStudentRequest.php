<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:255',
            'email'         => [
                'required',
                'email',
                'max:255',
                Rule::unique('students')->ignore($this->student->id),
            ],
            'phone' => [
    'required',
    'regex:/^(98|97)\d{8}$/',
],
            'address'       => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date',
        ];
    }
}