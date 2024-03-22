<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teste;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teste::create([
            'nome'=> 'Jonathan Xavier',
            'cpf' => '05555555555',
            'peso' => 50,
            'idade' => 20,
            'data_nascimento' => '2002-04-03',
        ]);
    }
}
