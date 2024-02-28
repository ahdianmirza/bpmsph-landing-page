<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sampleuji>
 */
class SampleujiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'whatsapp' => fake()->phoneNumber(),
            'asal' => fake()->randomElement(['Mandiri', 'Institusi']),
            'alamat' => fake()->address(),
            'tanggal' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'waktu' => fake()->time('H:i'),
            'jenis' => fake()->randomElement(['Kuman', 'Telur', 'Daging', 'Susu']),
            'suhu' => fake()->randomFloat(2, 20, 40),
            'nomorAntrian' => fake()->randomElement(['S001', 'S002', 'S003'])
        ];
    }
}