@extends('layouts.master')
@section('body')

  <!-- CARROSSEL -->
  <section>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="{{url('images/criancas-1-1440x653-estilizada.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h6>TRABALHAMOS PELA INCLUSÃO DIGITAL</h6>
            <p></p>
            <p>O seu equipamento antigo, <br> terá um enorme valor em outras mãos.</p>
            <a href="doador"><button type="button" class="btn btn-secondary btn-lg">Saiba mais</button></a>
            <a href="doador"><button type="button" class="btn btn-primary btn-lg">Seja um doador!</button></a>
          </div>
        </div>
        <div class="carousel-item" data-interval="5000">
          <img src="{{url('images/arte_home1.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h6>PARTICIPE DESTA REVOLUÇÃO</h6>
            <p>Milhares de pessoas <br>podem ser impactadas com a sua ajuda.</p>
            <a href="doador"><button type="button" class="btn btn-secondary btn-lg">Saiba mais</button></a>
            <a href="doador"><button type="button" class="btn btn-primary btn-lg">Seja um doador!</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src=" {{url('images/electronic-recycling-1440x653-estilizada.png')}} " class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h6>DOE SEU COMPUTADOR USADO</h6>
            <p>Não jogue no lixo, <br>O que pode ser o futuro para outras pessoas.</p>
            <a href="doador"><button type="button" class="btn btn-secondary btn-lg">Saiba mais</button></a>
            <a href="doador"><button type="button" class="btn btn-primary btn-lg">Seja um doador!</button></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <div class="divisoria"></div>

  <!-- ICONES -->
  <div class="row m-2">
    <div class="col-md-4 mb-4" align="center">
      <img class="icones-topo" src=" {{url('images/round-people-24px-verde.svg')}} " alt="">
      <h4 class="my-4">Solidariedade</h4>
      <p>Quando você doa um computador que não lhe serve mais, está ajudando a outras pessoas que não tem acesso a tecnologias e que poderão ter as suas vidas transformadas por um gesto seu.</p>
    </div>
    <div class="col-md-4 mb-4" align="center">
      <img class="icones-topo" src=" {{url('images/baseline-autorenew-24px-verde.svg')}} " alt="">
      <h4 class="my-4">Reciclagem</h4>
      <p>Hoje no planeta, toneladas de lixo eletrônico são descartadas todos os dias. Grande parte destes equipamentos poderiam ser reaproveitados se passagem por uma triagem e recebessem uma pequena manutenção.</p>
    </div>
    <div class="col-md-4 mb-4" align="center">
      <img class="icones-topo" src=" {{url('images/round-laptop_chromebook-24px-verde.svg')}} " alt="">
      <h4 class="my-4">Inclusão Digital</h4>
      <p>Quando um computador reciclado chega às mãos de uma pessoa carente os horizontes se expandem. É possível transformar a vida de pessoas através da inclusão digital. Faça parte desta revolução!</p>
    </div>
  </div>

  <div class="divisoria">
  </div>

  <!-- NEWS -->
  <div class="bloco-cards">
    <div class="card-deck">
      <div class="card">
        <img src=" {{url('images/lixo-eletronico-1.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-success">Doadores</h5>
          <p class="card-text">Nossos Doadores tem o orgulho de fazer parte dessa nova era, Nos ajudando nessa nova jornada.
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">1 mil computadores doados</small>
        </div>
      </div>
      <div class="card">
        <img src=" {{url('images/criancas-2.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-success">Instituições</h5>
          <p class="card-text">Muito das instituições já receberam os seus pedidos e já estão a usar seus computadores
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">70 mil crianças beneficiadas</small>
        </div>
      </div>
      <div class="card">
        <img src=" {{url('images/criancas-3.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-success">Beneficiados</h5>
          <p class="card-text">
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Mais de 2000 parceiros</small>
        </div>
      </div>
    </div>
  </div>

  <div class="divisoria2 d-flex">
    <h3>Conheça os <a href="/doador">doadores</a></h3>
  </div>

@endsection