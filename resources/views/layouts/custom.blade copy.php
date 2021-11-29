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
<!--Barra de navegação-->
  <nav id="bn" class="navbar fixed-top navbar-expand-lg bg-green navbar-dark p-2" class="d-flex justify-content-center">
    <a class="navbar-brand" href="{{('http://127.0.0.1:8000/sites/index')}}"><cite title="BioRhyme text-black">MONEYAGE</cite></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{('http://127.0.0.1:8000/sites/index')}}" class="nav-link"><cite title="BioRhyme">Inicio</cite></a>
        </li>
        @if (URL::current() == url('http://127.0.0.1:8000/sites/index') || URL::current() == url('http://localhost:8000/sites/index'))
        <li class="nav-item">
          <a href="#team" class="nav-link"><cite title="BioRhyme">Quem Somos</cite></a>
        </li>
        <li class="nav-item">
          <a href="#tool" class="nav-link"><cite title="BioRhyme">Reviews</cite></a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link"><cite title="BioRhyme">Sobre</cite></a>
        </li>
        <li class="nav-item">
          <a href="#ftr" class="nav-link"><cite title="BioRhyme">Contatos</cite></a>
        </li>
        <li class="nav-item">
          <a href="{{('http://127.0.0.1:8000/sites/signup')}}" class="nav-link"><cite title="BioRhyme">Cadastre-se</cite></a>
        </li>
        <li class="nav-item" >
          <a href="{{('http://127.0.0.1:8000/sites/login')}}" class="nav-link"><cite title="BioRhyme">Login</cite></a>
        </li>
        @endif
    </div>
  </nav>

<div>
@yield('content')
</div>

<!--rodapé-->
<footer id="ftr" class="navbar navbar-light bg-#77a5c6" style="margin-top:50px;">
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