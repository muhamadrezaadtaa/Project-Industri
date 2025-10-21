<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tugas_products')->insert([
            [
            "nama" => "Basreng",
            "description" => "Enak Gurih😊",
            "price" => 5000,
            "stock" => 22,
            ],
            [
            "nama" => "Cilok",
            "description" => "Kenyal Isi Jando🤘",
            "price" => 5000,
            "stock" => 32,
            ],
            [
            "nama" => "Baring",
            "description" => "Kriuk Pedas🥵",
            "price" => 1000,
            "stock" => 12,
            ],
            [
            "nama" => "Risol",
            "description" => "Enak Isi Sosis😁",
            "price" => 2500,
            "stock" => 39,
            ],
            [
            "nama" => "Cimol",
            "description" => "Empuk Gurih😬",
            "price" => 5000,
            "stock" => 12,
            ],
            [
            "nama" => "Dorokdok",
            "description" => "Kriuk Gurih😉",
            "price" => 3000,
            "stock" => 30,
            ],
            [
            "nama" => "Cireng",
            "description" => "Pedas Gurih😘",
            "price" => 2000,
            "stock" => 23,
            ],
            [
            "nama" => "Mie",
            "description" => "Enak Banget😋",
            "price" => 3000,
            "stock" => 12,
            ],
            [
            "nama" => "Marimas",
            "description" => "Marimas Enak✌️",
            "price" => 3000,
            "stock" => 10,
            ],
            [
            "nama" => "Nutrisari",
            "description" => "Jelas Enak Banget💝",
            "price" => 5000,
            "stock" => 42,
            ],
            // dari sini sayng
            [
            "nama" => "sukro cikur",
            "description" => "Enak Gurih kriuk😘",
            "price" => 6000,
            "stock" => 22,
            ],
            [
            "nama" => "waper",
            "description" => "manis😵‍💫",
            "price" => 7000,
            "stock" => 32,
            ],
            [
            "nama" => "makaroni basah",
            "description" => "manis Pedas🤪",
            "price" => 8000,
            "stock" => 12,
            ],
            [
            "nama" => "roti goreng",
            "description" => "gurih manis🤗",
            "price" => 9500,
            "stock" => 39,
            ],
            [
            "nama" => "cipak",
            "description" => "gurih asin pedas🫨",
            "price" => 1000,
            "stock" => 12,
            ],
            [
            "nama" => "dodol",
            "description" => "maniss😊",
            "price" => 11000,
            "stock" => 30,
            ],
            [
            "nama" => "bubur ayam",
            "description" => "enak Gurih🍚",
            "price" => 3000,
            "stock" => 23,
            ],
            [
            "nama" => "mustofa",
            "description" => "manis pedas🤩",
            "price" => 3000,
            "stock" => 12,
            ],
            [
            "nama" => "milo",
            "description" => "Milo cokelat enak☕",
            "price" => 3000,
            "stock" => 10,
            ],
            [
            "nama" => "orson",
            "description" => "manis banget🤫",
            "price" => 5000,
            "stock" => 42,
            ],
        ]);
    }
}