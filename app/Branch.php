<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model {

    protected $table = 'branch';
    protected $primaryKey='Branch_Code';
    protected $fillable = ['Branch_Code','Branch_Name', 'Contact','Address'];

   public function users()
    {
        return $this->belongsToMany('App\User','user_branch','Branch_Code','user_id');
    }

}
