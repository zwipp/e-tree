@extends('layouts.master')
@section('body')


<div id="cadastro_produtos">

    <!-- ROW 2 -->
    <div class="container" id="cadastro_produtos">
        <div class="row col-xl-12 mx-auto" id="corpo">
            <div id="perfil" class="col-xl-4 mx-auto">
                <div class="doador">
                    <img src="images/pose-para-fotos-de-perfil.jpg" alt="" class="foto-perfil">
                </div>
                <div class="dados-doador">

                    <div>
                        <span>Nome:</span>
                        <span>{{$usuario->nome}}</span>
                    </div>
                    <div>
                        <span>Email: </span>
                        <a href="mailto:{{$usuario->email}}">{{$usuario->email}}</a>
                    </div>

                    <div>
                        <span>telefone: </span>
                        <a href="">{{$usuario->telefone}}</a>
                    </div>
                    <div>
                        <span>CPF: </span>
                        <a href="">{{$usuario->cpf}}</a>
                    </div>
                    <div>
                        <span>CEP: </span>
                        <a href="">{{$usuario->cep}}</a>
                    </div>
                </div>
            </div>

            <div id="produtos" class="col-xl-8 mx-auto">

                <div class="add-produto">
                    <a href="/cadastro_produto.html"><button type="button"
                            class="btn btn-success adicionar_prod">Adicionar mais um produto +</button></a>

                </div>

                <div class="produto-registrado">
                    <div class="img-prod">
                        <a href=""><img src="images/gabinete.jpg" alt="" class="foto-produto"></a>
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

                        <div>
                            <span>Descrição:</span>
                            <span>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                        </div>
                    </div>
                </div>

                <div class="produto-registrado">
                    <div class="img-prod">
                        <a href=""><img src="images/gabinete.jpg" alt="" class="foto-produto"></a>
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

                        <div>
                            <span>Descrição:</span>
                            <span>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                        </div>
                    </div>
                </div>

                <div class="produto-registrado">
                    <div class="img-prod">
                        <a href=""><img src="images/gabinete.jpg" alt="" class="foto-produto"></a>
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

                        <div>
                            <span>Descrição:</span>
                            <span>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                        </div>
                    </div>
                </div>

                <div class="produto-registrado">
                    <div class="img-prod">
                        <a href=""><img src="images/gabinete.jpg" alt="" class="foto-produto"></a>
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

                        <div>
                            <span>Descrição:</span>
                            <span>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                                bla
                                bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection