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
        $galeri = MenuItem::create(['text' => 'Galeri', 'url' => '/gallerys']);
        $video = MenuItem::create(['text' => 'Video', 'url' => '/videos']);
        $download = MenuItem::create(['text' => 'Download', 'url' => '/download']);
        $berita = MenuItem::create(['text' => 'Berita', 'url' => '/berita']);
        $informasiPublik = MenuItem::create(['text' => 'Informasi Publik', 'url' => null]);
        $hubungiKami = MenuItem::create(['text' => 'Hubungi Kami', 'url' => '/hubungi']);

        // Submenu for Profile
        MenuItem::create(['text' => 'Tata Kerja', 'url' => '/document/tata-kerja', 'parent_id' => $profile->id]);
        MenuItem::create(['text' => 'Kedudukan Tugas dan Fungsi', 'url' => 'pages.html', 'parent_id' => $profile->id]);
        MenuItem::create(['text' => 'Struktur Organisasi', 'url' => 'pages.html', 'parent_id' => $profile->id]);
        MenuItem::create(['text' => 'SOP', 'url' => 'pages.html', 'parent_id' => $profile->id]);


        // Submenu for Regulasi Tematik
        $audit = MenuItem::create(['text' => 'Audit (Pemeriksaan)', 'url' => '#', 'parent_id' => $regulasi->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan Desa', 'url' => 'pages.html', 'parent_id' => $audit->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan Pengadaan', 'url' => 'pages.html', 'parent_id' => $audit->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan BUMD', 'url' => 'pages.html', 'parent_id' => $audit->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan Perencanaan', 'url' => 'pages.html', 'parent_id' => $audit->id]);
        MenuItem::create(['text' => 'Regulasi Pemeriksaan Probity Audit', 'url' => 'pages.html', 'parent_id' => $audit->id]);

        $reviu = MenuItem::create(['text' => 'Reviu', 'url' => '#', 'parent_id' => $regulasi->id]);
        MenuItem::create(['text' => 'Regulasi Reviu Laporan Keuangan', 'url' => 'pages.html', 'parent_id' => $reviu->id]);
        MenuItem::create(['text' => 'Regulasi Reviu Dokumen Perencanaan', 'url' => 'pages.html', 'parent_id' => $reviu->id]);
        MenuItem::create(['text' => 'Regulasi Reviu DAK Fisik', 'url' => 'pages.html', 'parent_id' => $reviu->id]);
        MenuItem::create(['text' => 'Regulasi Reviu Laporan Penyelenggaraan', 'url' => 'pages.html', 'parent_id' => $reviu->id]);
        MenuItem::create(['text' => 'Regulasi Reviu Laporan Kinerja Instansi', 'url' => 'pages.html', 'parent_id' => $reviu->id]);

        $evaluasi = MenuItem::create(['text' => 'Evaluasi', 'url' => '#', 'parent_id' => $regulasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Laporan Keuangan', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Sakip', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi SPIP', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Dana BOS', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Penanganan Z', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Dana Desa', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);
        MenuItem::create(['text' => 'Regulasi Evaluasi Reformasi BI', 'url' => 'pages.html', 'parent_id' => $evaluasi->id]);


        // Submenu for Informasi Publik
        MenuItem::create(['text' => 'Berkala', 'url' => 'https://eppid.purworejokab.go.id/opd/inspektorat/informasi/berkala', 'target' => '_blank', 'parent_id' => $informasiPublik->id]);
        MenuItem::create(['text' => 'Serta Merta', 'url' => 'https://eppid.purworejokab.go.id/opd/inspektorat/informasi/serta-merta', 'target' => '_blank', 'parent_id' => $informasiPublik->id]);
        MenuItem::create(['text' => 'Setiap Saat', 'url' => 'https://eppid.purworejokab.go.id/opd/inspektorat/informasi/setiap-saat', 'target' => '_blank', 'parent_id' => $informasiPublik->id]);
        MenuItem::create(['text' => 'DIP', 'url' => 'https://eppid.purworejokab.go.id/opd/inspektorat/informasi/dip', 'target' => '_blank', 'parent_id' => $informasiPublik->id]);
    }
}
