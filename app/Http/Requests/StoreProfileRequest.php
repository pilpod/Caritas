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
            'direction' => 'required | string',
            'city' => 'required | string ',
            'phone' => 'required | regex:/^[0-9]{9}/',
            'bankAccount' => 'required | regex:/^[a-zA-Z]{2}[0-9]{22}/',
            'bizum' => 'required | regex:/^[0-9]{13}/',
        ];
    }
}
