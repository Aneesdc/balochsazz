@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artists Datatable</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('admin/artists')}}">Artists</a></li>
                        <li class="breadcrumb-item active">Artists DataTables</li>
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
                            <h3 class="card-title">Artists DataTable </h3>
                            <a href="{{url ('admin/artists_add')}}" class="btn btn-primary float-right">Artists Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Artist Name</th>
                                        <th>Image</th>
                                        <th>Desctiption</th>
                                        <th>Code</th>
                                        <th>Tags</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($artists as $art)
                                    <tr>
                                        <td>{{$art->id}}</td>
                                        <td>{{$art->artist_name}}</td>
                                        <td>{{$art->artist_image}}</td>
                                        <td>{{$art->description}}</td>
                                        <td>{{$art->code}}</td>
                                        <td>{{$art->tags}}</td>
                                        <td><a href="{{url ('admin/artists_status/'.$art->id)}}" class="btn btn {{ ($art->status == 'active') ? 'btn-primary' : 'btn-danger' }}">{{$art->status}}</a></td>
                                        <td>
                                            <a href="{{url ('admin/artists-delete/'.$art->id)}}" class="fa fa-trash text-danger"></a> |
                                            <a href="{{url ('admin/artists-edit/'.$art->id)}}" class="fa fa-edit text-success">Edit</a>
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