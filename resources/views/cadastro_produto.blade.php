@extends('layouts.master')
@section('body')

    <section id="cadastro_produtos" class="container-fluid pb-3">

        <form class="col-9 mx-auto py-2" action="/criar/produto" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="corpor mt-4">
                <div class="row col-xl-6 mx-auto dados">
                    <div>
                        <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                        <fieldset class="CB">
                            <legend>O que você irá doar? </legend>
                            <div>
                                <input type="radio" id="notebook" name="nome" value="notebook">
                                <label for="notebook" >Notebooks</label>
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
                        @error('nome')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="pt-2">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" id="quantidade" class="form-goup form-control" name="qnt">
                        @error('qnt')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="pt-3">
                        <fieldset class="CB">
                            <legend> Estado do produto </legend>
                            <div>
                                <input type="radio" id="Novo" name="estado" value="novo">
                                <label for="Novo"> Novo </label>
                            </div>
                            <div>
                                <input type="radio" id="bom" name="estado" value="bom">
                                <label for="bom"> Em bom estado </label>
                            </div>
                            <div>
                                <input type="radio" id="analise" name="estado" value="analise">
                                <label for="analise"> Precisa de uma análise </label>
                            </div>
                        </fieldset>
                        @error('estado')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>

                <div class="row col-xl-6 mx-auto">
                    <div class="campo-imagem">
                        <img src=" {{url('images/suaimg.jpg')}} " alt="" class="img-produto">
                    </div>
                    <div class="input-group colocar-img">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01" name="foto">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="enviar mb-2">
                <button type="submit" class="btn btn-success adicionar_prod col-5">Enviar</button>
            </div>
        </form>
    </section>

@endsection