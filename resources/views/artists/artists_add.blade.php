@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artists Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/artists')}}">Artists</a></li>
                        <li class="breadcrumb-item active">Artists Add</li>
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
                            <h3 class="card-title">Artists | <small>Add</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/artists_store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Artist Name</label>
                                    <input type="text" name="artist_name" class="form-control" id="artist_name" placeholder="Artists Name">
                                </div>


                                <div class="form-group">
                                    <label for="artist_image">artist_image</label>
                                    <input type="file" name="artist_image" class="form-control" id="artist_image">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="summernote">
                                     Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-control" id="code" placeholder="code">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" placeholder="tags">
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