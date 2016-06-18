<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model {

	protected $table='table';
	protected $fillable=['id','filename','mime','original_filename'];

}
