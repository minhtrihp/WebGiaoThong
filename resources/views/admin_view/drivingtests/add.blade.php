@extends('admin_view.layouts.app')

@section('content_admin')
            <div class="container-fluid" style="margin-left: 300px; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DrivingTests
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
                        <form action="#" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Name</strong></label></h4>
                                <input class="form-control" style="height:55px" name="name"
                                placeholder="Vui lòng nhập tên bài thi" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Date</strong></label></h4>
                                <input class="form-control" type="date" style="height:55px" name="date"
                                placeholder="Vui lòng chọn ngày" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Description</strong></label></h4>
                                <textarea id="demo" name="description" class="form-control ckeditor" rows="3"></textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Driving License</strong></label></h4>
                                 <select class="form-control" name="driving_licenses_id">
                                @foreach($drivinglicenses as $dl)
                                   <option value="{{$dl->ID}}">{{$dl->name}}</option>
                                   @endforeach
                               </select>
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