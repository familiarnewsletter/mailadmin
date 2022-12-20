<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsletter extends FormRequest
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
            'preheader_text' => 'required',
            'utm_campaign_id' => 'required',
            
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'preheader_text' => 'プリヘッダーテキスト',
            'utm_campaign_id' => 'キャンペーンコード ',

        ];
    }
}
