<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Rudy Gunawan',
            'nim' => '12345',
        ]);

        Wali::create([
            'nama' => 'Pak Perdi',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
