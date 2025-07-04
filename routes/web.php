<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Cinema;
use App\Models\Man;
use App\Models\Movie;
use App\Models\Passport;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use App\Models\Video;
use App\Models\Woman;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


//    dd(memory_get_usage()/1024/1024);
    return view('welcome');
});

Route::fallback(function () {
    abort(404, "Page not found-404");
});

Route::get('/onetoone', function () {
    $user = User::find(1);
    $passport = Passport::find(1);
    return view('onetoone', compact('user', 'passport'));
});

Route::get('/onetomany', function () {
    $authors = Author::all();
    $book = Book::findorfail(1);
    return view('onetomany', compact('authors', 'book'));
});

Route::get('/manytomany', function () {
    $cinemas = Cinema::all();
    $movies = Movie::all();
    return view('manytomany', compact('cinemas', 'movies'));
});

Route::get('/hasonethrough', function () {
    $users = User::all();
    return view('hasonethrough', compact('users'));
});

Route::get('/hasmanythrough', function () {
    $users = User::all();
    return view('hasmanythrough', compact('users'));
});

Route::get('/onetoonepolymorphic', function () {
    $mans = Man::all();
    $women = Woman::all();
    $photos = Photo::all();

    return view('onetoonepolymorphic', compact('mans', 'women', 'photos'));
});

Route::get('/onetomanypolymorphic', function () {
    $mans = Man::all();
    $women = Woman::all();
    $photos = Photo::all();

    return view('onetomanypolymorphic', compact('mans', 'women', 'photos'));
});

Route::get('/manytomanypolymorphic', function () {
    $posts = Post::all();
    $videos = Video::all();
    $tags = Tag::all();

    return view('manytomanypolymorphic', compact('posts', 'tags', 'videos'));
});
