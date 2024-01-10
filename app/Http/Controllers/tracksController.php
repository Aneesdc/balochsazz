<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\tracks;

class tracksController extends Controller
{
    public function index()
    {
        $tracks = DB::table('tracks')->orderBy('id', 'desc')->get();
        return view('tracks/index', compact('tracks'));
    }
    public function tracks_add()
    {
        $albums = DB::table("albums")->orderBy('id', 'desc')->get();
        return view('tracks/tracks_add',compact('albums'));
    }

    public function tracks_store(Request $request)
    {
        $validatedData = $request->validate([
            "album_id" => 'required',
            "track_title" => 'required',

            "track_peot" => 'required',
            "track_type" => 'required',
            //"audio_file" => 'required',
            "status" => 'required',
            "code" => 'required',
            "tags" => 'required',
        ]);

        $tracks = new tracks();

        if($request->file('audio_file'))
        {
            $file = $request->file('audio_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('tracks/audio', $fileName);
            $tracks->audio_file = $fileName;
        }
      
        $tracks->album_id = $request->album_id;
        
        $tracks->track_title = $request->track_title;
        $tracks->code = $request->code;
        $tracks->tags = $request->tags;
        $tracks->track_peot = $request->track_peot;
        $tracks->track_type = $request->track_type;
        $tracks->mf_code = $request->mf_code;
        $tracks->upload_key = $request->upload_key;
        $tracks->status = $request->status;

        $tracks->track_slug = Str::slug($request->track_title);
        $tracks->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function tracks_delete($id)
    {

        $artist = DB::table('tracks')->where('id', $id)->first();

        if (!empty(file_exists(public_path('/storage/tracks/audio_file/' . $artist->audio_file)) && public_path('/storage/audio_file/thumb_' . $artist->audio_file))) {
            $imagePath = public_path('/storage/tracks/audio_file/' . $artist->audio_file);
            $imagePaths = public_path('/storage/tracks/audio_file/thumb_' . $artist->audio_file);
            @unlink($imagePaths);
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('tracks')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        } else {
            $artist = DB::table('tracks')->where('id', $id);
            $artist->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        }
    }


    public function tracks_edit($id)
    {
        $tracks = DB::table("tracks")->where("id", $id)->first();
        $albums = DB::table('albums')->get();
        return view("tracks/edit", compact("tracks",'albums'));
    }

    public function tracks_update(Request $request)
    {
        $tracks = tracks::findOrFail($request->id);



        if (!empty($request->file('audio_file'))) {
            $file = $request->file('audio_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('tracks/audio', $fileName);
            $tracks->audio_file = $fileName;
        }

        $tracks->album_id = $request->album_id;

        $tracks->track_title = $request->track_title;
        $tracks->code = $request->code;
        $tracks->tags = $request->tags;
        $tracks->track_peot = $request->track_peot;
        $tracks->track_type = $request->track_type;
        $tracks->mf_code = $request->mf_code;
        $tracks->upload_key = $request->upload_key;
        $tracks->status = $request->status;

        $tracks->track_slug = Str::slug($request->track_title);
        $tracks->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function tracks_status($id)
    {
        $tracks = tracks::where('id', $id)->first();

        if ($tracks->status == 'active') {
            $tracks->status = 'inactive';
        } else {
            $tracks->status = 'active';
        }

        $tracks->save();
        return redirect()->back()->with(['message' => "status has been updated"]);
    }
}
