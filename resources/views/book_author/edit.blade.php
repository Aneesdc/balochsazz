@extends('layouts.mastertamplat')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Book Author Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/book_author')}}">Book Author</a></li>
                        <li class="breadcrumb-item active">Book Author Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        @include('layouts/errormessage')
                        <!-- form start -->
                        <div class="card-header">
                            <h3 class="card-title">Book Author | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/book_author_update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$book_author->id}}">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="author_name">Author Name</label>
                                    <input type="text" name="author_name" class="form-control" id="author_name" value="{{$book_author->author_name}}">
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection