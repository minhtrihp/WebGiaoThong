@extends('admin_view.layouts.app')

@section('content_admin')
            <div class="container-fluid" style="margin-left: 300px; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Question Tests
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}

                        </div>
                        @endif
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Question</strong></label></h4>
                                <input class="form-control" style="height:55px" name="question"
                                placeholder="Vui lòng nhập nội dung câu hỏi" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Option A</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_a"
                                 placeholder="Vui lòng nhập đáp án A" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Option B</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_b"
                                 placeholder="Vui lòng nhập đáp án B" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Option C</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_c"
                                 placeholder="Vui lòng nhập đáp án C" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Option D</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_d"
                                 placeholder="Vui lòng nhập đáp án D" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Picture</strong></label></h4>
                                <input type="file" style="height:55px" name="picture" class="form-control"/>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Driving Test</strong></label></h4>
                                 <select class="form-control" name="driving_tests_id">
                                @foreach($drivingtests as $dt)
                                   <option value="{{$dt->ID}}">{{$dt->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Correct</strong></label></h4>
                                    <span style="color:red; font-weight: bold;">*Nhập kí tự in hoa</span>
                                <input class="form-control" style="height:55px;" name="correct"
                                placeholder="Vui lòng nhập câu trả lời đúng" />
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection