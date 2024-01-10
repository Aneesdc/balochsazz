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
                        <li class="breadcrumb-item"><a href="{{url ('admin/books')}}">Albums</a></li>
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
                            <a href="{{url ('admin/books_add')}}" class="btn btn-primary float-right">Books Add</a>
                        </div>
                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>books_author_id</th>
                                            <th>Book Title</th>
                                            <th>Publisher Name</th>

                                            <th>Language</th>
                                            <th>Book File</th>
                                            <th>Pages</th>
                                            <th>Publisher Year</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($books as $book)
                                        <tr>
                                            <td>{{$book->id}}</td>
                                            <td>{{$book->books_author_id}}</td>
                                            <td>{{$book->book_title}}</td>

                                            <td>{{$book->publisher_name}}</td>
                                            <td>{{$book->language}}</td>
                                            <td>{{$book->book_file}}</td>
                                            <td>{{$book->pages}}</td>

                                            <td>{{$book->publisher_year}}</td>
                                            <td><a href="{{url ('admin/books_status/'.$book->id)}}" class="btn btn {{ ($book->type == 1) ? 'btn-primary' : 'btn-danger' }}">{{  ($book->type == '1') ? 'Active' : 'InActive' }}</a></td>
                                            <td>
                                                <a href="{{url ('admin/books-delete/'.$book->id)}}" class="fa fa-trash text-danger"></a> |
                                                <a href="{{url ('admin/books-edit/'.$book->id)}}" class="fa fa-edit text-success">Edit</a>
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