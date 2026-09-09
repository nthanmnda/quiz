<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'kategori_id' => 1,
                'judul' => 'Perkembangan Artificial Intelligence',
                'ringkasan' => 'Mengenal perkembangan teknologi Artificial Intelligence.',
                'isi' => 'Artificial Intelligence merupakan teknologi yang memungkinkan komputer melakukan berbagai tugas yang membutuhkan kecerdasan manusia.',
                'sumber' => '...',
                'status' => 'published'
            ],

            [
                'kategori_id' => 1,
                'judul' => 'Apa Itu Cloud Computing?',
                'ringkasan' => 'Penjelasan mengenai teknologi cloud computing.',
                'isi' => 'Cloud computing adalah teknologi yang memungkinkan pengguna menyimpan dan mengakses data melalui internet.',
                'sumber' => '...',
                'status' => 'published'
            ],

            [
                'kategori_id' => 2,
                'judul' => 'Pentingnya Teknologi dalam Pendidikan',
                'ringkasan' => 'Teknologi memberikan berbagai manfaat dalam proses pendidikan.',
                'isi' => 'Penggunaan teknologi dalam pendidikan dapat membantu proses pembelajaran menjadi lebih fleksibel dan interaktif.',
                'sumber' => '...',
                'status' => 'published'
            ],

            [
                'kategori_id' => 3,
                'judul' => 'Strategi Digital Business',
                'ringkasan' => 'Strategi bisnis dalam menghadapi perkembangan teknologi digital.',
                'isi' => 'Bisnis dapat memanfaatkan teknologi digital untuk meningkatkan efisiensi dan menjangkau pelanggan yang lebih luas.',
                'sumber' => '...',
                'status' => 'draft'
            ],

            [
                'kategori_id' => 4,
                'judul' => 'Pentingnya Menjaga Kesehatan',
                'ringkasan' => 'Menjaga kesehatan merupakan hal penting dalam kehidupan sehari-hari.',
                'isi' => 'Menjaga pola makan, berolahraga, dan beristirahat cukup dapat membantu menjaga kesehatan tubuh.',
                'sumber' => '...',
                'status' => 'published'
            ],
        ];

        DB::table('informasis')->insert($dataku);
    }
}
