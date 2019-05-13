<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class CategoryStoreRequest
 * @package App\Http\Requests\Admin
 */
class CategoryStoreRequest extends AbstractRequest
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
            'name' => 'required|string|max:255',
            'url' => 'required|string|unique:categories|max:255',
            'seo_id' => 'required|integer',
            'status' => 'required|integer',
        ];
    }
}
