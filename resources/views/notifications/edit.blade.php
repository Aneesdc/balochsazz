@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notifications Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/notifications')}}">Notifications</a></li>
                        <li class="breadcrumb-item active">Notifications Edit</li>
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
                            <h3 class="card-title">Notifications | <small>Add</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/notifications_update')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="{{$notifications->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">User Upload Id</label>
                                    <input type="number" name="user_upload_id" class="form-control" id="user_upload_id" value="{{$notifications->user_upload_id}}">
                                </div>


                                <div class="form-group">
                                    <label for="type">type</label>
                                    <input type="text" name="type" class="form-control" id="type" value="{{$notifications->type}}">
                                </div>

                                <div class="form-group">
                                    <label for="url">notify_to</label>
                                    <input type="text" name="notify_to" class="form-control" id="notify_to" value="{{$notifications->notify_to}}">
                                </div>

                                <div class="form-group">
                                    <label for="url">title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$notifications->title}}">
                                </div>




                                <div class="form-group">
                                    <label for="url">is_read</label>
                                    <input type="text" name="is_read" class="form-control" id="is_read" value="{{$notifications->is_read}}">
                                </div>


                                <div class="form-group">
                                    <label for="fullname">message</label>
                                    <textarea type="text" name="message" class="form-control" id="summernote">
                                     Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>




                                <div class="form-group">
                                    <label for="message">message</label>
                                    <textarea value="{{$notifications->message}}" type="text" name="message" class="form-control" id="summernote">
                                    {{$notifications->message}}
                                    </textarea>
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