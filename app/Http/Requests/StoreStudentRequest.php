<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255|unique:students,email',
            'phone' => [
    'required',
    'regex:/^(98|97)\d{8}$/',
],
            'address'       => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date',
        ];
    }
}