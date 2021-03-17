<?php

namespace App\Http\Requests\ExplainTheProject;

use Illuminate\Foundation\Http\FormRequest;

class ExplainTheProjectUpdateRequest extends FormRequest
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
            'text_content' => 'required | string',
        ];
    }
}
