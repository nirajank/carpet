<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cas extends Model {

	protected $table='cashes';
	protected $fillable = ['id', 'Branch_Code', 'sales_id','purchase_id','cash_in_s','cash_out_p','petty_cash_in','petty_cash_out','cash_in_h','total_cash_r','petty_cash','date_tran'];
     protected $dates = ['date_tran'];
     protected $dateFormat = 'Y-m-d';
      public function deals()
    {
     return $this->belongsToMany('App\Deal');
  }
}