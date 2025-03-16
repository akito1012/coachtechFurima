<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'explanation' => ['required', 'max|255'],
            'category_ids[]' => ['required'],
            'condition' => ['required'],
            'price' => ['required', 'numeric', 'min|0']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'explanation.required' => '商品の説明を入力してください',
            'explanation.max' => '商品の説明は２５５文字以内で入力してください',
            'category_ids[].required' => 'カテゴリーを選択してください',
            'condition.required' => '商品の状態を選択してください',
            'price.required' => '販売価格を入力してください',
            'price.numeric' => '販売価格は数字で入力してください',
            'price.min' => '販売価格は０円以上で入力してください'
        ];
    }
}
