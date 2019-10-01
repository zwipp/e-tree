@extends('layouts.master')
@section('body')

    <section id="cadastro_produtos" class="container-fluid pb-3">

        <form class="col-9 mx-auto py-2" action="">
            <div class="corpor mt-4">
                <div class="row col-xl-12 mx-auto dados">
                    <div>
                        <fieldset class="CB">
                            <legend>O que você deseja? </legend>
                            <div>
                                <input type="radio" id="notebook" name="nome" valor="notebooks">
                                <label for="coding">Notebooks</label>
                            </div>
                            <div>
                                <input type="radio" id="desktop" name="nome" valor="desktop">
                                <label for="music">Desktop</label>
                            </div>
                            <div>
                                <input type="radio" id="monitor" name="nome" valor="monitors">
                                <label for="music">Monitor</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="pt-2">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" id="quantidade" class="form-goup form-control">
                    </div>
                    <div class="enviar mb-2">
                        <button type="button" class="btn btn-success adicionar_prod">Enviar</button>
                    </div>
                </div>

        </form>
    </section>

@endsection