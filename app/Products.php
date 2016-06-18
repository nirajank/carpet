<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

	protected $table='products';
	public function photos()
{
return $this->morphMany('App\Photos', 'imageable');
}

}
