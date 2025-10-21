<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\Mahasiswa;


class DosenMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen1 = Dosen::create([
            'nama' => 'Dr. Aliva Nugraha',
            'nipd' => 'D001'
        ]);

        $dosen2 = Dosen::create([
            'nama' => 'Prof. Ani-mah',
            'nipd' => 'D002'
        ]);

        // Tambahkan mahasiswa ke masing-masing dosen
        $dosen1->mahasiswas()->createMany([
            ['nama' => 'Rudy Gunawan', 'nim' => '123456'],
            ['nama' => 'Rizki Andriansyah', 'nim' => '123457'],
        ]);

        $dosen2->mahasiswas()->createMany([
            ['nama' => 'Nur Kenur', 'nim' => '123458'],
            ['nama' => 'Dewi Bintang Kecil', 'nim' => '123459'],
        ]);
    }
}
