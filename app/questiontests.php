<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questiontests extends Model
{
    //
    protected $table = 'question_tests';

    protected $fillable = ['ID', 'question','option_a','option_b', 'option_c','option_d','picture','driving_tests_id','correct'];
    protected  $primaryKey = 'ID';
    public $timestamps = false;


    public function driving_tests() {
        return $this->belongsTo('App\drivingtests','driving_tests_id','ID');
    }
    
}