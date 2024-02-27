<?php

namespace Database\Seeders;

use App\Models\KonsulKunjungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonsulKunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KonsulKunjungan::factory()->count(50)->create();
    }
}