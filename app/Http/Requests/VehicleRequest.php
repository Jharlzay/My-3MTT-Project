<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            //
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'nin' => 'required|string',
            'license_number' => 'required|string',
            'phone' => 'required|string',
            'passport' => 'required|image|max:1240|mimes:jpeg,png,jpg',
            'plate_number' => 'required|string',
            'model' => 'required|string',
            'color' => 'required|string',
            'manufacture_year' => 'required|string',
            'vehicle_photo.*' => 'required|max:1240|mimes:jpeg,png,jpg',


        ];
    }
}
