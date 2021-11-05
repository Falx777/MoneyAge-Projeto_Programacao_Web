@extends('layouts.custom') 

@section('content') 

<!--Slides: 4--> 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <!--Slide Bootstrap-->
    <div class="carousel-item">
      <a href="https://getbootstrap.com/" target="_blank">
       <img class="d-block w-100" src="/img/bootstrap.png" alt="First" style="height: 650px;" >
      </a>
      <div class="carousel-caption d-none d-md-block">
          <P class="text-light bg-dark" style="border-radius: 8px; opacity: 50%;">O bootstrap é um framework para aplicações web e sites mobile-first se adaptando a tela do dispositivo que o usuário está usando.</p>
      </div>
    </div>
    <!--Slide JQuerry-->
    <div class="carousel-item active">
      <a href="https://jquery.com/" target="_blank">
        <img class="d-block w-100" src="/img/jquerry.png" alt="Second" style="height: 650px;">
      </a>
      <div class="carousel-caption d-none d-md-block">
          <P class="text-light bg-dark" style="border-radius: 8px; opacity: 50%;">O JQuerry é um framework que possui uma biblioteca javascript que é rápida e de fácil utilização.</p>
      </div>
    </div>
    <!--Slide GitHub-->
    <div class="carousel-item">
      <a href="https://github.com/" target="_blank">
        <img class="d-block w-100" src="/img/github.png" alt="third" style="height: 650px;">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <P class="text-light bg-dark" style="border-radius: 8px; opacity: 50%;">O GitHub é uma plataforma onde se pode guardar códigos-fonte e arquivos de controle usando o git; muito parecida com uma rede social, só que para programadores.</p>
      </div>
    </div>
    <!--Slide Visual Studio-->
    <div class="carousel-item">
      <a href="https://visualstudio.microsoft.com/" target="_blank">
        <img class="d-block w-100" src="/img/visual-studio.png" alt="fourth" style="height: 650px;">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <P class="text-light bg-dark" style="border-radius: 8px; opacity: 50%;" class="slide-text">O Visual Studio é  editor de código-fonte onde possui um suporte para depuração e refatoração de códigos, servindo para edição de código html e linguagens relacionadas.</p>
      </div>
    </div>
  </div>
  <!--Os botões para a mudança de slides está presente, mas foi retirado o ícone-->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  </a>
</div>
<!--Espaço entre o slide e os cards de integrantes-->
<div id="space-slide-card" style="height: 621px;">  </div>
<!--título das equipes-->
<div id="space-team">
  <h2 id="team"><strong>EQUIPE</strong></h2>    
</div>
<!--Cards dos integrantes do grupo-->
<div class="card-deck d-flex justify-content-center">
  <!--Lucas Israel-->
  <div class="card" style="margin-right: 100px; margin-left: 30px; margin-top: 30px; border-radius: 10px;">
    <img class="card-img-top" src="/img/lias.jpg" alt="Imagem de capa do card" style="border-radius: 100%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Lucas Israel Alves</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Tester / Desenvolvedor Front End</strong></h6>
      <p class="card-text d-flex justify-content-center">Responsável pela consultoria e análise de interface web.</p>
    </div>
  </div>
  <!--Davi Ferreira-->
  <div class="card" style="margin-left: 30px; margin-right: 30px; margin-top: 30px; border-radius: 10px;">
    <img class="card-img-top" src="/img/dfsm.jpeg" alt="Imagem de capa do card" style="border-radius: 100%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Davi Ferreira</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Tester de responsividade / desenvolvedor front end</strong></h6>
      <p class="card-text d-flex justify-content-center">Responsável pela análise de interface web responsiva/mobile e feedback.</p>
    </div>
  </div>
  <!--Luiz Filipe-->
  <div class="card" style="margin-left: 100px; margin-right: 30px; margin-top: 30px; border-radius: 10px;">
    <img class="card-img-top" src="/img/lfax.jpg" alt="Imagem de capa do card" style="border-radius: 100%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Luiz Filipe Xavier</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Desenvolvedor Front End / Design gráfico</strong> </h6>
      <p class="card-text d-flex justify-content-center">Responsável pela programação e criação da inteface de utilização do site.</p>
    </div>
  </div>
</div>
@endsection
