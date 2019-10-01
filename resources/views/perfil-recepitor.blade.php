@extends('layouts.master')
@section('body')


<div id="cadastro_produtos">

    <!-- ROW 2 -->
    <div class="container" id="cadastro_produtos">
        <div class="row col-xl-12 mx-auto" id="corpo">
            <div id="perfil" class="col-xl-4 mx-auto">

                <div class="doador">
                    <img src={{url('images/pose-para-fotos-de-perfil.jpg')}} alt="" class="foto-perfil">
                </div>
                
                <div class="dados-doador">

                    <div>
                        <span>Nome: </span>
                        <span>Sofia</span>
                    </div>

                    <div>
                        <span>Empresa: </span>
                        <span>Terabyte</span>
                    </div>

                    <div>
                        <span>Email: </span>
                        <a href="">fernandodias@hotmail.com</a>
                    </div>

                    <div>
                        <span>telefone: </span>
                        <a href="">(19) 985563685</a>
                    </div>
                    <div>
                        <span>Local: </span>
                        <a href="">R. Zézin N:41 asdasdasdasdas</a>
                    </div>
                    <div>
                        <span>CEP: </span>
                        <a href="">456789123</a>
                    </div>
                </div>
            </div>

            <div id="produtos" class="col-xl-8 mx-auto">

                <div class="add-produto">
                    <a href="/cadastro_produto.html"><button type="button"
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