<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RescuerRequest extends FormRequest
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
            'biography' => 'string|nullable',
            'birthdate' => 'date|nullable',
            'firstname' => 'string|required',
            'lastname' => 'string|required'
        ];
    }
}
