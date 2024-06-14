<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            "surname" => "required",
            "name" => "required",
            "address" => "required",
            "birthday" => "required|date",
            "age" => "required|int",
            // "gender" => "required",
            "salary" => "required|numeric",
            "status" => "required|in:1,0",
        ];
    }
}
