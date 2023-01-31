<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KontakDesa>
 */
class KontakDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kd_nama' => fake()->name(),
            'kd_email' => fake()->safeEmail(),
            'kd_alamat' => "Jl yang benar",
            'kd_notlp' => fake()->phoneNumber(),
            'kd_us_id' => User::first()->us_id
        ];
    }
}