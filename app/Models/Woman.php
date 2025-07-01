<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Woman extends Model
{
    /** @use HasFactory<\Database\Factories\WomanFactory> */
    use HasFactory;

    public function image(): MorphOne
    {
        return $this->morphOne(Photo::class, 'imageable');
    }
    public function images(): MorphMany
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

}
