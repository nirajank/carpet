<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model {

	protected $table='report';
	protected $fillable = ['id','label','Branch_Code','value','highlight','color'];
	public $timestamps=false;


}
