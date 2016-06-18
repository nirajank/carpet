<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Warehouse extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $table = 'warehouse';
	protected $primaryKey='Design_Code';
	protected $fillable = ['Item_Name', 'Item_size', 'Design_Code','color','Branch_Code'];
	  public function branch()
   {
        return $this->hasOne('App\Branch','branch_id');
        
    }

}
