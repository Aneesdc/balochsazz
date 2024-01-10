<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtistsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Adminmiddleware;
use App\Http\Controllers\bookauthorController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\tracksController;
use App\Models\Artists;
use App\Http\Controllers\FrontendController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* 
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[FrontendController::class,'dashboard'])->name('dashboard');

// forntend routes
    Route::get('about',[FrontendController::class,'about'])->name('about');
    Route::get('contact',[FrontendController::class,'contact'])->name('contact');
    Route::post('send',[FrontendController::class,'send'])->name('send');
    Route::get('category',[FrontendController::class, 'category'])->name('category');
    Route::get('albums/{id}',[FrontendController::class, 'albums'])->name('albums');
    Route::get('tracks/{id}',[FrontendController::class,'tracks'])->name('track');
    Route::post('logout',[FrontendController::class,'logout'])->name('logout');
// end frontend routes

// users login routes

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('userslogin', [App\Http\Controllers\AuthController::class, 'userslogin'])->name('userslogin');
Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('registerstore', [\App\Http\Controllers\AuthController::class, 'registerstore'])->name('registerstore');



Route::middleware([Adminmiddleware::class])->group(function () {

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', [\App\Http\Controllers\AuthController::class, 'dashboard'])->name('dashboard');

        // users routes 
        Route::get('users', [\App\Http\Controllers\AuthController::class, 'users'])->name('users');
        Route::get('add_users', [\App\Http\Controllers\AuthController::class, 'register'])->name('add_users');

        Route::get('users-delete/{id}', [\App\Http\Controllers\AuthController::class, 'user_delete'])->name('users-delete');
        Route::get('user-edit/{id}', [\App\Http\Controllers\AuthController::class, 'user_edit'])->name('user-edit');
        Route::post('user_update', [\App\Http\Controllers\AuthController::class, 'user_update'])->name('user_update');
        Route::get('status/{id}', [\App\Http\Controllers\AuthController::class, 'status'])->name('status');
        // logout routes
        // category routes 
        Route::get('category', [CategoryController::class, 'index'])->name('category');
        Route::get('category_add', [CategoryController::class, 'category_add'])->name('category_add');
        Route::post('category_store', [CategoryController::class, 'category_store'])->name('category_store');

        Route::get('category-delete/{id}', [CategoryController::class, 'category_delete'])->name('category-delete');
        Route::get('category-edit/{id}', [CategoryController::class, 'category_edit'])->name('category-edit');
        Route::post('category_update', [CategoryController::class, 'category_update'])->name('category_update');
        // end category routes


        // category routes 
        Route::get('artists', [ArtistsController::class, 'index'])->name('artists');
        Route::get('artists_add', [ArtistsController::class, 'artists_add'])->name('artists_add');
        Route::post('artists_store', [ArtistsController::class, 'artists_store'])->name('artists_store');

        Route::get('artists-delete/{id}', [ArtistsController::class, 'artists_delete'])->name('artists-delete');
        Route::get('artists-edit/{id}', [ArtistsController::class, 'artists_edit'])->name('artists-edit');
        Route::post('artists_update', [ArtistsController::class, 'artists_update'])->name('artists_update');
        Route::get('artists_status/{id}',[ArtistsController::class, 'artists_status'])->name('artists_status');
        // end category routes


        // albums routes 
        Route::get('albums', [AlbumsController::class, 'index'])->name('albums');
        Route::get('albums_add', [AlbumsController::class, 'albums_add'])->name('albums_add');
        Route::post('albums_store', [AlbumsController::class, 'albums_store'])->name('albums_store');

        Route::get('albums-delete/{id}', [AlbumsController::class, 'albums_delete'])->name('albums-delete');
        Route::get('albums-edit/{id}', [AlbumsController::class, 'albums_edit'])->name('albums-edit');
        Route::post('albums_update', [AlbumsController::class, 'albums_update'])->name('albums_update');
        Route::get('albums_status/{id}', [AlbumsController::class, 'albums_status'])->name('albums_status');
        // end albums routes


        // Books routes 
        Route::get('books', [BooksController::class, 'index'])->name('books');
        Route::get('books_add', [BooksController::class, 'books_add'])->name('books_add');
        Route::post('books_store', [BooksController::class, 'books_store'])->name('books_store');

        Route::get('books-delete/{id}', [BooksController::class, 'books_delete'])->name('books-delete');
        Route::get('books-edit/{id}', [BooksController::class, 'books_edit'])->name('books-edit');
        Route::post('books_update', [BooksController::class, 'books_update'])->name('books_update');
        Route::get('books_status/{id}', [BooksController::class, 'books_status'])->name('books_status');
        // end Books routes

        // book_author routes 
        Route::get('book_author', [bookauthorController::class, 'index'])->name('book_author');
        Route::get('book_author_add', [bookauthorController::class, 'book_author_add'])->name('book_author_add');
        Route::post('book_author_store', [bookauthorController::class, 'book_author_store'])->name('book_author_store');

        Route::get('book_author-delete/{id}', [bookauthorController::class, 'book_author_delete'])->name('book_author-delete');
        Route::get('book_author-edit/{id}', [bookauthorController::class, 'book_author_edit'])->name('book_author-edit');
        Route::post('book_author_update', [bookauthorController::class, 'book_author_update'])->name('book_author_update');
        // end book_author routes


        // news routes 
        Route::get('news', [NewsController::class, 'index'])->name('news');
        Route::get('news_add', [NewsController::class, 'news_add'])->name('news_add');
        Route::post('news_store', [NewsController::class, 'news_store'])->name('news_store');

        Route::get('news-delete/{id}', [NewsController::class, 'news_delete'])->name('news-delete');
        Route::get('news-edit/{id}', [NewsController::class, 'news_edit'])->name('news-edit');
        Route::post('news_update', [NewsController::class, 'news_update'])->name('news_update');
        Route::get('news_status/{id}', [NewsController::class, 'news_status'])->name('news_status');
        // end news routes



        // notifications routes 
        Route::get('notifications', [NotificationsController::class, 'index'])->name('notifications');
        Route::get('notifications_add', [NotificationsController::class, 'notifications_add'])->name('notifications_add');
        Route::post('notifications_store', [NotificationsController::class, 'notifications_store'])->name('notifications_store');

        Route::get('notifications-delete/{id}', [NotificationsController::class, 'notifications_delete'])->name('notifications-delete');
        Route::get('notifications-edit/{id}', [NotificationsController::class, 'notifications_edit'])->name('notifications-edit');
        Route::post('notifications_update', [NotificationsController::class, 'notifications_update'])->name('notifications_update');
        Route::get('notifications_status/{id}', [NotificationsController::class, 'notifications_status'])->name('notifications_status');
        // end notifications routes



        // category routes 
        Route::get('slider', [SliderController::class, 'index'])->name('slider');
        Route::get('slider_add', [SliderController::class, 'slider_add'])->name('slider_add');
        Route::post('slider_store', [SliderController::class, 'slider_store'])->name('slider_store');

        Route::get('slider-delete/{id}', [SliderController::class, 'slider_delete'])->name('slider-delete');
        Route::get('slider-edit/{id}', [SliderController::class, 'slider_edit'])->name('slider-edit');
        Route::post('slider_update', [SliderController::class, 'slider_update'])->name('slider_update');
        // end category routes



        // tracks routes 
        Route::get('tracks', [tracksController::class, 'index'])->name('tracks');
        Route::get('tracks_add', [tracksController::class, 'tracks_add'])->name('tracks_add');
        Route::post('tracks_store', [tracksController::class, 'tracks_store'])->name('tracks_store');

        Route::get('tracks-delete/{id}', [tracksController::class, 'tracks_delete'])->name('tracks-delete');
        Route::get('tracks-edit/{id}', [tracksController::class, 'tracks_edit'])->name('tracks-edit');
        Route::post('tracks_update', [tracksController::class, 'tracks_update'])->name('tracks_update');
        Route::get('tracks_status/{id}', [tracksController::class, 'tracks_status'])->name('tracks_status');
        // endtracks routes



        Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    });
});
});

