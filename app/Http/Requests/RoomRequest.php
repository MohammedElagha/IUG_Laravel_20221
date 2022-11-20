<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'building'      => 'required|string|max:1|min:1',
            'number'        => 'required|integer|min:001|max:701',
            'capacity'      => 'nullable|integer',
            'supervisor_id' => '',
        ];
    }

    public function messages () {
        return [
            'building.required'     => 'You must enter the building',
            'building.string'       => 'The building name must be c character',
            'building.max:1'        => 'The building name is just one character',
            'number.max:701'        => 'Wrong number or room',
            'capacity.integer'      => 'capacity must be a number',
        ];
    }
}
