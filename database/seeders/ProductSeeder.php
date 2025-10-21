<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            "nama" => "baju",
            "description" => "Bajunya Brand Raffi Ahmad",
            "price" => 50000,
            "stock" => 322,
            ],
        ]);
    }
}
