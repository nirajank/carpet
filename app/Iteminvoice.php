<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Iteminvoice extends Model {

	protected $table = 'iteminvoice';
    protected $fillable = ['Item_Name', 'Design_Code', 'original_price','discount_rate','discount_price'];
   
}
