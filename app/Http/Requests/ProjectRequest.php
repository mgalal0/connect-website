<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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

        $rules = [
            'name'=>'required|max:100',
            'service_id' => 'required|exists:services,id' ,
            'description' =>'required|min:10 |max:600'
        ];
        // Check if it's an update operation
        if ($this->isMethod('patch') || $this->isMethod('put')) {
            // Make the image field optional during update
            $rules['image'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:3048'; // Adjust the validation rules as needed
        } else {
            // For create operation, make the image field required
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048'; // Adjust the validation rules as needed
        }
        return $rules;
    }
}
