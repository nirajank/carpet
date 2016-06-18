<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model {

	protected $table='deals';
	protected $primaryKey='dc';
	protected $fillable = ['dc','credit', 'debit', 'type','name','deal_type','Branch_Code','date_tran'];

}
