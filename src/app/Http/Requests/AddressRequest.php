<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'name' => ['required'],
            'post_code' => ['required'],
            'address' => ['required'],
            'building' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'ユーザー名は必ず入力してください',
            'post_code.required' => '郵便番号は必ず入力してください',
            'address.required' => '住所は必ず入力してください',
            'building.required' => '建物名は必ず入力してください。なければ「なし」を入力してください'
        ];
    }
}
