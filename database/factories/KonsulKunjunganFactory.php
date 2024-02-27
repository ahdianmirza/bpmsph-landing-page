<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KonsulKunjungan>
 */
class KonsulKunjunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'whatsapp' => fake()->phoneNumber(),
            'asal' => fake()->randomElement(['Mandiri', 'Institusi']),
            'alamat' => fake()->address(),
            'tanggal' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'waktu' => fake()->time('H:i'),
            'staff' => fake()->randomElement(["Ahdian Mirza Azri", "Nurin"]),
            'tujuan' => fake()->randomElement(['Konsultasi', 'Kunjungan', 'Ambil Sample', 'Jalan-jalan']),
            'suhu' => fake()->randomFloat(2, 20, 40),
            'nomorAntrianKonsul' => fake()->randomElement(['T001', 'T002', 'T003'])
        ];
    }
}