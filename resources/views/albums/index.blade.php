@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Albums Datatable</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('admin/albums')}}">Albums</a></li>
                        <li class="breadcrumb-item active">Albums DataTables</li>
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
                            <h3 class="card-title">Albums DataTable </h3>
                            <a href="{{url ('admin/albums_add')}}" class="btn btn-primary float-right">Albums Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Album Name</th>
                                            <th>Image</th>
                                            <th>artist_id</th>

                                            <th>category_id</th>
                                            <th>Multi Artists</th>
                                            <th>Description</th>
                                            <th>Code</th>
                                            <th>Tags</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($albums as $alb)
                                        <tr>
                                            <td>{{$alb->id}}</td>
                                            <td>{{$alb->album_name}}</td>
                                            <td>{{$alb->album_image}}</td>
                                            <td>{{$alb->artist_name}}</td>
                                            <td>{{$alb->cat_name}}</td>
                                            <td>{{$alb->multi_artists}}</td>
                                            <td>{{$alb->description}}</td>
                                            <td>{{$alb->code}}</td>
                                            <td>{{$alb->tags}}</td>
                                            <td><a href="{{url ('admin/albums_status/'.$alb->id)}}" class="btn btn {{ ($alb->status == 'active') ? 'btn-primary' : 'btn-danger' }}">{{$alb->status}}</a></td>
                                            <td>
                                                <a href="{{url ('admin/albums-delete/'.$alb->id)}}" class="fa fa-trash text-danger"></a> |
                                                <a href="{{url ('admin/albums-edit/'.$alb->id)}}" class="fa fa-edit text-success">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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