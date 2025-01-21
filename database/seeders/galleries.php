<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class galleries extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            
            'title' => 'Gallery 1',
            'context' => 'Ini adalah gallery 1',
            'author_id' => 1,
            'date' => '2025-01-21',
        ]);
    }
}
