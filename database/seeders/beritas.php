<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class beritas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'img' => 'tes.jpg',
            'title' => 'Berita 1',
            'context' => 'Ini adalah berita 1',
            'author_id' => 1,
            'category' => 1,
            'is_redaksi' => true,
            'date' => '2025-01-21',
        ]);
    }
}
