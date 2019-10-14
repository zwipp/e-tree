@extends('layouts.master')
@section('body')

<div class="row col-xl-8 mx-auto d-flex justify-content-center" id="cadastro-doador" style="text-align: center;">
    <h1>Casdastre-se como um doador!!!</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, cupiditate minus tenetur pariatur minima libero provident temporibus corporis animi, vitae autem nihil accusantium velit non totam. Deleniti aperiam autem nisi?</p>
    <form action="/criar/usuario" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="tipo" value="2">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="nome" name="nome" value="{{old('nome')}}">

            @error('nome')
            <span class="text-danger">{{$message}} </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="email" name="email" value="{{old('email')}}">
            @error('email')
            <span class="text-danger">{{$message}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha"
                value="{{old('senha')}}">
            @error('senha')
            <span class="text-danger">{{$message}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar senha"
                name="confirm-senha">
            @error('confirm-senha')
            <span class="text-danger">{{$message}} </span>
            @enderror
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Cidade</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="Cidade" name="cidade"
                    value="{{old('cidade')}}">
                @error('cidade')
                <span class="text-danger">{{$message}} </span>
                @enderror
                <div class="invalid-tooltip">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Estado</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="Estado" name="estado"
                    value="{{old('estado')}}">
                <div class="invalid-tooltip">
                </div>
                @error('estado')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">CEP</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="CEP" name="cep"
                    value="{{old('cep')}}">
                <div class="invalid-tooltip">
                </div>
                @error('cep')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="validationTooltip05">CPF</label>
                <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{old('cpf')}}">
                @error('cpf')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
            <div class="col">
                <label for="validationTooltip05">Telefone</label>
                <input type="text" class="form-control" placeholder="Telefone" name="telefone"
                    value="{{old('telefone')}}">
                @error('telefone')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" placeholder="foto" name="foto">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-xl-8" id="cor-botao">Enviar cadastro</button>
    </form>
</div>

<style>
    body{
        background-image: url('../images/floresta.jpg')
    }
</style>

@endsection