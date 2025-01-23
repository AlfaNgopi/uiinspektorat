<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataInstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_instansis')->insert([
            ['nama_instansi' => 'PEMERINTAH DESA BENOWO KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA BENOWO KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA BENOWO KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA NGASINAN KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA SIDOMUKTI KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA NGLARIS KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA LIMBANGAN KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA SUKOWUWUH KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
            ['nama_instansi' => 'PEMERINTAH DESA KALIJAMBE KEC. BENER', 'batas_token' => '0000-00-00', 'status' => '1'],
        ]);
    }
}
