<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\drivinglicenses;
use App\drivingtests;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DTsController extends Controller
{
    public function getList()
	{
         $drivingtests = drivingtests::all();
        return view('admin_view.drivingtests.list',['drivingtests'=>$drivingtests]);
	}
    public function getAdd()
    {
        $drivinglicenses = drivinglicenses::all();   
        return view('admin_view.drivingtests.add',compact('drivinglicenses'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'name'=>'required|min:3|max:100',
            'description'=>'required',
            'date'=>'required',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên',
    		'name.min'=>'Tên phải có ít nhất 3 kí tự',
            'name.max'=>'Tên phải có nhiều nhất 100 kí tự',
            'description.required'=>'Bạn chưa nhập mô tả',
            'date'=>'Bạn chưa chọn ngày đăng',

		
    	]);
    	$drivingtests = new drivingtests;
        $drivingtests->name = $request->name;
        $drivingtests->description = $request->description;
        $drivingtests->date = $request->date;
        $drivingtests->driving_licenses_id = $request->driving_licenses_id;
        $drivingtests->save();
        return redirect('admin/drivingtests/list')->with('thongbao','Thêm bài thi thành công');
    }
    public function getEdit($ID)
    {
        $drivinglicenses = drivinglicenses::all();
        $drivingtests = drivingtests::find($ID);
        return view('admin_view.drivingtests.edit', compact('drivinglicenses','drivingtests'));//'comment'));
    }
   public function postEdit(Request $request, $ID)
    {
        $drivingtests = drivingtests::find($ID);
     $this->validate($request,
        [
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'date'=>'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên',
            'name.min'=>'Tên phải có ít nhất 3 kí tự',
            'name.max'=>'Tên phải có nhiều nhất 100 kí tự',
            'description.required'=>'Bạn chưa nhập mô tả',
            'date'=>'Bạn chưa chọn ngày đăng',

        
        ]);
        $drivingtests->name = $request->name;
        $drivingtests->description = $request->description;
        $drivingtests->date = $request->date;
        $drivingtests->driving_licenses_id = $request->driving_licenses_id;
        $drivingtests->save();
        return redirect('admin/drivingtests/list')->with('thongbao','Bạn đã sửa thành công');
    
    }
    
    public function getDel($id)
    {
        $drivingtests = drivingtests::where('ID',$id);
        $drivingtests->delete();
        return redirect('admin/drivingtests/list')->with('thongbao','Bạn đã xóa bài thi thành công');
    }
    
}
