<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\drivingtests;
use App\questiontests;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class QTsController extends Controller
{
    public function getList()
	{
        $questiontests = questiontests::all();
		return view('admin_view.questiontests.list',['questiontests'=>$questiontests]);
	}
    public function getAdd()
    {
        $drivingtests = drivingtests::all(); 
        return view('admin_view.questiontests.add',compact('drivingtests'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'question'=>'required|min:5',
            'option_a' => 'required',
            'option_b' => 'required',
            'correct' => 'required',
    	],
    	[
    		'question.required'=>'Bạn chưa nhập nội dung câu hỏi',
    		'question.min'=>'Nội dung câu hỏi phải có ít nhất 5 kí tự',
            'option_a.required'=>'Bạn chưa nhập đáp án a',
            'option_b.required'=>'Bạn chưa nhập đáp án b',
            'correct.required'=>'Bạn chưa nhập đáp án đúng',
		  
    	]);
    	$questiontests = new questiontests;
        $questiontests->question = $request->question;
        $questiontests->option_a = $request->option_a;
        $questiontests->option_b = $request->option_b;
        $questiontests->option_c = $request->option_c;
        $questiontests->option_d = $request->option_d;
        $questiontests->correct = $request->correct;
        $questiontests->driving_tests_id = $request->driving_tests_id;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
               {
                return redirect('admin/questiontests/add')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
               }
            $name = $file->getClientOriginalName();
            $picture = str::random(6)."_".$name;
            $file->move("upload/questions_img",$picture);
            $questiontests->picture=$picture;
        }
        else
        {
            $questiontests->picture= "";
        }
        $questiontests->save();
        return redirect('admin/questiontests/list')->with('thongbao','Thêm câu hỏi thành công');
    }
    public function getEdit($ID)
    {
        $drivingtests = drivingtests::all();
        $questiontests = questiontests::find($ID);
        return view('admin_view.questiontests.edit', compact('questiontests','drivingtests'));//'comment'));
    }
    public function postEdit(Request $request, $ID)
    {
        $questiontests = questiontests::find($ID);
       $this->validate($request,
        [
            'question'=>'required|min:5',
        ],
        [
            'question.min'=>'Nội dung câu hỏi phải có ít nhất 5 kí tự',
        
        ]);
        $questiontests->question = $request->question;
        $questiontests->option_a = $request->option_a;
        $questiontests->option_b = $request->option_b;
        $questiontests->option_c = $request->option_c;
        $questiontests->option_d = $request->option_d;
        $questiontests->correct = $request->correct;
        $questiontests->driving_tests_id = $request->driving_tests_id;
            if($request->hasFile('picture'))
            {
                $file = $request->file('picture');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                   {
                    return redirect('admin/questiontests/edit')
                            ->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
                   }
                $name = $file->getClientOriginalName();
                $picture = str::random(4)."_".$name;
                while (file_exists("upload/questions_img/".$picture))
                {
                    $picture = str::random(4)."_".$name;
                }
                $file->move("upload/questions_img", $picture); 
                unlink("upload/questions_img".$questiontests->picture);
                $questiontests->picture = $picture;
            }
        $questiontests->save();
        return redirect('admin/questiontests/list')->with('thongbao','Bạn đã sửa thành công');
    
    }
    
    public function getDel($id)
    {
        $questiontests = questiontests::where('ID',$id);
        $questiontests->delete();
        return redirect('admin/questiontests/list')->with('thongbao','Bạn đã xóa câu hỏi thành công');
    }
    
}
