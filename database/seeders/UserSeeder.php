<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Marlon Figueroa',
            'username' => 'marlon.f.1993@gmail.com',
            'email' => 'marlon.f.1993@gmail.com',
            'password' => Hash::make('orion'),
            'tipo' => 1,
            'estado' => 1,
        ]);
    }
}
