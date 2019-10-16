<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Css do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- css icones     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- Css para poder sobrescrever padrões que já venham no Bootstrap -->
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <!-- NAVBAR -->
    <header class="container-fluid">
        <!-- LOGO -->
        <div class="row">
            <div class="col-sm-12 col-md-2 text-center">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img id="logo" src=" {{url('/images/logo_etree_v02.png')}} " alt="logo etree">
                </a>
            </div>
            <nav class="col-sm-12 col-md-10 d-flex">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/doador')}}">Doadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/instituicoes')}}">Instituições</a>
                    </li>

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cadastro/doador')}}">Cadastro doador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cadastro/instituicao')}}">Cadastro Instituição</a>
                    </li>
                    @endguest
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login/mostrar')}}">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        @if(Auth::user()->tipo == 2)
                        <a href="{{url('/perfil/doador/' . Auth::user()->id)}}" class="nav-link">Perfil</a>
                        @endif

                        @if(Auth::user()->tipo == 3)
                        <a href="{{url('/perfil/receptor/' . Auth::user()->id)}}" class="nav-link">Perfil</a>
                        @endif

                        @if(Auth::user()->tipo == 1)
                        <a href="{{url('/adm')}}" class="nav-link">Dashboard</a>
                        @endif

                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-outline-success">Sair</button>
                        </form>
                        
                    </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>

    @yield('body')

    <!-- FOOTER -->
    <footer class="pt-2">
        <div class="container">
            <div class="row text-center pt-5" id="footer-infos">
                <div class="col-sm-12 col-md-4 pt-3 footer-esquerdo">
                    <div class="footer-logo">
                        <img src="{{url('/images/logo_etree_v02.png')}}" alt="">
                        <!-- <img class="rounded-top" src="./images/beneficiarios.jpg" alt=""> -->
                    </div>
                    <div class="links-esquerdo pt-2">
                        <a href="{{url('/')}}">Quem somos</a>
                        <a href="{{url('/doador')}}">Doadores</a>
                        <a href="{{url('/instituicoes')}}">Instituições</a>
                        
                    </div>
                </div>
                <div class="campanhas col-sm-12 col-md-4 pt-3">
                    <h5>Atividades</h5>
                    <div>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem somos</a>
                            </li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pt-3">
                    <h5>Redes Sociais</h5>
                    <div class="text-left" id="botoes">
                        <a class="btn btn-link" href="#" role="button">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-link" href="#" role="button">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-link" href="#" role="button">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-link" href="#" role="button">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="footer-contatos">
                <div class="row">
                    <div class="btn-contatos col-sm-12 col-md-4">
                        <a class="btn btn-link" href="mailto:usuario@ibi.com" role="button">
                            <i class="fa fa-envelope"></i><p>etree@etree.com</p>
                        </a>
                        
                    </div>
                    <div class="btn-contatos col-sm-12 col-md-4">
                        <a class="btn btn-link" href="https://goo.gl/maps/wvnQvG85XESiJdAa7" role="button">
                            <i class="fa fa-map-marker"></i>
                            <p>Nossa Localização</p>
                        </a>
                    </div>

                    <div class="btn-contatos col-sm-12 col-md-4">
                        <a class="btn btn-link" href="#" role="button">
                            <i class="fa fa-phone"></i>
                            <p>(11) 95555-5555</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5" id="copyright">
                <span>Copyright &copy; Todos os direitos reservados.</span>
                <div>
                    <a href="#">About the company</a>
                    <a href="#">Novidades</a>
                    <a href="#">Contato</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous">
        </script>

        
    @yield('script')
    
</body>

</html>