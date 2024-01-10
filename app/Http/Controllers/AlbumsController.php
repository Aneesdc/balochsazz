<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = DB::table('albums')
        ->join('artists', 'albums.artist_id', '=', 'artists.id')
        ->join('category', 'albums.category_id', '=', 'category.id')
        ->select('albums.*', 'category.cat_name', 'artists.artist_name')
        ->get();
        return view('albums/index', compact('albums'));
    }
    public function albums_add()
    {
        $artists = DB::table('artists')->get();
        $category = DB::table('category')->get();
        return view('albums/albums_add',compact('artists','category'));
    }

    public function albums_store(Request $request)
    {
        $validatedData = $request->validate([
            "album_name" => 'required',
            "code" => 'required',
            "tags" => 'required',
            //"multi_artists" => 'required',
            "album_image" => 'required',
            "description" => 'required',
            "status" => 'required',
        ]);

        $albums = new albums();

        if ($file = $request->hasFile('album_image')) {
            $file = $request->file('album_image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/album_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $albums['album_image'] =  $extension;
            $albums['img180x180'] = $extension;
        }

        $albums->album_name = $request->album_name;
        $albums->code = $request->code;
        $albums->tags = $request->tags;
        $albums->artist_id = $request->artist_id;
        $albums->category_id = $request->category_id;
        $albums->multi_artists = $request->multi_artists;
        $albums->folder_key = $request->folder_key;
        $albums->description = $request->description;
        $albums->status = $request->status;
        $albums->album_slug = Str::slug($request->album_name);
        $albums->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function albums_delete($id)
    {

        $albums = DB::table('albums')->where('id', $id)->first();

        if (!empty(file_exists(public_path('/storage/album_image/' . $albums->album_image)) && public_path('/storage/album_image/thumb_' . $albums->img180x180))) {
            $imagePath = public_path('/storage/album_image/' . $albums->album_image);
            $imagePaths = public_path('/storage/album_image/thumb_' . $albums->img180x180);
            @unlink($imagePaths);
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('albums')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "albums and image deleted successfully."]);
        } else {
            $albums = DB::table('albums')->where('id', $id)->first();
            $albums->delete();
            return redirect()->back()->with(["success" => "Albums and image deleted successfully."]);
        }
    }


    public function albums_edit($id)
    {
        $artists = DB::table("artists")->get();
        $category = DB::table("category")->get();
        $albums = DB::table("albums")->where("id", $id)->first();
        return view("albums/edit", compact("albums",'artists','category'));
    }

    public function albums_update(Request $request)
    {
        $albums = albums::findOrFail($request->id);

        if (!empty($file = $request->hasFile('album_image'))) {
            $file = $request->file('album_image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/album_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $albums['album_image'] =  $extension;
            $albums['img180x180'] = $extension;
        }

        $albums->album_name = $request->album_name;
        $albums->code = $request->code;
        $albums->tags = $request->tags;
        $albums->artist_id = $request->artist_id;
        $albums->multi_artists = $request->multi_artists;
        $albums->folder_key = $request->folder_key;
        $albums->description = $request->description;
        $albums->status = $request->status;
        $albums->album_slug = Str::slug($request->album_name);
        $albums->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function albums_status($id)
    {
        $albums = albums::where('id', $id)->first();

        if ($albums->status == 'active') {
            $albums->status = 'inactive';
        } else {
            $albums->status = 'active';
        }

        $albums->save();
        return redirect()->back()->with(['message' => "status has been updated"]);
    }
}
