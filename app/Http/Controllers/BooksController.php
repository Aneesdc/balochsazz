<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use App\Models\Books;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->orderBy('id', 'desc')->get();
        return view('books/index', compact('books'));
    }
    public function books_add()
    {
        return view('books/books_add');
    }

    public function books_store(Request $request)
    {
        $validatedData = $request->validate([
            "books_author_id" => 'required',
            "book_title" => 'required',
            "publisher_name" => 'required',
            "language" => 'required',
            "book_file" => 'required',
            "pages" => 'required',
            "publisher_year" => 'required',
            "type" => 'required',
        
        ]);

        $books = new books();

        if ($file = $request->hasFile('book_file')) {
            $file = $request->file('book_file');
            $extension = time() . '.' . $file->getClientOriginalName();
            $destinationPath = public_path('/storage/book_file');
            $file->move($destinationPath, $extension);
            $books['book_file'] =  $extension;
        }

        $books->books_author_id = $request->books_author_id;
        $books->book_title = $request->book_title;
        $books->publisher_name = $request->publisher_name;

        $books->language = $request->language;
        $books->book_cover = $request->book_cover;
        $books->pages = $request->pages;
        $books->publisher_year = $request->publisher_year;
        $books->type = $request->type;
        $books->book_slug = Str::slug($request->book_title);
        $books->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function books_edit($id)
    {
        $books = DB::table("books")->where("id", $id)->first();
        return view("books/edit", compact("books"));
    }

    public function books_update(Request $request)
    {
        $books = books::findOrFail($request->id);

        if (!empty($file = $request->hasFile('book_file'))) {
            $file = $request->file('book_file');
            $extension = time() . '.' . $file->getClientOriginalName();

            $destinationPath = public_path('/storage/book_file');
            $file->move($destinationPath, $extension);
        
            $books['book_file'] =  $extension;
         }


        $books->books_author_id = $request->books_author_id;
        $books->book_title = $request->book_title;
        $books->publisher_name = $request->publisher_name;

        $books->language = $request->language;
        $books->book_cover = $request->book_cover;
        $books->pages = $request->pages;
        $books->publisher_year = $request->publisher_year;
        $books->type = $request->type;
        $books->book_slug = Str::slug($request->book_title);
        $books->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function books_delete($id)
    {

        $books = DB::table('books')->where('id', $id)->first();
/* 
        if (!empty(file_exists(public_path('/storage/book_file/' . $books->book_file)) )) {
            $imagePath = public_path('/storage/book_file/' . $books->album_image);
           
            @unlink($imagePath);
            // You may also want to delete the artist record from the database after deleting the image.
            DB::table('books')->where('id', $id)->delete();
            return redirect()->back()->with(["success" => "books and image deleted successfully."]);
        } else { */
            $books = DB::table('books')->where('id', $id);
            $books->delete();
            return redirect()->back()->with(["success" => "books and image deleted successfully."]);
      //  }
    }
    public function books_status($id)
    {
        $books = books::where('id', $id)->first();

        if ($books->type == '1') {
            $books->type = '0';
        } else {
            $books->type = '1';
        }
        $books->save();
        return redirect()->back()->with(['message' => "status has been updated"]);
    }
}
