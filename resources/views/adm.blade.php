
@extends('layouts.master')
@section('body')

    <!-- SIDEBAR E DASHBOARD -->
    <section id="adm">
        <div class="container">
            <div class="row dashboard mt-4">
                <!-- SIDEBAR -->
                <div class="col-md-3 col-sm-12 py-3 adm-sidebar">
                    <div class="sidebar-links list-group-flush border">
                        <div class="card-header">
                            <h4>Ferramentas</h4>
                        </div>
                        <a href="" class="list-group-item list-group-item-action bg-light">Link</a>
                        <a href="" class="list-group-item list-group-item-action bg-light">Link</a>
                        <a href="" class="list-group-item list-group-item-action bg-light">Link</a>
                        <a href="" class="list-group-item list-group-item-action bg-light">Link</a>
                        <a href="" class="list-group-item list-group-item-action bg-light">Link</a>
                    </div>
                </div>
                <!-- PAINEL -->
                <div class="adm-infos col-md-9 py-3">
                    <div class="accordion" id="accordionExample">
                        <div class="card-dashboard">
                            <div class="card-header">
                                <h4>Novos Cadastros</h4>
                            </div>
                            <div class="card">
                                <div class="card-entidade card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOnee" aria-expanded="true"
                                            aria-controls="collapseOnee">
                                            <p>Doadores</p>
                                        </button>
                                    <p class="btn btn-outline-success">{{count($usuarios)}}</p>
                                    </h2>
                                </div>
                                <div id="collapseOnee" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="novos-cadastros">
                                            @foreach ($usuarios as $usuario)  
                                            @if ($usuario->tipo === 3)                                                
                                            <li class="">
                                                <a href="">{{$usuario->nome}}</a>
                                                <p>{{$usuario->email}}</p>
                                            </li>
                                            <hr>
                                            @endif                                            
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-entidade card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwoo" aria-expanded="false"
                                            aria-controls="collapseTwoo">
                                            <p>Instituições</p>
                                        </button>
                                    <p class="btn btn-outline-success">{{count($usuarios)}}</p>
                                    </h2>
                                </div>
                                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        @if ($usuario->tipo === 2)
                                            <table class="table table-striped novo-usuario">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Usuário</th>
                                                        <th scope="col">email</th>
                                                        <th scope="col">ações</th>
                                                    </tr>
                                                </thead>                                                
                                                <tbody>
                                                    @foreach ($usuarios as $usuario)
                                                    <tr>
                                                        <td><a href="/perfil/receptor">{{$usuario->nome}}</a></td>
                                                        <td>{{$usuario->email}}</td>
                                                        <td>
                                                        {{-- <form action="/perfil/receptor/{id}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn badge badge-danger">Remover</button>
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion pt-3" id="accordionExample">
                        <div class="card-dashboard">
                            <div class="card-header">
                                <h4>Equipamentos disponíveis</h4>
                            </div>
                            <div class="card">
                                <div class="card-entidade card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <p> Doadores x Instituições</p>
                                        </button>
                                        <p class="btn btn-outline-success btn-rounded">5</p>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                        et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of
                                        them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
