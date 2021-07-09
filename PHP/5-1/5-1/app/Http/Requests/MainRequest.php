<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'body' => 'required|between:0,255',
        ];
    }
    public function messages() {
        return [
            'body.required' => '何も入力されていません',
            'body.between:0,255' => '文字数制限を超えています',
        ];
    }
}
