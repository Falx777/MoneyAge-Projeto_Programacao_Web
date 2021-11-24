<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luiz Filipe, Davi Ferreira e Lucas Israel">
    <title>Atividade Hamburguer</title>
    <!--Import css Bootstrap-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
    <!--Import style.css-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!--Jquerry-->
     <script src="{{('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <!--Popper-->
     <script src="{{('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <!--Bootstrap js-->
     <script src="{{('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!--Barra de navegação-->
  <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark p-2" class="d-flex justify-content-center">
    <a class="navbar-brand" href="#">DEV++</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{('http://127.0.0.1:8000/sites/index')}}" class="nav-link">Início</a>
        </li>
        <!--
        <li class="nav-item">
          <a href="#team" class="nav-link">Equipe</a>
          
      </li>
        -->
      <li class="nav-item">
        <a href="{{('http://127.0.0.1:8000/sites/services')}}" class="nav-link">Serviços</a>
    </li>
    <li class="nav-item">
      <a href="{{('http://127.0.0.1:8000/sites/tools')}}" class="nav-link">Ferramentas</a>
  </li>
  <li class="nav-item">
    <a href="{{('http://127.0.0.1:8000/sites/about')}}" class="nav-link">Sobre</a>
  </li>
  <!--
  <li class="nav-item">
    <a href="#ftr" class="nav-link">Contato</a>
  </li>
  -->
    </div>
  </nav>  
  
  @yield('content')

</body>
</html>