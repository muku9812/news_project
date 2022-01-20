<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name'=>'required',
            'address'=>'required',
            'pam_vat'=>'required',
            'reg_no'=>'required',
            'facebook'=>'required',
            'youtube'=>'required',
            'twitter'=>'required',
            'gmail'=>'required',
            'skype'=>'required',
            'phone'=>'required',
            'image_file'=>'required',
            'image_files'=>'required',
        ];
    }
}
