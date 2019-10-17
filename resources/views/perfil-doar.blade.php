@extends('layouts.master')
@section('body')


<div id="cadastro_produtos">

    <!-- ROW 2 -->
    <div class="container" id="cadastro_produtos">
        <div class="row col-xl-12 mx-auto" id="corpo">
            <div id="perfil" class="col-xl-4 mx-auto">
                <div class="doador">
                    <img class="foto-perfil" src="{{url($usuario->foto)}}" alt="" >
                </div>
                <div class="dados-doador ">

                    <div>
                        <span class="">Nome: {{$usuario->nome}} </span>
                        {{-- <span>{{$usuario->nome}}</span> --}}
                    </div>

                    <div>
                        <span>Email: </span>
                        <span>{{$usuario->email}}</span>
                    </div>

                    <div>
                        <span>Telefone: </span>
                        <span>{{$usuario->telefone}}</span>
                    </div>
                    <div>
                        <span>CPF: </span>
                        <span>{{$usuario->cpf}}</span>
                    </div>
                    <div>
                        <span>CEP: </span>
                        <span>{{$usuario->cep}}</span>
                    </div>
                </div>
            </div>

            <div id="produtos" class="col-xl-8 mx-auto">

                <div class="add-produto">
                    <a href="/cadastro/produto">
                        <button type="button"class="btn btn-success adicionar_prod">Adicionar produto +</button>
                    </a>

                </div>

               
                @foreach ($usuario->produtos as $p)
                    
                <div class="produto-registrado">
                    <div class="img-prod">
                     <a href=""><img src="{{url($p->foto)}}" alt="" class="foto-produto"></a>
                    </div>
                    <div class="dados-produto">
                        <div>
                            <span>Produto:</span>
                            <span>{{$p->nome}}</span>
                        </div>
                        <div>
                            <span>Quantidade:</span>
                            <span>{{$p->qnt}}</span>
                        </div>
                        <div>
                            <span>Estado:</span>
                            <span>{{$p->estado}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>



@endsection