<?php

namespace Database\Seeders;

use App\Models\StressLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StressLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StressLevel::factory()->count(100)->create(); // Generate 50 fake stress level logs
    }
}
