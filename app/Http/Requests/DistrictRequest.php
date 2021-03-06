<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistrictRequest extends FormRequest
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
        if(isset($this->id)){
            return [
                'district_name'     =>  'required|unique:districts,district_name,'.$this->id,
                'fk_division_id'=>'required',
            ];
        }

        return [
            'fk_division_id'=>'required',
            'district_name'=>'required|unique:districts'
        ];

    }
}
