<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Article extends FormRequest
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
            'url' => 'required',
            'images' => 'required',
            'text' => 'required',
            'category_id' => 'required',
            'seo_id' => 'required',
            'views' => 'required',
            'slide' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ];
    }
}
