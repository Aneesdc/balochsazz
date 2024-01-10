@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Albums Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/Albums')}}">Albums</a></li>
                        <li class="breadcrumb-item active">Albums Edit</li>
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
                            <h3 class="card-title">Albums | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/albums_update')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="{{$albums->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Album Name</label>
                                    <input type="text" name="album_name" class="form-control" id="album_name" value="{{$albums->album_name}}">
                                </div>


                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-control" id="code" value="{{$albums->code}}">
                                </div>



                                <div class="form-group">
                                    <label for="artist_id">artist Name</label>
                                    <select name="artist_id" class="form-control">
                                        @foreach($artists as $art)
                                        <option value="{{$art->id}}" {{ ($albums->artist_id == $art->id) ? 'selected' : ''}}>{{$art->artist_name}}</option>
                                        @endforeach
                                    </select>

                                </div>



                                <div class="form-group">
                                    <label for="category_id">Category Name</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}" {{ ($albums->category_id == $cat->id) ? 'selected' : ''}}>{{$cat->cat_name}}</option>
                                        @endforeach
                                    </select>

                                </div>





                                <div class="form-group">
                                    <label for="multi_artists">Multi Artists</label>
                                    <input type="text" name="multi_artists" class="form-control" id="multi_artists" value="{{$albums->multi_artists}}">
                                </div>




                                <div class="form-group">
                                    <label for="image">Album Image</label>
                                    <input type="file" name="album_image" class="form-control" id="album_image">
                                </div>



                                <!--     <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description" placeholder="description">
                                </div> -->


                                <div class="form-group">
                                    <label for="fullname">Description</label>
                                    <textarea value="{{$albums->description}}" type="text" name="description" class="form-control" id="summernote">
                                    {{$albums->description}}
                                    </textarea>
                                </div>






                                <div class="form-group">
                                    <label for="fullname">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" value="{{$albums->tags}}">
                                </div>



                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" {{ ($albums->status == 'active') ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ ($albums->status == 'inactive') ? 'selected' : '' }}>IN Active</option>
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