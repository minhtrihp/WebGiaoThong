@extends('admin_view.layouts.app')

@section('content_admin')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Driving Licenses</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li><a href="#">Driving Licenses</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-right upgrade-btn">
                            <a href="{{ asset('admin/drivinglicenses/add') }}"
                                class="btn btn-success d-none d-md-inline-block text-white" style="padding:10px 28px; font-size: 15px; font-weight: bold;">Add  <i class="fas fa-plus-circle fa-1x"></i></a>
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
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0"></th>
                                                <th class="border-top-0"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($drivinglicenses as $dl)
                                            <tr style="font-family: Roboto;">
                                                <td>{{$dl->ID}}</td>
                                                <td>{{$dl->name}}</td>
                                                <td>{{$dl->description}}</td>
                                                <td><a href="../drivinglicenses/edit/{{$dl->ID}}">Edit</a></td>
                                                <td><a href="../drivinglicenses/del/{{$dl->ID}}">Delete</a></td>
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