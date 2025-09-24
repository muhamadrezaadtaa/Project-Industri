<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Siswas')->insert([
            [
                'nama_lengkap'  => 'Reza',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-12-20',
                'kelas'         => 'X RPL 1',
            ],
            [
                'nama_lengkap'  => 'Guna',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-05-25',
                'kelas'         => 'X RPL 1',
            ],
            [
                'nama_lengkap'  => 'Alham',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-10-21',
                'kelas'         => 'X RPL 2',
            ],
            [
                'nama_lengkap'  => 'Faisal',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2008-09-18',
                'kelas'         => 'X RPL 2',
            ],
            [
                'nama_lengkap'  => 'Andra',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2009-04-09',
                'kelas'         => 'X RPL 3',
            ],
        ]);
    }
}
