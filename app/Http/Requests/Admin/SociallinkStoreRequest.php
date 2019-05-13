<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

/**
 * Class SociallinkStoreRequest
 * @package App\Http\Requests\Admin
 */
class SociallinkStoreRequest extends AbstractRequest
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
			'icon' => 'required|string|max:255',
			'url' => 'required|string|unique:sociallinks|max:255',
			'status' => 'required|integer',
		];
	}
}
