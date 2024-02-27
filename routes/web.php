<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () { 
    return 'Hello World';
});

Route::get('/world', function () { 
    return 'Wooorld';
});

Route::get('/welcome', function () { 
    return 'Selamat Datangg!!';
});

Route::get('/about', function () { 
    $nim = '2241720135';
    $nama = "Firstia Aulia Wida Azizah";
    return "NIM : $nim <br> Nama : $nama ";
});


Route::get('/user/{name}', function ($name) { return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('articles/{id}', function ($id) { return 'Halaman Artikel dengan ID ' .$id;});


Route::get('/user/{name?}', function ($name=null) {return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name;
});