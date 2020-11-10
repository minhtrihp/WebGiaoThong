@extends('admin_view.layouts.app')

@section('content_admin')
            <div class="container-fluid" style="margin-left: 300px; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Driving Tests
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
                        <form action="../edit/{{$drivingtests->ID}}" method="POST" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Name</strong></label></h4>
                                <input class="form-control" style="height:55px" name="name"
                                value="{{$drivingtests->name}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Date</strong></label></h4>
                                <input class="form-control" type="date" style="height:55px" name="date"
                                value="{{$drivingtests->date}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Description</strong></label></h4>
                                <textarea id="demo" name="description" class="form-control ckeditor" rows="3">
                                    {!! $drivingtests->description !!}
                                </textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Driving License</strong></label></h4>
                                 <select class="form-control" name="driving_licenses_id" id="driving_licenses_id">
                                @foreach($drivinglicenses as $dl)
                                   <option
                                   @if($drivingtests->driving_licenses_id == $dl->ID)
                                   {{"selected"}}
                                   @endif
                                    value="{{$dl->ID}}">{{$dl->name}}</option>
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
