@extends('admin_view.layouts.app')

@section('content_admin')
            <div class="container-fluid" style="margin-left: 300px; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Question Tests
                            <small>Edit</small>
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
                        <form action="../edit/{{$questiontests->ID}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Question</strong></label></h4>
                                <input class="form-control" style="height:55px" name="question"
                                 value="{{$questiontests->question}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>OptionA</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_a"
                                 value="{{$questiontests->option_a}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>OptionB</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_b"
                                 value="{{$questiontests->option_b}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>OptionC</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_c"
                                 value="{{$questiontests->option_c}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>OptionD</strong></label></h4>
                                <input class="form-control" style="height:55px" name="option_d"
                                 value="{{$questiontests->option_d}}" />
                            </div>
                             <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Picture</strong></label></h4>
                                <p><img width="500px" src="upload/questions_img/{{$questiontests->picture}}"></p>
                                <input type="file" style="height:55px" name="picture" class="form-control"/>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Driving Test</strong></label></h4>
                                 <select class="form-control" name="driving_tests_id" id="driving_tests_id">
                                @foreach($drivingtests as $dt)
                                   <option
                                   @if($questiontests->driving_tests_id == $dt->ID)
                                   {{"selected"}}
                                   @endif
                                    value="{{$dt->ID}}">{{$dt->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Correct</strong></label></h4>
                                <input class="form-control" style="height:55px" name="correct"
                                 value="{{$questiontests->correct}}" />
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
