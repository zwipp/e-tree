<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class adm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome'=>'adm',
            'tipo'=>1,
            'email'=>'adm@adm',
            'password'=>Hash::make('12345'),
            'cidade'=>'sp',
            'estado'=>'sp',
            'cep'=>'12345678',
            'cpf'=>'12345678901',
            'telefone'=>'123456789',
        ]);

    }
}
