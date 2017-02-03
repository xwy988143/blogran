<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createArticle extends FormRequest
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
            //
            'article.title'=>'required|min:3|max:30',
            'article.class'=>'required',
            'article.content'=>'required|min:1',
            'article.keyword'=>'required'
        ];
    }
}
