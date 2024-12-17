<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
       $rules= [
        'name' => 'required|min:3|max:200|unique:services,name,except,id' ,
            'service_id'=>'required|exists:services,id',
        ];
        if ($this->isMethod('patch') || $this->isMethod('put')) {
            $rules['logo'] = 'sometimes|image|mimes:jpeg,png,jpg,gif|max:3048'; 
        } else {
            $rules['logo'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048'; 
        }
        return $rules;
    }
}
