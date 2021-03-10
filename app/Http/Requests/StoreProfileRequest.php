<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
        return [
            'name' => 'required |string',
            'direction' => 'required | string',
            'city' => 'required | string ',
            'postcode' => 'required | regex:/^[0-9]{5}/',
            'phone' => 'required | regex:/^[0-9]{9}/',
            'bankAccount' => 'required | regex:/^[a-zA-Z]{2}[0-9]{22}/',
            'bizum' => 'required | min: 5 | max: 13 |regex:/^\d/',
        ];
    }
}
