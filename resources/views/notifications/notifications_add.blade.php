@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notifications Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/notifications')}}">Notifications</a></li>
                        <li class="breadcrumb-item active">Notifications Add</li>
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
                        <form id="" action="{{url ('admin/notifications_store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">User Upload Id</label>
                                    <input type="number" name="user_upload_id" class="form-control" id="user_upload_id" placeholder="user_upload_id">
                                </div>


                                <div class="form-group">
                                    <label for="type">type</label>
                                    <input type="text" name="type" class="form-control" id="type" placeholder="type">
                                </div>

                                <div class="form-group">
                                    <label for="url">notify_to</label>
                                    <input type="text" name="notify_to" class="form-control" id="notify_to" placeholder="notify_to">
                                </div>

                                <div class="form-group">
                                    <label for="url">title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                                </div>





                                <div class="form-group">
                                    <label for="is_read">Is Read</label>
                                    <select name="is_read" class="form-control" id="is_read">
                                        <option value="1">is read</option>
                                        <option value="0">no read</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="fullname">message</label>
                                    <textarea type="text" name="message" class="form-control" id="summernote">
                                     Place <em>some</em> <u>text</u> <strong>here</strong>
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