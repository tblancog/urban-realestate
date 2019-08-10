<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
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
          'title' => 'required|string|max:191|unique:buildings,'.$this->id,
          'address' => 'required|string|max:100',

          'floor'=> 'required',
          'department'=> 'required',

          'url_maps' => 'string|max:2048',
          'price' => 'numeric|between:0,10000000',
          'area'=> 'required|numeric',
          'rooms'=> 'required|numeric',

          'description' => 'required|string|max:2048',
          'status' => 'required',
        ];
    }
}
