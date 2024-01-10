@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users Datatable</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url ('admin/users')}}">Users</a></li>
            <li class="breadcrumb-item active">Users DataTables</li>
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
              <h3 class="card-title">Users DataTable </h3>
              <a href="{{url ('admin/add_users')}}" class="btn btn-primary float-right">Add User</a>
            </div>
            <!-- /.card-header -->
            @include('layouts/errormessage')
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>fullname</th>
                    <th>Email</th>
                    <th>Statis</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{url ('admin/status/'.$user->id)}}" class=" btn btn{{($user->status == 'active') ? 'btn btn-success' : 'btn btn-danger' }}">{{$user->status}}</a></td>
                    <td>
                      <a href="{{url ('admin/users-delete/'.$user->id)}}" class="fa fa-trash text-danger"></a> |
                      <a href="{{url ('admin/user-edit/'.$user->id)}}" class="fa fa-edit text-success">Edit</a>
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