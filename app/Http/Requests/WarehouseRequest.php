<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class WarehouseRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
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
			'Item_Name' => 'required',
        'Item_size' => 'required',
        'Design_code'=>'required',
        'color'=>'required',
        'branch_id'=>'required',
		];
	}

}
