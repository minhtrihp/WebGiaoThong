<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class TopicsController extends Controller
{
    public function getList()
	{
        $topic = topic::all();
		return view('admin_view.topics.list',['topic'=>$topic]);
	}
    public function getAdd()
    {
    	return view('admin_view.topics.add');
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'Name'=>'required|min:3|max:100',
            'Description'=>'required',
    	],
    	[
    		'Name.required'=>'Bạn chưa nhập tên chủ đề',
    		'Name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
            'Name.max'=>'Tên chủ đề phải có nhiều nhất 100 kí tự',
            'Description.required'=>'Bạn chưa nhập mô tả',
		
    	]);
    	$topic = new topic;
    	$topic->Name = $request->Name;
        $topic->Description = $request->Description;
    	$topic->save();
    	return redirect('admin/topics/list')->with('thongbao','Thêm chủ đề thành công');
    }
    public function getEdit($id)
    {
            $topic = DB::table('topics')->where('ID',"=", $id)->first();
 
        return view('admin_view.topics.edit',compact('topic'));
    }
    public function postEdit(Request $request, $id)
    {
        $topic = DB::table('topics')->where('ID',"=",$id);
        $this->validate($request,
        [
            'Name'=>'required|min:3'
        ],
        [
            'Name.required'=>'Bạn chưa nhập tên chủ đề',
            'Name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
        ]);
        $topic->update(
            ['Name'=>$request->input('Name'),
             'Description'=>$request->input('Description'),
         ]);

        return redirect('admin/topics/list')->with('thongbao','Sửa khóa học thành công');
    }
    
    public function getDel($id)
    {
        $topic = topic::where('ID',$id);
        $topic->delete();
        return redirect('admin/topics/list')->with('thongbao','Bạn đã xóa chủ đề thành công');
    }
}
