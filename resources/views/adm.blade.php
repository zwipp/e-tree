
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
                            <h4>Estoque</h4>
                        </div>
                        <span class="list-group-item list-group-item-action bg-light">Notebooks: {{$qntNotebooks}}</span>
                        <span class="list-group-item list-group-item-action bg-light">Desktops: {{$qntDesktops}}</span>
                        <span class="list-group-item list-group-item-action bg-light">Monitores: {{$qntMonitor}}</span>
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
                                    <p class="btn btn-outline-success">{{count($doadores)}}</p>
                                    </h2>
                                </div>
                                <div id="collapseOnee" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="table table-striped novo-usuario">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Usuário</th>
                                                    <th scope="col">email</th>
                                                    <th scope="col">ações</th>
                                                </tr>
                                            </thead>                                                
                                            <tbody>
                                                @foreach ($doadores as $doador)
                                                <tr>
                                                    <td><a href="/perfil/doador/{{$doador->id}}">{{$doador->nome}}</a></td>
                                                    <td><a href="mailto:{{$doador->email}}">{{$doador->email}}</a></td>
                                                    <td>
                                                        <form action="/perfil/{{$doador->id}}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger text-white" type="submit">Excluir</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-entidade card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="false"
                                            aria-controls="collapseTwoo">
                                            <p>Instituições</p>
                                        </button>
                                    <p class="btn btn-outline-success">{{count($receptores)}}</p>
                                    </h2>
                                </div>
                                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="table table-striped novo-usuario">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Usuário</th>
                                                        <th scope="col">email</th>
                                                        <th scope="col">ações</th>
                                                    </tr>
                                                </thead>                                                
                                                <tbody>
                                                    @foreach ($receptores as $receptor)
                                                    <tr>
                                                        <td><a href="/perfil/receptor/{{$receptor->id}}">{{$receptor->nome}}</a></td>
                                                        <td><a href="mailto:{{$receptor->email}}">{{$receptor->email}}</a></td>
                                                        <td>
                                                            <form action="/perfil/{{$receptor->id}}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger text-white" type="submit">Excluir</button>
                                                            </form>
                                                        </td>    
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion pt-3" id="accordionExample">
                        <div class="card-dashboard">
                            <div class="card-header">
                                <h4>Pedidos</h4>
                            </div>
                            <div class="card">
                                <div class="card-entidade card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <p> Pendentes</p>
                                        </button>
                                        <p class="btn btn-outline-success btn-rounded"> {{count($pedidos)}} </p>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <table class="table table-striped novo-usuario">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Usuário</th>
                                                    <th scope="col">Quantidade</th>
                                                    <th scope="col">ações</th>
                                                </tr>
                                            </thead>                                                
                                            <tbody>
                                                @foreach ($pedidos as $p)
                                                <tr>
                                                    <td>{{$p->nome}}</td>
                                                    <td>{{$p->qnt}}</td>
                                                    <td>
                                                        <form action="/baixa/estoque" method="post">
                                                            @csrf
                                                            <input type="hidden" name="nome" value="{{$p->nome}}">
                                                            <input type="hidden" name="qnt" value=" {{$p->qnt}} ">
                                                            <input type="hidden" name="id" value=" {{$p->id}} ">
                                                            <button 
                                                            class="btn btn-success text-white" 
                                                            type="submit" 
                                                            {{$p->nome == "notebook" && $p->qnt > $qntNotebooks ? "disabled":'' }} 
                                                            {{$p->nome == "desktop" && $p->qnt > $qntDesktops ? "disabled":'' }}
                                                            {{$p->nome == "monitor" && $p->qnt > $qntMonitor ? "disabled":'' }}
                                                            >Finalizar</button>


                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
