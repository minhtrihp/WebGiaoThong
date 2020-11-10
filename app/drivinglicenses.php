<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drivinglicenses extends Model
{
    ///
    protected $table = 'driving_licenses';

    protected $fillable = ['ID', 'name', 'description'];
    protected  $primaryKey = 'ID';
    public $timestamps = false;
   
    public function driving_tests() {
        return $this->hasMany('App\driving_test','driving_licenses_id','ID');
    }
}