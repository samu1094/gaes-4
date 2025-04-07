<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipouSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            DB::table('res_tipou')->insert([
                'cod_tipo' => 'A',
                'nom_tipo' => 'Administrador'
            ]);
            DB::table('res_tipou')->insert([
                'cod_tipo' => 'F',
                'nom_tipo' => 'Funcionario'
            ]);
            DB::table('res_tipou')->insert([
                'cod_tipo' => 'P',
                'nom_tipo' => 'Aprendiz'
            ]);
        }
    
    
}
