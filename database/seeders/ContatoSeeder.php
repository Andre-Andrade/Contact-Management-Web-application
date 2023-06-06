<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoSeeder extends Seeder
{

    public function run()
     {
        DB::table('contato')->insert([
            'nome' => 'Marcelo',
            'email' => 'marceloamorim' . '@gmail.com',
            'contato' => '999999991',
        ]);

        DB::table('contato')->insert([
            'nome' => 'Levi',
            'email' => 'levi18' . '@gmail.com',
            'contato' => '999999992',
        ]);

        DB::table('contato')->insert([
            'nome' => 'Joao costa',
            'email' => 'teste3' . '@gmail.com',
            'contato' => '999999993',
        ]);
    }
}
