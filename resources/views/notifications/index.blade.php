@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notifications Datatable</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('admin/notifications')}}">Notifications</a></li>
                        <li class="breadcrumb-item active">Notifications DataTables</li>
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
                            <h3 class="card-title">Notifications DataTable </h3>
                            <a href="{{url ('admin/notifications_add')}}" class="btn btn-primary float-right">Notifications Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Upload Id</th>
                                        <th>Type</th>
                                        <th>Notify To</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Is Read</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notifications as $noti)
                                    <tr>
                                        <td>{{$noti->id}}</td>
                                        <td>{{$noti->user_upload_id}}</td>
                                        <td>{{$noti->type}}</td>
                                        <td>{{$noti->notify_to}}</td>
                                        <td>{{$noti->title}}</td>
                                        <td>{{$noti->message}}</td>
                                        <td>{{$noti->is_read}}</td>
                                        <td>
                                            <a href="{{url ('admin/notifications-delete/'.$noti->id)}}" class="fa fa-trash text-danger"></a> |
                                            <a href="{{url ('admin/notifications-edit/'.$noti->id)}}" class="fa fa-edit text-success">Edit</a>
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