<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function dashboard()
    {
        $tracks = DB::table('tracks')->orderBy('id', 'desc')->get();
        $slider = DB::table('slider')->orderBy('id', 'desc')->get();
        $albums = DB::table('albums')->orderBy('id', 'desc')->get();
        $artists = DB::table('artists')->orderBy('id', 'desc')->get();
        $tracks = DB::table('tracks')->orderBy('id', 'desc')->get();
    
        return view('frontend/dashboard',compact('slider','tracks','albums','tracks','artists'));
    }

    public function about()
    {
        $artists = DB::table('artists')->orderBy('id', 'desc')->limit(6)->get();
        return view('frontend/about',compact('artists'));
    }

    public function contact()
    {  
        return view('frontend/contact');
    }
    public function send()
    {
        $data = request()->validate([
            "name" => "required|min:3",
            "email" => "required|email",
            "message" => "required|min:3",
        ]);

        Mail::to('hasnainitgroup123@gmail.com ')->send(new ContactUs($data));
        return redirect()->back()->with(['success' => 'Email sent successfully!']);
    }

    public function category()
    {
       /*  $category = DB::table('category')
            ->join('albums','category.id' , '=' , 'albums.category_id')
            ->select('category.*', 'albums.album_image')
            ->get(); */

            $category = DB::table('category')
            ->join('artists','category.id' , '=' , 'artists.cat_id')
            ->select('category.*', 'artists.artist_image', 'artists.artist_name','artists.id as aid')
            ->get();
        return view('frontend/category',compact('category'));
    }   

    public function albums($id)
    {
       $albums  = DB::table('albums')->where('artist_id',$id)->get();
       return view('frontend/albums',compact('albums','id'));
    }
 
    public function tracks($id)
    {
        //$tracks = DB::table('tracks')->get();


        $tracks = DB::table('albums')
        ->join('tracks', 'albums.id', '=', 'tracks.album_id')
        ->where('albums.id',$id)
        ->get();

/*     */    print_r($tracks);
        die(); 
        return view('frontend/track',compact('tracks'));        
    } 


    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
