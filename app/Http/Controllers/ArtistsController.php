<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use Illuminate\Http\Request;
//use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = DB::table('artists')->orderBy('id', 'desc')->get();
        return view('artists/index', compact('artists'));
    }
    public function artists_add()
    {
        return view('artists/artists_add');
    }

    public function artists_store(Request $request)
    {
        $validatedData = $request->validate([
            "artist_name" => 'required',
            "description" => 'required',
            "code" => 'required',
            "tags" => 'required',
        ]);

        $aritsts = new Artists();

        if ($file = $request->hasFile('artist_image')) {
            $file = $request->file('artist_image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/artist_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $aritsts['artist_image'] =  $extension;
            $aritsts['img180x180'] = $extension;
        }

        $aritsts->artist_name = $request->artist_name;
        $aritsts->description = $request->description;
        $aritsts->code = $request->code;
        $aritsts->tags = $request->tags;
        $aritsts->status = $request->status;

        $aritsts->artist_slug = Str::slug($request->artist_name);
        $aritsts->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function artists_delete($id)
    {

        $artist = DB::table('artists')->where('id', $id)->first();

        if (!empty(file_exists(public_path('/storage/artist_image/' . $artist->artist_image)) && public_path('/storage/artist_image/thumb_' . $artist->img180x180))) {
            $imagePath = public_path('/storage/artist_image/' . $artist->artist_image);
            $imagePaths = public_path('/storage/artist_image/thumb_' . $artist->img180x180);
            @unlink($imagePaths);
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('artists')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        } 
        else 
        {
            $artist = DB::table('artists')->where('id', $id);
          
            $artist->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);

        }
    }


    public function artists_edit($id)
    {
        $artists = DB::table("artists")->where("id", $id)->first();
        return view("artists/edit", compact("artists"));
    }

    public function artists_update(Request $request)
    {
        $aritsts = Artists::findOrFail($request->id);

        if (!empty($file = $request->hasFile('artist_image'))) 
        {
            $file = $request->file('artist_image');
            $extension = time() . '.' . $file->getClientOriginalName();

            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/storage/artist_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);
            $aritsts['artist_image'] =  $extension;
            $aritsts['img180x180'] = $extension;
        }
        $aritsts->artist_name = $request->artist_name;
        $aritsts->description = $request->description;
        $aritsts->code = $request->code;
        $aritsts->tags = $request->tags;
        $aritsts->status = $request->status;
        $aritsts->artist_slug = Str::slug($request->artist_name);
        $aritsts->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function artists_status($id)
    {
        $artists = Artists::where('id',$id)->first();

        if($artists->status == 'active')
        {
            $artists->status = 'inactive';
        }
        else
        {
            $artists->status = 'active';
        }

        $artists->save();
        return redirect()->back()->with(['message' => "status has been updated"]);

    }
}
