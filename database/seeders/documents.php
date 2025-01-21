<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class documents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::create([
            'img' => 'image.jpg',
            'title' => 'SPI',
            'subtitle' => 'Subtitle Example',
            'context' => 'This is the context of the document.',
            'img_caption' => 'Image Caption Example',
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
    }
}
