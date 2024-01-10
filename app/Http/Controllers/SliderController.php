<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = DB::table('slider')->orderBy('id', 'desc')->get();
        return view('slider/index', compact('slider'));
    }
    public function slider_add()
    {
        return view('slider/slider_add');
    }

    public function slider_store(Request $request)
    {
        $validatedData = $request->validate([
            "slider" => 'required',
            "title" => 'required',
            "type" => 'required',
            //"page_route" => 'required',

            "slider_image" => 'required',
        ]);

        $slider = new Slider();

        if ($file = $request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/slider_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $slider['slider_image'] =  $extension;
         }

        $slider->slider = $request->slider;
        $slider->title = $request->title;
        $slider->title2 = $request->title2;
        $slider->type = $request->type;
        $slider->page_route = $request->page_route;
        $slider->slider_slug = Str::slug($request->slider);
        $slider->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function slider_delete($id)
    {

        $artist = DB::table('slider')->where('id', $id)->first();

        if (!empty(file_exists(public_path('/storage/slider_image/' . $artist->slider_image)) && public_path('/storage/slider_image/thumb_' . $artist->slider_image))) {
            $imagePath = public_path('/storage/slider_image/' . $artist->slider_image);
            $imagePaths = public_path('/storage/slider_image/thumb_' . $artist->slider_image);
            @unlink($imagePaths);
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('slider')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        } else {
            $artist = DB::table('slider')->where('id', $id)->first();
            $artist->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
        }
    }


    public function slider_edit($id)
    {
        $slider = DB::table("slider")->where("id", $id)->first();
        return view("slider/edit", compact("slider"));
    }

    public function slider_update(Request $request)
    {
        $slider = slider::findOrFail($request->id);

        if (!empty($file = $request->hasFile('slider_image'))) {
            $file = $request->file('slider_image');
            $extension = time() . '.' . $file->getClientOriginalName();


            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });

            $destinationPath = public_path('/storage/slider_image');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath . '/thumb_' . $extension);

            $slider['slider_image'] =  $extension;
        }

        $slider->slider = $request->slider;
        $slider->title = $request->title;
        $slider->title2 = $request->title2;
        $slider->type = $request->type;
        $slider->page_route = $request->page_route;
        $slider->slider_slug = Str::slug($request->slider);
        $slider->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }
}
