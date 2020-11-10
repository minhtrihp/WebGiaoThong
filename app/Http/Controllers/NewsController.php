<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\topic;
use App\news;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;

class NewsController extends Controller
{
    public function getList()
    {
        $news = news::all();
        return view('admin_view.news.list',['news'=>$news]);
    }
    public function getAdd()
    {
        $topic = topic::all(); 
        return view('admin_view.news.add',compact('topic'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'contents'=>'required',
            'date'=>'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên tin tức',
            'name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
            'name.max'=>'Tên chủ đề phải có nhiều nhất 100 kí tự',
            'description.required'=>'Bạn chưa nhập mô tả',
            'contents.required'=>'Bạn chưa nhập nội dung',
            'date'=>'Bạn chưa chọn ngày đăng',

        
        ]);
        $news = new news;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->contents = $request->contents;
        $news->topics_id = $request->topics_id;
        $news->date = $request->date;
        $news->views = 0;
        $news->hot = $request->hot;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
               {
                return redirect('admin/news/add')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
               }
            $name = $file->getClientOriginalName();
            $picture = str::random(6)."_".$name;
            $file->move("upload/news_img",$picture);
            $news->picture=$picture;
        }
        else
        {
            $news->picture= "";
        }

        $news->save();
        return redirect('admin/news/list')->with('thongbao','Thêm tin tức thành công');
    }
    public function getEdit($ID)
    {
        $topic = topic::all();
        $news = news::find($ID);
        // $comment = comment::all();
        return view('admin_view.news.edit', compact('news','topic'));//'comment'));
    }
   public function postEdit(Request $request, $news_id)
    {
        $news = news::find($news_id);
      $this->validate($request,
        [
            'name'=>'required|min:3|max:100',
            'description'=>'required',
            'contents'=>'required',
            'date'=>'required',
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên tin tức',
            'name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
            'name.max'=>'Tên chủ đề phải có nhiều nhất 100 kí tự',
            'description.required'=>'Bạn chưa nhập mô tả',
            'contents.required'=>'Bạn chưa nhập nội dung',
            'date'=>'Bạn chưa chọn ngày đăng',
            
        ]);
        $news->name = $request->name;
        $news->description = $request->description;
        $news->contents = $request->contents;
        $news->topics_id = $request->topics_id;
        $news->date = $request->date;
        $news->views = 0;
        $news->hot = $request->hot;
            if($request->hasFile('picture'))
            {
                $file = $request->file('picture');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                   {
                    return redirect('admin/news/edit')
                            ->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
                   }
                $name = $file->getClientOriginalName();
                $picture = str::random(4)."_".$name;
                while (file_exists("upload/news_img/".$picture))
                {
                    $picture = str::random(4)."_".$name;
                }
                $file->move("upload/news_img", $picture);
                unlink("upload/news_img".$news->picture);
                $news->picture = $picture;
            }
        $news->save();
        return redirect('admin/news/list')->with('thongbao','Bạn đã sửa tin tức thành công');
    
}
    
    public function getDel($id)
    {
        $news = news::where('ID',$id);
        $news->delete();
        return redirect('admin/news/list')->with('thongbao','Bạn đã xóa tin tức thành công');
    }
    
}
