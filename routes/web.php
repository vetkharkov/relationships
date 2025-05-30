<?php

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
//    $passport = User::find(1)->passport;

    $passport = Passport::find(1);
//    $user = $passport->user;
//    dd($pass->user);


    return view('onetoone', compact('user', 'passport'));
});
