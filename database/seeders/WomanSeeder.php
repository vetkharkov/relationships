<?php

namespace Database\Seeders;

use App\Models\Woman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WomanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Woman::factory()
            ->count(10)
            ->create();
    }
}
