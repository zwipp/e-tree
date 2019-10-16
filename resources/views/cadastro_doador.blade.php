@extends('layouts.master')
@section('body')

<div class="row col-xl-8 mx-auto d-flex justify-content-center" id="cadastro-doador" style="text-align: center;">
    <h1 class="pt-4">Cadastre-se como um doador!</h1>
    <form  class="text-left" action="/register" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="tipo" value="2">
        <div class="row">
            <div class="col-sm-12 col-md-6 form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}">

                @error('nome')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com" name="email" value="{{old('email')}}">
                @error('email')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <small class="text-muted">mínimo 5 caracteres</small>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="senha" value="{{old('senha')}}">
                @error('senha')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="exampleInputPassword1">Confirmar senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******" name="confirm-senha">
                @error('confirm-senha')
                <span class="text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="validationTooltip05">CPF</label>
                <input type="text" class="form-control" name="cpf" value="{{old('cpf')}}">
                @error('cpf')
                <span class="text-danger">{{$message}} </span>
                @enderror    
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="validationTooltip05">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep')}}">
                @error('telefone')
                <span class="text-danger">{{$message}} </span>
                @enderror   
            </div>
        </div>    
        <div class="row">
            <div class="form-group col-sm-12 col-md-5">
                <label for="validationTooltip03">Cidade</label>
                <input type="text" readonly class="form-control" id="cidade"  name="cidade" value="{{old('cidade')}}">
                @error('cidade')
                <span class="text-danger">{{$message}} </span>
                @enderror    
            </div>
            <div class="form-group col-sm-12 col-md-2">
                <label for="validationTooltip04">Estado</label>
                <input type="text" readonly class="form-control" id="uf"  name="estado" value="{{old('estado')}}">
                <div class="invalid-tooltip">
                </div>
                @error('estado')
                <span class="text-danger">{{$message}} </span>
                @enderror            
            </div>
            <div class="form-group col-sm-12 col-md-5">
                <label for="validationTooltip05">Telefone</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="(DDD) + Telefone" name="telefone" value="{{old('telefone')}}">
                <div class="invalid-tooltip">
                </div>
                @error('cep')
                <span class="text-danger">{{$message}} </span>
                @enderror           
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input name="foto" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Escolha sua foto de perfil</label>
            </div>
          </div>

        <div class="row d-flex justify-content-center pt-1">
            <button type="submit" class="btn btn-primary col-sm-12 col-md-6">Enviar</button>
        </div>
    </form>
    </div>

@section('script')
<script src="{{url("js/cep.js")}}"></script>
@endsection

<style>
    body{
        background-image: url('../images/floresta.jpg')
    }
</style>

@endsection