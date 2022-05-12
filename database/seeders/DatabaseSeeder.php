<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MataPelajaranTableSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(SiswaTableSeeder::class);
    }
}
