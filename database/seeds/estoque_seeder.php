<?php

use Illuminate\Database\Seeder;
use App\Estoque;

class estoque_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estoque::create([
            "nome"=>'notebook',
            "qnt"=>0,
        ]);

        Estoque::create([
            "nome"=>'monitor',
            "qnt"=>0,
        ]);

        Estoque::create([
            "nome"=>'desktop',
            "qnt"=>0,
        ]);
    }
}
