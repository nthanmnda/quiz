<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            ['nama' => 'Makanan Berat'],
            ['nama' => 'Makanan Ringan'],
            ['nama' => 'Jus'],
            ['nama' => 'Soda'],
            ['nama' => 'Susu']
        ];
        DB::table('kategoris')->insert($dataku);
    }
}
