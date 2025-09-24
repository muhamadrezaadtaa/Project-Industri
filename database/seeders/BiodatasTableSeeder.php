<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
               'nama_lengkap'  => 'Reza', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-12-20',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Kp.Bojong_Cijerah',
               'telepon' => '083822572181',
               'email' => 'eza21@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Guna', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-02-20',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Kp.Bojong_Cijerah',
               'telepon' => '0838225998781',
               'email' => 'gun221@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Ilham', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2008-12-10',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Rancamanyar',
               'telepon' => '083888572181',
               'email' => 'ham11@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Ipat', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-02-23',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Rancamanyar',
               'telepon' => '080922572181',
               'email' => 'pat21@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Galang', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2008-12-25',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Kopo',
               'telepon' => '083822572001',
               'email' => 'lang2@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Padil', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-02-10',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Kopo',
               'telepon' => '0838266780181',
               'email' => 'dil09@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Jauf', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-07-13',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'TCI',
               'telepon' => '081232572181',
               'email' => 'jof91@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Opik', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2007-02-12',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Kp.Bojong_Cijerah',
               'telepon' => '083902572181',
               'email' => 'pikgilsi21@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Alham', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2008-04-20',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Rancamanyar',
               'telepon' => '083822892181',
               'email' => 'alham1@gmail.com',
            ],
             [
               'nama_lengkap'  => 'Andra', 
               'jenis_kelamin' => 'Laki-laki',
               'tanggal_lahir' => '2009-11-29',
               'tempat_lahir' => 'Bandung',
               'agama' => 'islam',
               'alamat' => 'Caringin',
               'telepon' => '083822572109',
               'email' => 'drain1@gmail.com',
            ],
        ]);
 
    }
}
