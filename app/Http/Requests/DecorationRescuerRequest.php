<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DecorationRescuerRequest extends FormRequest
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
            'datetime' => 'date|nullable',
            'decoration_id' => "required|exists:decorations,id",
            'rescuer_id' => "required|exists:rescuers,id",
        ];
    }
}
