<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model {

	protected $table='staff';
	public function photos()
     {
      return $this->morphMany('App\Photos', 'imageable');
     }

}
