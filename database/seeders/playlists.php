<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class playlists extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Playlist::create([
            'title' => 'SPI',
            
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
        Playlist::create([
            'title' => 'Gratifikasi',
            
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
    }
}
