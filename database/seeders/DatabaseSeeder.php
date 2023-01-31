<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $roles = [
            [
                'rs_name' => 'Administrator',
            ],
            [
                'rs_name' => 'User',
            ],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
        \App\Models\User::factory(1)->create();
        \App\Models\KategoriDesa::factory(2)->create();
        \App\Models\ProfilDesa::factory(1)->create();
        \App\Models\KontakDesa::factory(1)->create();
        \App\Models\PemerintahDesa::factory(5)->create();
    }
}