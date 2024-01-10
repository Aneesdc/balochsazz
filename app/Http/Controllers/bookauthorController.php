<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Book_author;

class bookauthorController extends Controller
{
    public function index()
    {
        $book_author = DB::table("book_authors")->orderbydesc('id')->get();
        return view("book_author/index", compact("book_author"));
    }
    public function book_author_add()
    {
        return view('book_author/book_author_add');
    }

    public function book_author_store(Request $request)
    {
        $validated = $request->validate([
            "author_name" => 'required',
        ]);

        $book_author = new book_author();
        $book_author->author_name = $request->author_name;
        $book_author->author_slug = Str::slug($request->author_name);
        $book_author->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }



    public function book_author_edit($id)
    {
        $book_author = DB::table("book_authors")->where("id", $id)->first();
        return view("book_author/edit", compact("book_author"));
    }

    public function book_author_update(Request $request)
    {
        $book_author = book_author::where("id", $request->id)->first();

        $book_author->author_name = $request->author_name;
        $book_author->author_slug = Str::slug($request->author_name);
        $book_author->save();
        return redirect()->back()->with(["success" => "User updated successfully!"]);
    }

    public function book_author_delete($id)
    {
        $book_author = DB::table('book_authors')->where('id', $id);
        $book_author->delete();
        return redirect()->back()->with(["success" => "Item deleted successfully."]);
    }
}
