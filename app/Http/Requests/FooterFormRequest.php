<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterFormRequest extends FormRequest
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
            'status'        =>['nullable'],
            'lable_1'       =>['required','string'],
            'address'       =>['required','string'],
            'phone'         =>['required','numeric','digits:10'],
            'email'         =>['required','email'],
            'social_1'      =>['nullable','string'],
            'social_1_url'  =>['nullable','url'],
            'social_2'      =>['nullable','string'],
            'social_2_url'  =>['nullable','url'],
            'social_3'      =>['nullable','string'],
            'social_3_url'  =>['nullable','url'],
            'social_4'      =>['nullable','string'],
            'social_4_url'  =>['nullable','url'],

            'lable_2'       =>['required','string'],
            'link_1_name'   =>['required','string'],
            'link_1_url'    =>['nullable','string'],
            'link_2_name'   =>['required','string'],
            'link_2_url'    =>['nullable','string'],
            'link_3_name'   =>['required','string'],
            'link_3_url'    =>['nullable','string'],
            'link_4_name'   =>['required','string'],
            'link_4_url'    =>['nullable','string'],

            'lable_3'       =>['required','string'],
            'link_5_name'   =>['required','string'],
            'link_5_url'    =>['nullable','string'],
            'link_6_name'   =>['required','string'],
            'link_6_url'    =>['nullable','string'],
            'link_7_name'   =>['required','string'],
            'link_7_url'    =>['nullable','string'],
            'link_8_name'   =>['required','string'],
            'link_8_url'    =>['nullable','string'],

            'lable_4'       =>['required','string'],
            'discription'   =>['required','string'],

            'devloper_name'       =>['required','string'],
            'devloper_company'    =>['required','string'],
            'devloper_site'       =>['required','string'],
        ];
    }
}
