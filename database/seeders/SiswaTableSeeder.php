<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(1234);
        $jurusan = ['ipa', 'ips'];
        $jk = ['L', 'P'];

        for ($i = 0; $i < 3; $i++) {
            Siswa::create(
                [
                    'nama' => $faker->name,
                    'tempat_lahir' => $faker->state,
                    'tanggal_lahir' => $faker->date,
                    'jenis_kelamin' => $faker->randomElement($jk),
                    'nis' => $faker->unique()->numerify('####'),
                    'nisn' => $faker->unique()->numerify('##########'),
                    'jurusan' => $faker->randomElement($jurusan),
                    'nama_wali' => $faker->name,
                ]
            );
        }
    }
}
