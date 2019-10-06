@extends('layouts.master')
@section('body')

      
    <!-- ROW 1 -->
    <div class="row col-md-8 mx-auto">
        <img class="img-fluid" src="images/shutterstock_259403918.jpg" alt="" width="100%">
    </div>

    <!-- ROW 2 -->
    <div class="row col-xl-8 mx-auto d-block">
        <h3 class="text-center">Oque é ser um Instituição participante</h3>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ratione aliquid libero.
            Et repellendus sit saepe nulla, doloribus cupiditate vitae explicabo repudiandae delectus ex ratione nam
            recusandae maxime voluptatum nisi?</p>
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

    <div class="row col-xl-2 mx-auto d-block" style="text-align: center;">
        <input class="btn btn-primary" type="button" value="Participe" id="participe">
    </div>

    <div class="row col-xl-8 mx-auto" id="cadastro_doador" style="text-align: center;">
        <form action="/criar/usuario" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="tipo" value="3">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome"
                    placeholder="nome" name="nome" value="{{old('nome')}}">

                    @error('nome')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="email" name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" value="{{old('senha')}}">
                    @error('senha')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Confirmar senha" name="confirm-senha">
                    @error('confirm-senha')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Cidade</label>
                        <input type="text" class="form-control" id="validationTooltip03" placeholder="Cidade" name="cidade" value="{{old('cidade')}}">
                        @error('cidade')
                        <span class="text-danger">{{$message}} </span>
                        @enderror    
                    <div class="invalid-tooltip">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Estado</label>
                        <input type="text" class="form-control" id="validationTooltip04" placeholder="Estado" name="estado" value="{{old('estado')}}">
                        <div class="invalid-tooltip">
                        </div>
                        @error('estado')
                        <span class="text-danger">{{$message}} </span>
                        @enderror            
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">CEP</label>
                        <input type="text" class="form-control" id="validationTooltip05" placeholder="CEP" name="cep" value="{{old('cep')}}">
                        <div class="invalid-tooltip">
                        </div>
                        @error('cep')
                        <span class="text-danger">{{$message}} </span>
                        @enderror           
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="validationTooltip05">CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{old('cpf')}}">
                        @error('cpf')
                        <span class="text-danger">{{$message}} </span>
                        @enderror    
                    </div>
                    <div class="col">
                        <label for="validationTooltip05">Telefone</label>
                        <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="{{old('telefone')}}">
                        @error('telefone')
                        <span class="text-danger">{{$message}} </span>
                        @enderror   
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto"
                    placeholder="foto" name="foto">
                </div>
                <br>
                <button type="submit" class="btn btn-primary col-xl-8">Submit</button>
            </form>
    </div>


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