@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Books Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/books')}}">Books</a></li>
                        <li class="breadcrumb-item active">Books Edit</li>
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
                            <h3 class="card-title">Books | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/books_update')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="{{$books->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="books_author_id">Author Name</label>
                                    <input type="text" name="books_author_id" class="form-control" id="books_author_id" value="{{$books->books_author_id}}">
                                </div>


                                <div class="form-group">
                                    <label for="book_title">book_title</label>
                                    <input type="text" name="book_title" class="form-control" id="book_title" value="{{$books->book_title}}">
                                </div>





                                <div class="form-group">
                                    <label for="publisher_name">Publisher Name</label>
                                    <input type="text" name="publisher_name" class="form-control" id="publisher_name" value="{{$books->publisher_name}}">
                                </div>




                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <input type="text" name="language" class="form-control" id="language" placeholder="language" value="{{$books->language}}">
                                </div>









                                <div class="form-group">
                                    <label for="book_file">book_file</label>
                                    <input type="file" name="book_file" class="form-control" id="book_file">
                                </div>


                                <div class="form-group">
                                    <label for="pages">pages</label>
                                    <input type="text" name="pages" class="form-control" id="pages" value="{{$books->pages}}">
                                </div>



                                <div class="form-group">
                                    <label for="publisher_year">publisher_year</label>
                                    <input type="text" name="publisher_year" class="form-control" id="publisher_year" value="{{$books->publisher_year}}">
                                </div>





                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select name="type" class="form-control" id="type">
                                        <option value="1" {{ ($books->type == '1') ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ ($books->type == '0') ? 'selected' : '' }}>IN Active</option>
                                    </select>
                                </div>



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