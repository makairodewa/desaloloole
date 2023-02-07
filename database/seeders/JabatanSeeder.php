<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            ['jb_nama' => 'Kepala Desa'],
            ['jb_nama' => 'Sekretaris Desa'],
            ['jb_nama' => 'Bendahara Desa'],
            ['jb_nama' => 'Kasi Pemerintahan'],
            ['jb_nama' => 'Kasi Kesejahteraan'],
            ['jb_nama' => 'Kasi Pertanian'],
        ];
        foreach ($positions as $position) {
            Jabatan::create($position);
        }
    }
}
