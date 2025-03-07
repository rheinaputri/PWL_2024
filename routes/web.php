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

