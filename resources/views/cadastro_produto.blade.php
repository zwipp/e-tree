@extends('layouts.master')
@section('body')

    <section id="cadastro_produtos" class="container-fluid pb-3">

        <form class="col-9 mx-auto py-2" action="">
            <div class="corpor mt-4">
                <div class="row col-xl-6 mx-auto dados">
                    <div>
                        <fieldset class="CB">
                            <legend>O que você irá doar? </legend>
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
                    <div class="pt-3">
                        <fieldset class="CB">
                            <legend> Estado do produto </legend>
                            <div>
                                <input type="radio" id="Novo" name="estado" valor="Novo">
                                <label for="coding"> Novo </label>
                            </div>
                            <div>
                                <input type="radio" id="bom" name="estado" valor="bom">
                                <label for="music"> Em bom estado </label>
                            </div>
                            <div>
                                <input type="radio" id="analise" name="estado" valor="analise">
                                <label for="music"> Precisa de uma análise </label>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="row col-xl-6 mx-auto">
                    <div class="campo-imagem">
                        <img src=" {{url('images/suaimg.jpg')}} " alt="" class="img-produto">
                    </div>
                    <div class="input-group mb-3 colocar-img">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="enviar mb-2">
                <button type="button" class="btn btn-success adicionar_prod">Enviar</button>
            </div>
        </form>
    </section>

@endsection