<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class PagesController extends Controller
{
    function __construct()
    {
        $news = news::all();

        view()->share('news',$news);
        //truyền biến thể loại thông qua view share thay vì phải compact cho từng function bên dưới
    }

    function tintuc()
    {
        $newss = news::paginate(4)->onEachSide(1);
        return view('pages.news.news',compact('newss'));
    }

    public function getSearch(Request $req)
    {
        $news =news::where('name','like','%'.$req->key.'%')->get();
        return view('pages.news.search',compact('news'));    
    }
}
