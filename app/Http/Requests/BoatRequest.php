<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoatRequest extends FormRequest
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
            'name' => 'required|max:255',
            'type' => 'nullable|max:255',
            'constructor' => 'nullable|max:255',
            'length' => 'nullable',
            'width' => 'nullable',
            'weight' => 'nullable',
            'draugth' => 'nullable',
            'commisionning' => 'nullable|date',
            'withdraw' => 'nullable|date',
            'description' => 'required',
            'station_id' => "nullable|exists:stations,id"
        ];
    }
}
