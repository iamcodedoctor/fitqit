<?php

namespace Database\Seeders;

use App\Models\CigaretteSmoked;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CigaretteSmokedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CigaretteSmoked::factory()->count(100)->create();
    }
}
