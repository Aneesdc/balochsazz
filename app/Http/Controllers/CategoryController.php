<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table("category")->orderbydesc('id')->get();
        return view("category/index", compact("category"));
    }
    public function category_add()
    {
        return view('category/category_add');
    }

    public function category_store(Request $request)
    {
        $validated = $request->validate([
            "cat_name" => 'required',
        ]);

       /*  $user = User::create([
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'title' => 'Developer',
        ]); */
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->code = $request->code;
        $category->tags = $request->tags;
        $category->cat_slug = Str::slug($request->cat_name);
        $category->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }



    public function category_edit($id)
    {
        $category = DB::table("category")->where("id", $id)->first();
        return view("category/edit", compact("category"));
    }

    public function category_update(Request $request)
    {
        $category = Category::where("id", $request->id)->first();

        $category->cat_name = $request->cat_name;
        $category->code = $request->code;
        $category->tags = $request->tags;
        $category->cat_slug = Str::slug($request->cat_name);
        $category->save();
        return redirect()->back()->with(["success" => "User updated successfully!"]);
    }

    public function category_delete($id)
    {
        $category = DB::table('category')->where('id', $id);
        $category->delete();
        return redirect()->back()->with(["success" => "Item deleted successfully."]);
    }
}
