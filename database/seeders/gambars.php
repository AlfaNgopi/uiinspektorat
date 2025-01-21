<?php

namespace Database\Seeders;

use App\Models\Gambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class gambars extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gambar::create([
            'img' => '',
            'title' => 'Gambar 1',
            'gallery' => 'Gallery 1',
            'context' => 'Ini adalah gambar 1',
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
    }
}
