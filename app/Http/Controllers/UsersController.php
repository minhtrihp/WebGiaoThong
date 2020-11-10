<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;

class UsersController extends Controller
{
  public function getList()
  {
      $users = User::all();
      return view('admin_view.users.list',['users'=>$users]);
  }
}
