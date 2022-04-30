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
                'kategori' => 'A'
            ],
            [
                'id' => '2',
                'mata_pelajaran' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'kategori' => 'A'
            ],
            [
                'id' => '3',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'kategori' => 'A'
            ],
            [
                'id' => '4',
                'mata_pelajaran' => 'Matematika',
                'kategori' => 'A'
            ],
            [
                'id' => '5',
                'mata_pelajaran' => 'Sejarah Indonesia',
                'kategori' => 'A'
            ],
            [
                'id' => '6',
                'mata_pelajaran' => 'Bahasa Inggris',
                'kategori' => 'A'
            ],
            [
                'id' => '7',
                'mata_pelajaran' => 'Seni Budaya',
                'kategori' => 'B'
            ],
            [
                'id' => '8',
                'mata_pelajaran' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'kategori' => 'B'
            ],
            [
                'id' => '9',
                'mata_pelajaran' => 'Prakarya dan Kewirausahaan',
                'kategori' => 'B'
            ],
            [
                'id' => '10',
                'mata_pelajaran' => 'Budi Daya Tanaman',
                'kategori' => 'B'
            ],
            [
                'id' => '11',
                'mata_pelajaran' => 'Matematika',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '12',
                'mata_pelajaran' => 'Biologi',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '13',
                'mata_pelajaran' => 'Fisika',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '14',
                'mata_pelajaran' => 'Kimia',
                'kategori' => 'C',
                'jurusan' => 'ipa'
            ],
            [
                'id' => '15',
                'mata_pelajaran' => 'Sejarah Peminatan',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '16',
                'mata_pelajaran' => 'Ekonomi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '17',
                'mata_pelajaran' => 'Sosiologi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
            [
                'id' => '18',
                'mata_pelajaran' => 'Geografi',
                'kategori' => 'C',
                'jurusan' => 'ips'
            ],
        ];
        foreach ($mataPelajaran as $key => $value) {
            MataPelajaran::create($value);
        }
    }
}
