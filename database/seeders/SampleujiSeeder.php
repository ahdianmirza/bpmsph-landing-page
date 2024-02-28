<?php

namespace Database\Seeders;

use App\Models\Sampleuji;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleujiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sampleuji::factory()->count(50)->create();
    }
}