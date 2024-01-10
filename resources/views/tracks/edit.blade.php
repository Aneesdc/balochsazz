@extends('layouts.mastertamplat')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tracks Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('admin/dashboard')}}">Home</a></li>

                        <li class="breadcrumb-item"><a href="{{url ('admin/tracks')}}">Tracks</a></li>
                        <li class="breadcrumb-item active">Tracks Add</li>
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
                            <h3 class="card-title">Tracks | <small>Add</small></h3>
                        </div>
                        <form id="" action="{{url ('admin/tracks_update')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="{{$tracks->id}}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="album_id">Album Name</label>
                                    <select name="album_id" class="form-control">
                                        @foreach($albums as $alb)
                                        <option value="{{$alb->id}}" {{ ($tracks->album_id == $alb->id) ? 'selected' : ''}}>{{$alb->album_name}}</option>
                                        @endforeach
                                    </select>

                                </div>



                                <div class="form-group">
                                    <label for="track_title">Audio File</label>
                                    <input type="file" name="audio_file" class="form-control" id="audio_file">
                                </div>




                                <div class="form-group">
                                    <label for="track_title">Track Name</label>
                                    <input type="text" name="track_title" class="form-control" id="track_title" value="{{$tracks->track_title}}">
                                </div>



                                <div class="form-group">
                                    <label for="track_peot">Track Peot</label>
                                    <input type="text" name="track_peot" class="form-control" id="track_peot" value="{{$tracks->track_peot}}">
                                </div>




                                <div class="form-group">
                                    <label for="mf_code">Mf Code</label>
                                    <input type="text" name="mf_code" class="form-control" id="mf_code" value="{{$tracks->mf_code}}">
                                </div>




                                <div class="form-group">
                                    <label for="upload_key">Upload Key</label>
                                    <input type="text" name="upload_key" class="form-control" id="upload_key" value="{{$tracks->upload_key}}">
                                </div>




                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-control" id="code" value="{{$tracks->code}}">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Tags</label>
                                    <input type="text" name="tags" class="form-control" id="tags" value="{{$tracks->tags}}">
                                </div>



                                <div class="form-group">
                                    <label for="track_type">Track Type</label>
                                    <select name="track_type" class="form-control" id="track_type">
                                        <option value="audio">audio</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="active" {{ ($tracks->status == 'active') ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ ($tracks->status == 'inactive') ? 'selected' : '' }}>IN Active</option>
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