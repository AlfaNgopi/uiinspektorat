<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class beritas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $beritas = [
            [
                'img' => 'storage/images/news1.jpg',
                'title' => 'teee',
                'context' => 'Kegiatan dilaksanakan pada hari Kamis tanggal 19 Desember 2024 di Aula Inspektorat Kabupaten Purworejo. Menghadirkan peserta dari 27 Puskesmas dan 2 RSUD di wilayah Kabupaten Purworejo, dengan Narasumber dari BPKPAD dan Inspektorat.',
                'author_id' => 1,
                'category' => 1,
                'is_redaksi' => true,
                'date' => '2024-12-19',
            ],
            [
                'img' => 'storage/images/news1.jpg',
                'title' => 'Rapat Koordinasi Lap4oran Hasil Pemeriksaan terkait Tata Kelola BLUD Tahun 20241',
                'context' => 'Kegiatan dilaksanakan pada hari Kamis tanggal 19 Desember 2024 di Aula Inspektorat Kabupaten Purworejo. Menghadirkan peserta dari 27 Puskesmas dan 2 RSUD di wilayah Kabupaten Purworejo, dengan Narasumber dari BPKPAD dan Inspektorat.',
                'author_id' => 1,
                'category' => 1,
                'is_redaksi' => true,
                'date' => '2024-12-19',
            ],
            [
                'img' => 'storage/images/news2.jpg',
                'title' => 'Pelatihan Pengel5olaan Keuangan Daerah',
                'context' => 'Pelatihan ini bertujuan untuk meningkatkan kemampuan pengelolaan keuangan daerah bag2i para pegawai di lingkungan Pemerintah Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 2,
                'is_redaksi' => false,
                'date' => '2024-01-20',
            ],
            [
                'img' => 'storage/images/news3.jpg',
                'title' => 'Sosialisasi Program Anti K4orupsi',
                'context' => 'Sosialisasi ini diadakan untuk meningkatkan kesadaran akan pentingnya penceg4ahan korupsi di lingkungan pemerintahan.',
                'author_id' => 1,
                'category' => 3,
                'is_redaksi' => true,
                'date' => '2024-02-15',
            ],
            [
                'img' => 'storage/images/news4.jpg',
                'title' => 'Workshop Pengembangan SD3M',
                'context' => 'Workshop ini bertujuan untuk meningkatkan kualitas sumber daya manusia di ling5kungan Pemerintah Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 4,
                'is_redaksi' => false,
                'date' => '2024-03-10',
            ],
            [
                'img' => 'storage/images/news1.jpg',
                'title' => 'Lomba Inovasi Daerah2',
                'context' => 'Lomba ini diadakan untuk mendorong inovasi di berbagai bidang di lingkungan Peme6rintah Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 5,
                'is_redaksi' => true,
                'date' => '2024-04-25',
            ],
            [
                'img' => 'storage/images/news2.jpg',
                'title' => 'Pameran Produk Unggulan Daerah123',
                'context' => 'Pameran ini menampilkan berbagai produk unggulan dari Kabupaten Pu7rworejo.',
                'author_id' => 1,
                'category' => 5,
                'is_redaksi' => false,
                'date' => '2024-05-30',
            ],
            [
                'img' => 'storage/images/news3.jpg',
                'title' => 'Seminar Kesehatan Masyarakat4',
                'context' => 'Seminar ini membahas berbagai isu kesehatan masyarakat di Kabupaten Pur8worejo.',
                'author_id' => 1,
                'category' => 2,
                'is_redaksi' => true,
                'date' => '2024-06-15',
            ],
            [
                'img' => 'storage/images/news4.jpg',
                'title' => 'Pelatihan Teknologi Informasi33',
                'context' => 'Pelatihan ini bertujuan untuk meningkatkan kemampuan tekn9ologi informasi di lingkungan Pemerintah Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 3,
                'is_redaksi' => false,
                'date' => '2024-07-20',
            ],
            [
                'img' => 'storage/images/news5.jpg',
                'title' => 'Rapat Evaluasi Kinerja12',
                'context' => 'Rapat ini diadakan untuk mengevaluasi kinerja pegawai di lingku11ngan Pemerintah Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 4,
                'is_redaksi' => true,
                'date' => '2024-08-25',
            ],
            [
                'img' => 'storage/images/news2.jpg',
                'title' => 'Kegiatan Bakti Sosial3',
                'context' => '<b>Kegiatan ini bertujuan</b> untuk membantu masyarakat yang membutuh12an di Kabupaten Purworejo.',
                'author_id' => 1,
                'category' => 5,
                'is_redaksi' => false,
                'date' => '2024-09-30',
            ],
        ];

        foreach ($beritas as $berita) {
            Berita::create($berita);
        }
    }
}
