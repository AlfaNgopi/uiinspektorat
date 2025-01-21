<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class downloadables extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Download::create([
            'file_name' => 'SPI',
            'file_path' => 'SPI.pdf',
            'frequency' => 42,
            
        ]);
    }
}
