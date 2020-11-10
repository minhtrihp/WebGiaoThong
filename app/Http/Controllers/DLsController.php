<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\drivinglicenses;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DLsController extends Controller
{
    public function getList()
	{
        $drivinglicenses = drivinglicenses::all();
		return view('admin_view.drivinglicenses.list',['drivinglicenses'=>$drivinglicenses]);
	}
    public function getAdd()
    {
    	return view('admin_view.drivinglicenses.add');
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'Name'=>'required|min:1|max:100',
            'Description'=>'required',
    	],
    	[
    		'Name.required'=>'Bạn chưa nhập tên bằng lái',
    		'Name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
            'Name.max'=>'Tên chủ đề phải có nhiều nhất 100 kí tự',
            'Description.required'=>'Bạn chưa nhập mô tả',
		
    	]);
    	$drivinglicenses = new drivinglicenses;
    	$drivinglicenses->name = $request->Name;
        $drivinglicenses->description = $request->Description;
    	$drivinglicenses->save();
    	return redirect('admin/drivinglicenses/list')->with('thongbao','Thêm bằng lái thành công');
    }
    public function getEdit($id)
    {
            $drivinglicenses = DB::table('driving_licenses')->where('ID',"=", $id)->first();
 
        return view('admin_view.drivinglicenses.edit',compact('drivinglicenses'));
    }
    public function postEdit(Request $request, $id)
    {
        $drivinglicenses = DB::table('driving_licenses')->where('ID',"=",$id);
        $this->validate($request,
        [
            'Name'=>'required|min:1'
        ],
        [
            'Name.required'=>'Bạn chưa nhập tên',
            'Name.min'=>'Tên phải có ít nhất 1 kí tự',
        ]);
        $drivinglicenses->update(
            ['Name'=>$request->input('Name'),
             'Description'=>$request->input('Description'),
         ]);

        return redirect('admin/drivinglicenses/list')->with('thongbao','Sửa bằng lái thành công');
    }
    
    public function getDel($id)
    {
        $drivinglicenses = drivinglicenses::where('ID',$id);
        $drivinglicenses->delete();
        return redirect('admin/drivinglicenses/list')->with('thongbao','Bạn đã xóa bằng lái thành công');
    }
}
