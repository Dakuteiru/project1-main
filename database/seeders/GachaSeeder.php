<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Donate;
use App\Models\Gacha;
use Illuminate\Database\Seeder;

class GachaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gacha::factory()
        ->count(10)
        ->has(Donate::factory()->count(10))
        ->create();
    }
}
