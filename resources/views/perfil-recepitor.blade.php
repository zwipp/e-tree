@extends('layouts.master')
@section('body')


<div id="cadastro_produtos">

    <!-- ROW 2 -->
    <div class="container" id="cadastro_produtos">
        <div class="row col-xl-12 mx-auto" id="corpo">
            <div id="perfil" class="col-xl-4 mx-auto">

                <div class="doador">
                    <img src="{{url('/storage/uploads/'.$usuario->foto)}}" alt="" class="foto-perfil">
                </div>
                
                <div class="dados-doador">

                    <div>
                        <span>Nome:</span>
                        <span>{{$usuario->nome}}</span>
                    </div>
                    <div>
                        <span>Email: </span>
                        <span>{{$usuario->email}}</span>
                    </div>

                    <div>
                        <span>telefone: </span>
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
                    <a href="/cadastro/pedido"><button type="button"
                    class="btn btn-success adicionar_prod">Adicionar mais um produto +</button></a>
                </div>
                    <div class="dados-produto">

                        <div>
                            <span>Produto:</span>
                            <span>Gabinete</span>
                        </div>
                        <div>
                            <span>Quantidade:</span>
                            <span>5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection