@extends('layouts.master')
@section('body')

    <section id="cadastro_produtos" class="container-fluid pb-3">

        <form class="col-9 mx-auto py-2" action="/criar/pedido" method="POST">
            @csrf
            <div class="corpor mt-4">
                <div class="row col-xl-12 mx-auto dados">
                    <div>
                        <fieldset class="CB">
                            <legend>O que você deseja? </legend>
                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}} ">
                            <div>
                                <input type="radio" id="notebook" name="nome" value="notebook">
                                <label for="notebook">Notebooks</label>
                            </div>
                            <div>
                                <input type="radio" id="desktop" name="nome" value="desktop">
                                <label for="desktop">Desktop</label>
                            </div>
                            <div>
                                <input type="radio" id="monitor" name="nome" value="monitor">
                                <label for="monitor">Monitor</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="pt-2">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" id="quantidade" class="form-goup form-control" class="qnt" name="qnt">
                    </div>
                    <div class="enviar mb-2">
                        <button type="submit" class="col-12 col-md-6 btn btn-success adicionar_prod mt-1">Enviar</button>
                    </div>
                </div>

        </form>
    </section>

@endsection