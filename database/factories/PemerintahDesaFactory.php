<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemerintahanDesa>
 */
class PemerintahDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pmd_nama' => fake()->name(),
            'pmd_jabatan' => fake()->title(),
            'pmd_us_id' => User::first()->us_id,
        ];
    }
}
