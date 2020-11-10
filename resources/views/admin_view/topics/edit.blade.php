@extends('admin_view.layouts.app')

@section('content_admin')
            <div class="container-fluid" style="margin-left: 300px; margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Topics
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
                        <form action="../edit/{{$topic->ID}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>                                
                                <input class="form-control" name="Name" placeholder="Tên chủ đề" value="{{$topic->Name}}" />
                                <label>Description</label>                                
                                <input class="form-control" name="Description" placeholder="Mô tả" value="{{$topic->description}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection
