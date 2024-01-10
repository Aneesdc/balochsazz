@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Datatable</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('admin/slider')}}">Slider</a></li>
                        <li class="breadcrumb-item active">Slider DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Slider DataTable </h3>
                            <a href="{{url ('admin/slider_add')}}" class="btn btn-primary float-right">Slider Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>slider</th>
                                        <th>title</th>
                                        <th>title2</th>
                                        <th>type</th>
                                        <th>page_route</th>
                                        <th>slider_image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slider as $slid)
                                    <tr>
                                        <td>{{$slid->id}}</td>
                                        <td>{{$slid->slider}}</td>
                                        <td>{{$slid->title}}</td>
                                        <td>{{$slid->title2}}</td>
                                        <td>{{$slid->page_route}}</td>
                                        <td>{{$slid->slider_image}}</td>
                                        <td>{{$slid->type}}</td>
                                        <td>
                                            <a href="{{url ('admin/slider-delete/'.$slid->id)}}" class="fa fa-trash text-danger"></a> |
                                            <a href="{{url ('admin/slider-edit/'.$slid->id)}}" class="fa fa-edit text-success">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection