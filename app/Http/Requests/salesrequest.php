<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Auth;
class salesrequest extends Request {

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
	     'item_name' => 'required',
        'item_size' => 'required',
        //'Design_Code'=>'required|unique:sales',
        'discount'=>'required|integer|between:0,100',
        'original_price'=>'required|integer|min:0',
        //'discounted_price'=>'required',
        'Return_status'=>'required',
       'p_payment_or_f_payment'=>'required',
        'Gg_Gng'=>'required',
        'exchange_Status'=>'required',
        'Branch_Code'=>'required',
        'cash'=>'integer|min:0'
		];
	}

}
