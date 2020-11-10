@extends('admin_view.layouts.app')

@section('content_admin')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Users</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li><a href="#">Users</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                      @if(session('thongbao'))
                                    <div class="alert alert-success">
                                        {{session('thongbao')}}
                                    </div>
                                    @endif
                                    <table class="table user-table" style="font-size:20px; ">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Birthdate</th>
                                                <th class="border-top-0">Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($users as $us)
                                            <tr style="font-family: Roboto;">
                                                <td>{{$us->id}}</td>
                                                <td>{{$us->name}}</td>
                                                <td>{{$us->email}}</td>
                                                <td>{{$us->birthdate}}</td>
                                                <td>{{$us->level}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
