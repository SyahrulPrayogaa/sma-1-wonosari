<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@sman1wonosari.sch.id',
            'role'    => 'admin',
            'password' => hash::make('password'),
        ]);
        User::create([
            'name'     => 'Operator',
            'email'    => 'operator@sman1wonosari.sch.id',
            'role'    => 'operator',
            'password' => hash::make('password'),
        ]);
    }
}
