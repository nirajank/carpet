<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

	protected $table='purchases';
	protected $fillable = ['id','date_tran','item_name','price','Gg_Gng','partial','cash','tailor','Design_Code','give','p_credit','Branch_Code'];
   protected $dates = ['date_tran', 'disabled_at'];
    protected $dateFormat = 'Y-m-d';
    public function user()
    {
     return $this->belongsTo('App\Purchase','sales_id');
      }

}
