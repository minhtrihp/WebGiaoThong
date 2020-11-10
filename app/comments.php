<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    protected $table = 'comments';

    protected $fillable = ['ID', 'contents','date' , 'user_id', 'news_id'];
    protected  $primaryKey = 'ID';

    public $timestamps = false;

    public function news() {
        return $this->belongsTo('App\news','news_id','ID');
    }

}
