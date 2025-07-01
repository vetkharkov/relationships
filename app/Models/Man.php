<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Man extends Model
{
    /** @use HasFactory<\Database\Factories\ManFactory> */
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
