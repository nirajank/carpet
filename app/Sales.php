<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model {
	protected $table='sales';

	protected $fillable = ['id','credit','item_name', 'item_size', 'Branch_Code','Return_status','Gg_Gng','exchange_Status','discount','original_price','discounted_price','p_payment_or_f_payment','Design_Code','date_tran'];
       protected $dates = ['date_tran', 'disabled_at'];
    protected $dateFormat = 'Y-m-d';
}
