<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\NomorAntrian;
use Illuminate\Database\Seeder;
use App\Models\SensorSuhu;
use App\Models\SubmitAlert;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        SensorSuhu::create([
            'suhu' => '-'
        ]);

        NomorAntrian::create([
            'nomorAntrian' => '-'
        ]);

        User::create([
            'name' => 'Ahdian Mirza Azri',
            'email' => 'ahdianmirza@gmail.com',
            'password' => bcrypt('ahdian06')
        ]);

        SubmitAlert::create([
            'submitKonsul' => '0'
        ]);
    }
}