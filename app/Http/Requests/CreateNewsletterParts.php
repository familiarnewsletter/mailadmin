<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsletterParts extends FormRequest
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
            'title' => 'required',
            'img_url' => 'required',
            'link_url' => 'required',
            'text' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'img_url' => '画像名',
            'link_url' => 'リンク先URL',
            'text' => 'テキスト',
        ];
    }
}
