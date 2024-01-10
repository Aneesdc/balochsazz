@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News Datatable</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('admin/news')}}">News</a></li>
                        <li class="breadcrumb-item active">News DataTables</li>
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
                            <h3 class="card-title">News DataTable </h3>
                            <a href="{{url ('admin/news_add')}}" class="btn btn-primary float-right">News Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Url</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $new)
                                    <tr>
                                        <td>{{$new->id}}</td>
                                        <td>{{$new->type}}</td>
                                        <td>{{$new->title}}</td>
                                        <td>{{$new->image}}</td>
                                        <td>{{$new->url}}</td>
                                        <td>{{$new->description}}</td>
                                        <td><a href="{{url ('admin/news_status/'.$new->id)}}" class="btn btn {{ ($new->status == 'active') ? 'btn-primary' : 'btn-danger' }}">{{$new->status}}</a></td>
                                        <td>
                                            <a href="{{url ('admin/news-delete/'.$new->id)}}" class="fa fa-trash text-danger"></a> |
                                            <a href="{{url ('admin/news-edit/'.$new->id)}}" class="fa fa-edit text-success">Edit</a>
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