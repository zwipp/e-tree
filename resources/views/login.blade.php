@extends('layouts.master')
@section('body')

  <section class="container-fluid pb-4" id="login">
    <div class="row">
      <div class="boxLogin col-sm-12 col-md-3">
        <form class="mt-2" action="/login/etree" method="POST">
          @csrf
          <div class="form-group campos-form">
            <label for="exampleInputEmail1">Login</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Digite seu e-mail">
          </div>
          <div class="form-group campos-form">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Insira sua senha">
          </div>

          <div class="campos-form">
            <button type="submit" class="btn btn-success btn_entrar">Entrar</button>
          </div>
          <div class="form-check text-left">
              <small><a href="#">Esqueci minha senha</a></small>
          </div>

        </form>

      </div>
    </div>
  </section>

@endsection