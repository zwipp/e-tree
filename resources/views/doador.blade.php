@extends('layouts.master')
@section('body')

        <h3 class="text-center my-4">O que é ser um Doador</h3>   
        <div class="row col-8 mx-auto">
            <img class="col-6" src="images/doador.jpg" alt="" width="100%">
            <p class="col-6 text-justify">Ser um doador nos dias de hoje é levar as pessoas ao futuro, 
                você doar seu computador, notebook, e tablet velho e a gente faz esses computadores, notebooks e tablets chegarem nas mãos de comunidades carentes
                ser um doador de eletrônicos com a gente e saber que seu aparelho terá um destino certo, e ajudará muita gente.
                venha com a gente nessa jornada, ajude quem precisa, ajuda nessa inclusão social endo todos terão a oportunidade de ingressar nessa fase atual do mundo.
                você pode estar ajudando e incentivando novos técnicos de informática, novos programadores, designers, estudantes que precisam de um lugar para estudar, e não podem pagar por essa tecnologia. 
                Então pra gente o que é ser um doador, é simplesmente levar um sorriso e a esperança para todas as comunidades carentes.
            </p>            
        </div>

        <div class="row col-xl-8 mx-auto d-block">        
            <h3 class="text-center my-4">Como ser um Doador</h3>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error provident ex sunt
                voluptatem, saepe minima maxime perferendis explicabo sed. Qui corrupti cumque debitis autem magnam
                placeat minus sit voluptates nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione
                aliquid libero. Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae
                delectus ex ratione nam recusandae maxime voluptatum nisi?</p>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error provident ex sunt
                voluptatem, saepe minima maxime perferendis explicabo sed. Qui corrupti cumque debitis autem magnam
                placeat minus sit voluptates nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione
                aliquid libero. Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae
                delectus ex ratione nam recusandae maxime voluptatum nisi?</p>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error provident ex sunt
                voluptatem, saepe minima maxime perferendis explicabo sed. Qui corrupti cumque debitis autem magnam
                placeat minus sit voluptates nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione
                aliquid libero. Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae
                delectus ex ratione nam recusandae maxime voluptatum nisi?</p>
        </div>

        <div class="row col-xl-2 mx-auto d-block pb-2" style="text-align: center;">
            <a href="/cadastro/doador" class="btn btn-primary btn-lg">Participe!</a>
        </div>

    @endsection


    @section('script')
    <script>
        function aparece_cadastro(evt) {
            let cadastro = document.getElementById('cadastro_doador');
            cadastro.style.display = "block";
        }

        let bt = document.getElementById('participe');
        bt.addEventListener('click', aparece_cadastro);

    </script>
    @endsection

