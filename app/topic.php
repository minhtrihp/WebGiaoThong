<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    ///
    protected $table = 'topics';

    protected $fillable = ['ID', 'Name', 'description'];
    // protected  $primaryKey = 'ID';
    public $timestamps = false;
   
    public function news() {
        return $this->hasMany('App\news','topics_id','ID');
    }
}