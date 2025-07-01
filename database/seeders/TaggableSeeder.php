<?php

namespace Database\Seeders;

use App\Models\Taggable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Taggable::factory()
            ->count(50)
            ->create();
    }
}
