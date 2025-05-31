<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Passport;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


//    dd(memory_get_usage()/1024/1024);
    return view('welcome');
});

Route::fallback(function () {
    abort(404, "Page not found-404");
});

Route::get('/onetoone',function () {
    $user = User::find(1);
    $passport = Passport::find(1);
    return view('onetoone', compact('user', 'passport'));
});

Route::get('/onetomany',function () {
    $authors = Author::all();
    $book = Book::findorfail(1);
//    dd($book->author->name);
    return view('onetomany', compact('authors', 'book'));
});

