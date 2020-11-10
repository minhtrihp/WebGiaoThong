<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\news;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class MagazineController extends Controller
{
	public function getList()
	{
		$news = news::all();
		return view('pages.news.news',['news'=>$news]);
	}
}
