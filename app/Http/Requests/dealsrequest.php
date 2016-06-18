<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Auth;

class dealsrequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return User::where('id',Auth::user()->id)->where('role','Accountant')->exists();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'=>'required',
			'type'=>'required',
			'Branch_Code'=>'required',
			'date_tran'=>'required|date',
			'dc'=>'required|unique:deals',
		];
	}

}
