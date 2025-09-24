<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title'   => 'Tips Cepat Pinter',
                'content' => 'Lorem ipsum',
            ],
            [
                'title'   => 'Membangun Visi Misi Sukses',
                'content' => 'Lorem ipsum',
            ],
        ]);
    }
}
