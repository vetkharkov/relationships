<?php

namespace Database\Seeders;

use App\Models\Man;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Man::factory()
            ->count(10)
            ->create();
    }
}
