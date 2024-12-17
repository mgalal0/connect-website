<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        // dd($this->service->id);
        $rules = [
            'description' => 'required|min:10 |max:600',

        ];

        if ($this->isMethod('patch') || $this->isMethod('put')) {

            $rules['image'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:3048';
            $rules['name'] = 'required|min:3|max:200|unique:services,name,' . $this->service->id;
        } else {

            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['name'] = 'required|min:3|max:200|unique:services,name';
        }
        return $rules;
    }
}
