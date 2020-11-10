<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drivingtests extends Model
{
    //
    protected $table = 'driving_tests';

    protected $fillable = ['ID', 'name','date','description', 'driving_licenses_id'];
    protected  $primaryKey = 'ID';
    public $timestamps = false;


    public function driving_licenses() {
        return $this->belongsTo('App\drivinglicenses','driving_licenses_id','ID');
    }

}