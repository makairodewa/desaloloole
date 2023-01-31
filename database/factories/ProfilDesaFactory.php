<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfilDesa>
 */
class ProfilDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pd_nama' => 'Desa Lolo Ole',
            'pd_alamat' => 'Jl yang benar',
            'pd_visi' => fake()->sentence(),
            'pd_misi' => fake()->text(),
            'pd_sejarah' => fake()->text(),
            'pd_us_id' =>  User::first()->us_id
        ];
    }
}