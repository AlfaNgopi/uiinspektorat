<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Root-level items
        $survey = MenuItem::create(['text' => 'Survey', 'url' => '/survey']);
        $profile = MenuItem::create(['text' => 'Profile', 'url' => null]);
        $regulasi = MenuItem::create(['text' => 'Regulasi Tematik', 'url' => null]);

        // Submenu for Profile
        MenuItem::create(['text' => 'Tata Kerja', 'url' => '/document/tata-kerja', 'parent_id' => $profile->id]);
        MenuItem::create(['text' => 'Kedudukan Tugas dan Fungsi', 'url' => 'pages.html', 'parent_id' => $profile->id]);

        // Submenu for Regulasi Tematik
        $audit = MenuItem::create(['text' => 'Audit (Pemeriksaan)', 'url' => '#', 'parent_id' => $regulasi->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan Desa', 'url' => 'pages.html', 'parent_id' => $audit->id]);
    }
}
