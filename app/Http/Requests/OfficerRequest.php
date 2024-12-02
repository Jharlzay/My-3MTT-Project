<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfficerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'identification_number' => 'required|string',
            'rank' => ['required', Rule::in(['inspector', 'sergeant', 'constable', 'commander'])],
            'email' => 'required|string|email|unique:officers,email',
            'phone' => 'required|string|unique:officers,phone',
            'password' => 'required|string',
        ];
    }
}
