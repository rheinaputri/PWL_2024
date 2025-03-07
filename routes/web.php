<?php
// jOBSHEET 2
// langkah1


use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
    return 'Hello World';
});

// langkah4
Route::get('/world', function () {
    return 'World';
});

// langkah6
Route::get('/', function () {
    return 'Selamat Datang';
});

// langkah7
Route::get('/about', function () {
    return '2341760084 - Rheina Putri Ferdiansyah';
});

// langkah8
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' . $name;
});

// langkah 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' . $postId." Komentar ke- ".$commentId;
});

// langkah 13
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

// OPTIONAL PARAMETER
// langkah 14
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// langkah 17
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// ROUTE NAME
Route::get ('/user/profile', function () {
    //
}) ->name ('profile');

use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'hello']);

// Praktikum 2 - langkah 6
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class, 'index']);
Route::get('/about',[PageController::class, 'about']);
Route::get('/articles/{id}',[PageController::class, 'articles']);


// Praktikum 2 - langkah 7
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController:: class, 'index']);
Route::get('/about', [AboutController:: class, 'about']);
Route::get('/articles/{id}', [ArticleController:: class, 'articles']);

// Prak 2 - langkah 9 - Resource Controller
use App\Http\Controllers\PhotoController;
Route::resource('photo', PhotoController::class);


// jika tidak semua route digunakan, di tulis seperti berikut :
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// PRAKTIKUM 3 - langkah 1
Route::get('/greeting', function (){
    return view('blog.hello', ['name' => 'Rheina']);
});

// Prak3 - langkah 9
Route::get('/greeting', [WelcomeController::class,'greeting']);

