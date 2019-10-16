<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome'=>['required'],
            'senha'=>['required','min:5'],
            'tipo'=>['required','numeric'],
            'email'=>['required','email','unique:usuarios'],
            'cidade'=>['required'],
            'estado'=>['required'],
            'cep'=>['required','min:8'],
            'cpf'=>['required','min:11', 'unique:usuarios'],
            'telefone'=>['required']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $usuario = new User();

        $usuario->nome=$data['nome'];
        $usuario->tipo=$data['tipo'];
        $usuario->email=$data['email'];
        $usuario->password=Hash::make ($data['senha']);
        $usuario->cidade=$data['cidade'];
        $usuario->estado=$data['estado'];
        $usuario->cep=$data['cep'];
        $usuario->cpf=$data['cpf'];
        $usuario->telefone=$data['telefone'];

        if (!empty($data['foto'])) {
            $nomeArquivo = time() . '.' . $data['foto']->extension();
            
            
            $data['foto']->storeAs('\uploads', $nomeArquivo);
            $usuario->foto = 'storage/uploads/' . $nomeArquivo;
        }

        $usuario->save();

        return $usuario;
    }
}
