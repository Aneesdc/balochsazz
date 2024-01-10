@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/news')}}">News</a></li>
                        <li class="breadcrumb-item active">News Edit</li>
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
                            <h3 class="card-title">News | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/news_update')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$news->id}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$news->title}}">
                                </div>


                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Description</label>
                                    <textarea value="{{$news->description}}" type="text" name="description" class="form-control" id="summernote">
                                    {{$news->description}}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="code">url</label>
                                    <input type="text" name="url" class="form-control" id="url" value="{{$news->url}}">
                                </div>



                                <div class="form-group">
                                    <label for="status">type</label>
                                    <select name="type" class="form-control" id="type">
                                        <option value="news" {{ ($news->type == 'news') ? 'selected' : ''}}>News</option>
                                        <option value="upcoming" {{ ($news->type == 'upcoming') ? 'selected' : ''}}>Upcoming</option>
                                        <option value="events" {{ ($news->type == 'events') ? 'selected' : ''}}>events</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" {{ ($news->status == 'active') ? 'selected' : ''}}>Active</option>
                                        <option value="inactive" {{ ($news->status == 'inactive') ? 'selected' : ''}}>IN Active</option>
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