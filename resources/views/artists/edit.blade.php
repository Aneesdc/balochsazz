@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artists Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/artists')}}">Artists</a></li>
                        <li class="breadcrumb-item active">Artists Edit</li>
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
                            <h3 class="card-title">Artists | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/artists_update')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$artists->id}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Artist Name</label>
                                    <input type="text" name="artist_name" class="form-control" id="artist_name" value="{{$artists->artist_name}}">
                                </div>


                                <div class="form-group">
                                    <label for="artist_image">artist_image</label>
                                    <input type="file" name="artist_image" class="form-control" id="artist_image">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Description</label>
                                    <textarea value="{{$artists->description}}" type="text" name="description" class="form-control" id="summernote">
                                    {{$artists->description}}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-control" id="code" value="{{$artists->code}}">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" value="{{$artists->tags}}">
                                </div>



                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" {{ ($artists->status == 'active') ? 'selected' : ''}}>Active</option>
                                        <option value="inactive" {{ ($artists->status == 'inactive') ? 'selected' : ''}}>IN Active</option>
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