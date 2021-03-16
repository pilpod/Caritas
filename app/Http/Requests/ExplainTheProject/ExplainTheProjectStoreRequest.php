<?php

namespace App\Http\Requests\ExplainTheProject;

use Illuminate\Foundation\Http\FormRequest;

class ExplainTheProjectStoreRequest extends FormRequest
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
            'catalan_explainTheProject_text' => 'required | string',
            'spanish_explainTheProject_text' => 'required | string',
        ];
    }
}
