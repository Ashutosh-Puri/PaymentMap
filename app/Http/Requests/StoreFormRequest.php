<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
           'store_name' => ['required','string'],
           'owner_name' => ['required','string'],
           'store_category' => ['required','string'],
           'store_type' => ['required','string'],
           'store_time' => ['required','string'],
           'store_site' => ['nullable','url'],
           'store_photo' => ['nullable','mimes:png,jpg,jpeg'],
           'store_qr' => ['nullable','mimes:png,jpg,jpeg'],
           'account_no' => ['nullable','numeric'],
           'ifsc_code' => ['nullable','string'],
           'account_name' => ['nullable','string'],
           'upi_id' => ['nullable','string'],
           'status' => ['nullable'],

           'country_id' => ['required','integer'],
           'state_id' => ['required','integer'],
           'city_id' => ['required','integer'],
           'village_id' => ['required','integer'],
           'street' => ['required','string'],
        ];
    }
}
