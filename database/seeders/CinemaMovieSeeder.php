<?php

namespace Database\Seeders;

use App\Models\CinemaMovie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemaMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CinemaMovie::factory()
            ->count(30)
            ->create();
    }
}
