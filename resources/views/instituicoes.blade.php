@extends('layouts.master')
@section('body')


<h3 class="text-center">Oque é ser uma Instituição</h3>   
<div class="row col-8 mx-auto pb-4">
    <img class="col-9 col-md-6" src="images/instituicao.jpg" alt="" width="100%">
    <p class="col-9  col-md-6 text-justify">essa pagina é para todas as instituições ongs que precisam de acesso a computadores e entre outros, venha com a gente
        que nos podemos lhe ajudar, nos informe de quantos computadores e nos fazemos o resto, se você tem uma boa causa e um bom motivo para ajudar as comunidades carentes venha e faça parte dessa, se cadastre e bora mudar o mundo. 
    </p>            
</div>

    <div class="row col-xl-8 mx-auto d-block">        
        <h3 class="text-center">Como ser um Instituição participante</h3>
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
        <a href="/cadastro/instituicao" class="btn btn-primary btn-lg">Participe!</a>
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