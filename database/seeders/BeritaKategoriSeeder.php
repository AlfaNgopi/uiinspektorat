<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita_kategoris')->insert([
            ['name' => 'Sekretariat', 'article_count' => 0, 'active' => 1],
            ['name' => 'Irban 1', 'article_count' => 0, 'active' => 1],
            ['name' => 'Irban 2', 'article_count' => 0, 'active' => 1],
            ['name' => 'Irban 3', 'article_count' => 0, 'active' => 1],
            ['name' => 'Irban 4', 'article_count' => 0, 'active' => 1],
            ['name' => 'Irban 5', 'article_count' => 0, 'active' => 1],
        ]);
    }
}
