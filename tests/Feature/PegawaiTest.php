<?php

namespace Tests\Feature;

use App\Models\Pegawai;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PegawaiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_page_manajemen_pegawai_can_be_rendered(): void
    {
        $response = $this->get('/pegawai');

        $response->assertStatus(302);
    }

    public function test_pegawai_can_be_created(): void
    {
        $response = $this->post('/pegawai', [
            'nama_lengkap' => fake()->name(),
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'gaji' => fake()->numberBetween(1000000, 10000000),
            'jabatan' => fake()->jobTitle(),
            'photo' => fake()->imageUrl(),
        ]);

        $response->assertStatus(302);
    }

    public function test_pegawai_can_be_updated(): void
    {
        $data = Pegawai::factory()->create();
        $response = $this->put('/pegawai/'.$data->id, [
            'nama_lengkap' => fake()->name(),
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'gaji' => fake()->numberBetween(1000000, 10000000),
            'jabatan' => fake()->jobTitle(),
            'photo' => fake()->imageUrl(),
        ]);

        $response->assertStatus(302);
    }

    public function test_pegawai_can_be_deleted(): void
    {
        $data = Pegawai::factory()->create();
        $response = $this->delete('/pegawai/'.$data->id);
        $response->assertStatus(302);
    }

}
