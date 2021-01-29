<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() === 'regist') {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /* ※条件
            - パスワードが７文字以上
            - パスワードが確認用と一致している
            - 全ての項目が入力されている
            */  
            'Name'  => 'required',
            'email' => 'required',
            'pass'  => 'required|gte:7',
            'confirm_password' => 'required|same:pass' 
        ];
    }

    
    public function messages() {
        return [
            'Name.required'  => '名前が入力されていません',
            'email.required' => 'メールアドレスが入力されていません',
            'pass.required'  => 'パスワードが入力されていません',
            'pass.gte'  => '7文字以上で設定してください',
            'confirm_password.required' => '確認用パスワードが入力されていません', 
            'confirm_password.same' => 'パスワードが不一致です'
        ];
    }
}
