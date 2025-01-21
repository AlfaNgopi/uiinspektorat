<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class videos extends Seeder
{
    /**
     * Run the database seeds."title": "Inspektorat Kabupaten Purworejo Melihat SPI Survei Penilaian Integritas Lebih Dekat",
        "url": "https://www.youtube.com/embed/Ys02g5xgTBs"
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Inspektorat Kabupaten Purworejo Melihat SPI Survei Penilaian Integritas Lebih Dekat',
            'playlist' => 'SPI',
            'youtube_link' => 'https://www.youtube.com/embed/Ys02g5xgTBs',
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
    }
}
