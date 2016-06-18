<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Partial extends Model {

	protected $table='partials';
	protected $fillable = ['credit', 'debit', 'cash','Design_Code'];
}
