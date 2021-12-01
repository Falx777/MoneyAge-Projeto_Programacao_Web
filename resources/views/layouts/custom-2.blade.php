<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luiz Filipe, Davi Ferreira, Lucas Israel, Melque Zedeque e Raquel ">
    <title>moneyage</title>
    <!--Import css Bootstrap-->
    <link rel="stylesheet" href="/css/bootstrap.min.css"> 
    <!--Import style.css-->
    <link rel="stylesheet" href="/css/style.css">
    <!--Jquerry-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <!--Popper-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <!--Bootstrap js-->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!--Barra de navegação
  <nav id="bn" class="navbar fixed-top navbar-expand-lg bg-green navbar-dark p-2" class="d-flex justify-content-center">
      <a class="navbar-brand" href="{{('http://127.0.0.1:8000/sites/index')}}"><cite title="BioRhyme text-black">MONEYAGE</cite></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <--<div class="collapse navbar-collapse" id="navbarSupportedContent">--
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  href="#ftr" class="nav-link"><cite title="BioRhyme">Contatos</cite></a>
          </li>
        </ul>
        <ul class="navbar-nav justify-content-between">
          <li class="nav-item">
            <a href="{{('http://127.0.0.1:8000/sites/index')}}" class="nav-link"><cite title="BioRhyme">Sobre</cite></a>
          </li>
        </ul>
  </nav>
  -->
  <nav id="bn" class="navbar fixed-top navbar-expand-lg bg-green navbar-dark">
  <div class="container-fluid">
            @if (Route::has('login'))
                    @auth
                        <a class="navbar-brand" href="{{ url('/home') }}">Home</a>   
                    @endauth     
            @endif

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#ftr">Contato</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-link" href="http://localhost:8000/sites/about">
            <img type = "img" src="https://img.icons8.com/external-prettycons-lineal-prettycons/50/000000/external-configuration-web-seo-prettycons-lineal-prettycons.png" width="30" height="30">
          </a>
        </li>
      </ul> 
      <span>
      <li class="nav-link dropdown">
                                <a id="navbarDropdown" class="nav-link active dropdown-toggle" style="color:white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:black;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{\App\Http\Controllers\MoneyageController::drop_i()}}
                                        @csrf
                                    </form>
                                </div>
                            </li>
      </span>
    </div>
  </div>
</nav>
<div>
@yield('content')
</div>

<!--rodapé-->
<footer id="ftr" class="navbar navbar-light bg-#77a5c6" >
  <div>
    <div class="d-flex flex-row">
      <img src="/img/redes2.png" alt="" style="padding : 10px;height: 60px; width:90px;">
      <h3 style="padding-top: 20px; color:white;">redes sociais</h3>
    </div>
    <p style="color: white;">instagram: @moneyage</p>
    <p style="color: white;">facebook: moneyage</p>
    <p style="color: white;">twitter: TheMoneyage</p>
  </div>
  <div>
    <div class="d-flex flex-row">
      <img src="/img/cont.png" alt="" style="padding : 10px;height: 60px; width:60px;">
      <h3 style="padding-top: 20px; color: white">Contatos</h3>
    </div>
    <p style="color: white;">Telefone: +55 (87) 541673190</p>
    <p style="color: white;">E-mail: moneyage123@gmail.com.br</p>
  </div>
</footer>
</body>
</html>