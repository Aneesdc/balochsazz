@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/slider')}}">Slider</a></li>
                        <li class="breadcrumb-item active">Slider Edit</li>
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
                            <h3 class="card-title">Slider | <small>Edit</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/slider_update')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$slider->id}}">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="slider">Slider</label>
                                    <input type="text" name="slider" class="form-control" id="slider" value="{{$slider->slider}}">
                                </div>


                                <div class="form-group">
                                    <label for="slider_image">slider_image</label>
                                    <input type="file" name="slider_image" class="form-control" id="slider_image">
                                </div>


                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$slider->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="title2">title2</label>
                                    <input type="text" name="title2" class="form-control" id="title2" value="{{$slider->title2}}">
                                </div>


                                <div class="form-group">
                                    <label for="page_route">page_route</label>
                                    <input type="text" name="page_route" class="form-control" id="page_route" value="{{$slider->page_route}}">
                                </div>


                                <div class="form-group">
                                    <label for="type">type</label>
                                    <select name="type" class="form-control" id="type">
                                        <option value="front" {{ ($slider->type == 'front') ? 'selected' : ''}}>front</option>
                                        <option value="login" {{ ($slider->type == 'login') ? 'selected' : ''}}>login</option>
                                        <option value="header" {{ ($slider->type == 'header') ? 'selected' : ''}}>header</option>
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