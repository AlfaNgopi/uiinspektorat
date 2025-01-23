<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JejakPendapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jejak_pendapats')->insert([
            [
                'pilihan' => 'Kurang Memuaskan',
                'tipe' => 'Jawaban',
                'rating' => 5,
                'aktif' => true,
            ],
            [
                'pilihan' => 'Memuaskan',
                'tipe' => 'Jawaban',
                'rating' => 3,
                'aktif' => true,
            ],
            [
                'pilihan' => 'Sangat Memuaskan',
                'tipe' => 'Jawaban',
                'rating' => 4,
                'aktif' => true,
            ],
            [
                'pilihan' => 'Bagainama Pelayanan di Inspektorat?',
                'tipe' => 'Pertanyaan',
                'rating' => 0,
                'aktif' => true,
            ],
        ]);
    }
}
