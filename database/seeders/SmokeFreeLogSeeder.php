<?php

namespace Database\Seeders;

use App\Models\SmokeFreeLog;
use Illuminate\Database\Seeder;

class SmokeFreeLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SmokeFreeLog::factory()->count(50)->create();
    }
}
