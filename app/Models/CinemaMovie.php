<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaMovie extends Model
{
    /** @use HasFactory<\Database\Factories\CinemaMovieFactory> */
    use HasFactory;

    protected $table = 'cinema_movie';
}
