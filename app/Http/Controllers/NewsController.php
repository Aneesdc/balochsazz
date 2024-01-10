<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->orderBy('id', 'desc')->get();
        return view('news/index', compact('news'));
    }
    public function news_add()
    {
        return view('news/news_add');
    }

    public function news_store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "image" => 'required',
            "type" => 'required',
            "status" => 'required',
        ]);

        $news = new news();

        if (!empty($file = $request->hasFile('image'))) {
            $file = $request->file('image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $news['image'] =  $extension;
          //  $news['img180x180'] = $extension;
        }

        $news->type = $request->type;
        $news->title = $request->title;
        $news->url = $request->url;
        $news->description = $request->description;
        $news->status = $request->status;

        $news->slug = Str::slug($request->title);
        $news->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function news_delete($id)
    {

        $artist = DB::table('news')->where('id', $id)->first();

        if (!empty(file_exists(public_path('/storage/image/' . $artist->image)) && public_path('/storage/image/thumb_' . $artist->image))) {
            $imagePath = public_path('/storage/image/' . $artist->image);
            $imagePaths = public_path('/storage/image/thumb_' . $artist->image);
            @unlink($imagePaths);
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('news')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        } else {
            $artist = DB::table('news')->where('id', $id)->first();
            $artist->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        }
    }


    public function news_edit($id)
    {
        $news = DB::table("news")->where("id", $id)->first();
        return view("news/edit", compact("news"));
    }

    public function news_update(Request $request)
    {
        $news = news::findOrFail($request->id);

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $news['image'] =  $extension;
            //  $news['img180x180'] = $extension;
        }

        $news->type = $request->type;
        $news->title = $request->title;
        $news->url = $request->url;
        $news->description = $request->description;
        $news->status = $request->status;

        $news->slug = Str::slug($request->title);
        $news->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function news_status($id)
    {
        $news = news::where('id', $id)->first();

        if ($news->status == 'active') {
            $news->status = 'inactive';
        } else {
            $news->status = 'active';
        }

        $news->save();
        return redirect()->back()->with(['message' => "status has been updated"]);
    }
}
