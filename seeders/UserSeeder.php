<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Samuel Pena',
            'tipo_documento' => 'T.I',
            'numero_documento' => 1141715231,
            'cod_tipo_fk' => 'A',
            'email' => 'penas6422@gmail.com',
            'password' => Hash::make('samu1094'),
        ]);
    }
}
