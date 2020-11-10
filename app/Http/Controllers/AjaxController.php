<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;
use App\news;
use App\topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
class AjaxController extends Controller
{
    public function getNews($topics_id)
    {
        $news = news::where('topics_id','=',$topics_id)->get();
        foreach($news as $ns)
        {
            echo "<option value='".$ns->ID."'>".$ns->name."</option>";
        }
    }
}
?>