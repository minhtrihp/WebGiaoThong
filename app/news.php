<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $table = 'news';

    protected $fillable = ['ID', 'name','description', 'contents','date','picture','hot','views'];
    protected  $primaryKey = 'ID';
    public $timestamps = false;


    public function comment() {
        return $this->hasMany('App\comments','news_id','ID');
    }
}