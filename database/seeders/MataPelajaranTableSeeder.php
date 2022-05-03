<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MataPelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mataPelajaran = [
            [
                'id' => '1',
                'mata_pelajaran' => 'Pendidikan Agama dan Budi Pekerti',
                'slug' => 'Pendidikan Agama',
                'kategori' => 'A'
            ],
            [
                'id' => '2',
                'mata_pelajaran' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'slug' => 'PPKn',
                'kategori' => 'A'
            ],
            [
                'id' => '3',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'slug' => 'Bahasa Indonesia',
                'kategori' => 'A'
            ],
            [
                'id' => '4',
                'mata_pelajaran' => 'Matematika',
                'slug' => 'Matematika',
                'kategori' => 'A'
            ],
            [
                'id' => '5',
                'mata_pelajaran' => 'Sejarah Indonesia',
                'slug' => 'Sejarah Indonesia',
                'kategori' => 'A'
            ],
            [
                'id' => '6',
                'mata_pelajaran' => 'Bahasa Inggris',
                'slug' => 'Bahasa Inggris',
                'kategori' => 'A'
            ],
            [
                'id' => '7',
                'mata_pelajaran' => 'Seni Budaya',
                'slug' => 'Seni Budaya',
                'kategori' => 'B'
            ],
            [
                'id' => '8',
                'mata_pelajaran' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'slug' => 'PJOK',
                'kategori' => 'B'
            ],
            [
                'id' => '9',
                'mata_pelajaran' => 'Prakarya dan Kewirausahaan',
                'slug' => 'Prakarya dan Kewirausahaan',
                'kategori' => 'B'
            ],
            [
                'id' => '10',
                'mata_pelajaran' => 'Budi Daya Tanaman',
                'slug' => 'BDT',
                'kategori' => 'B'
            ],
            [
                'id' => '11',
                'mata_pelajaran' => 'Matematika',
                'slug' => 'Matematika',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '12',
                'mata_pelajaran' => 'Biologi',
                'slug' => 'Biologi',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '13',
                'mata_pelajaran' => 'Fisika',
                'slug' => 'Fisika',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '14',
                'mata_pelajaran' => 'Kimia',
                'slug' => 'Kimia',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '15',
                'mata_pelajaran' => 'Sejarah Peminatan',
                'slug' => 'Sejarah Peminatan',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '16',
                'mata_pelajaran' => 'Ekonomi',
                'slug' => 'Ekonomi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '17',
                'mata_pelajaran' => 'Sosiologi',
                'slug' => 'Sosiologi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '18',
                'mata_pelajaran' => 'Geografi',
                'slug' => 'Geografi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ], [
                // 'id' => '11',
                'mata_pelajaran' => 'Matematika',
                'slug' => 'Matematika',
                'kategori' => 'LM',
                'jurusan' => 'ipa'
            ],
            [
                // 'id' => '12',
                'mata_pelajaran' => 'Biologi',
                'slug' => 'Biologi',
                'kategori' => 'LM',
                'jurusan' => 'ipa'
            ],
            [
                // 'id' => '13',
                'mata_pelajaran' => 'Fisika',
                'slug' => 'Fisika',
                'kategori' => 'LM',
                'jurusan' => 'ipa'
            ],
            [
                // 'id' => '14',
                'mata_pelajaran' => 'Kimia',
                'slug' => 'Kimia',
                'kategori' => 'LM',
                'jurusan' => 'ipa'
            ],
            [
                // 'id' => '15',
                'mata_pelajaran' => 'Sejarah Peminatan',
                'slug' => 'Sejarah Peminatan',
                'kategori' => 'LM',
                'jurusan' => 'ips'
            ],
            [
                // 'id' => '16',
                'mata_pelajaran' => 'Ekonomi',
                'slug' => 'Ekonomi',
                'kategori' => 'LM',
                'jurusan' => 'ips'
            ],
            [
                // 'id' => '17',
                'mata_pelajaran' => 'Sosiologi',
                'slug' => 'Sosiologi',
                'kategori' => 'LM',
                'jurusan' => 'ips'
            ],
            [
                // 'id' => '18',
                'mata_pelajaran' => 'Geografi',
                'slug' => 'Geografi',
                'kategori' => 'LM',
                'jurusan' => 'ips'
            ],
        ];
        foreach ($mataPelajaran as $key => $value) {
            MataPelajaran::create($value);
        }
    }
}
