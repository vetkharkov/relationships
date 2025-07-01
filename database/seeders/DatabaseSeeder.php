<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CinemaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PassportSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
            CinemaSeeder::class,
            MovieSeeder::class,
            CinemaMovieSeeder::class,
            ProjectSeeder::class,
            TaskSeeder::class,
            ManSeeder::class,
            WomanSeeder::class,
            PhotoSeeder::class,
            PostSeeder::class,
            VideoSeeder::class,
            TagSeeder::class,
            TaggableSeeder::class,
        ]);
    }
}
