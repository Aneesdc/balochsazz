@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/news')}}">News</a></li>
                        <li class="breadcrumb-item active">News Add</li>
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
                            <h3 class="card-title">News | <small>Add</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/news_store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                                </div>


                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>

                                <div class="form-group">
                                    <label for="url">url</label>
                                    <input type="text" name="url" class="form-control" id="url" placeholder="url">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="summernote">
                                     Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>






                                <div class="form-group">
                                    <label for="status">type</label>
                                    <select name="type" class="form-control" id="status">
                                        <option value="news">news</option>
                                        <option value="upcoming">upcoming</option>
                                        <option value="events">events</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">IN Active</option>
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