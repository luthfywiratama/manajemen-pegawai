<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'photo' => $this->faker->imageUrl(),
            'gaji' => $this->faker->numberBetween(1000000, 10000000),
            'jabatan' => $this->faker->jobTitle(),
        ];
    }
}
