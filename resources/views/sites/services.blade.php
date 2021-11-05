@extends('layouts.custom') 

@section('content') 
<!--Serviços-->
<div id="services" class="title">
  <!--título dos serviços-->
  <div id="space-team">
    <h2 id="service" class="team" style="margin-top: -10px;"><strong>SERVIÇOS</strong></h2>    
  </div>

  <div class="d-flex justify-content-center" role="tablist" style="padding-top: 30px; margin-left: 30px;">
    <ul class="nav nav-tabs" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="vend-ic" data-toggle="pill" href="#vend" role="tab" aria-selected="true"><strong>Desenvolvimento de Site</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ass-pc-ic" data-toggle="pill" href="#ass-pc" role="tab" aria-selected="false"><strong>Desenvolvimento de Programas</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ass-cel-ic" data-toggle="pill" href="#ass-cel" role="tab" aria-selected="false"><strong>Desenvolvimento de Jogos</strong></a>
      </li>
    </ul>
  </div>
  <div class="d-flex justify-content-center">
    <div class="container tab-content" id="serv-cont" style="margin-top: 150px;">
      <div class="container tab-pane show active " id="vend" role="tabpanel" aria-labelledby="vend-ic"><strong>Proporcionamos a você um site com todas as funções que você espera e com uma estética magnífica.</strong></div>
      <div class="container tab-pane" id="ass-pc" role="tabpanel" aria-labelledby="ass-pc-ic"><strong>Fazemos aplicativos que involvam qualquer coisa, seja ele de venda, informação, entre outros, sempre funcional e esteticamente excelente.</strong></div>
      <div class="container tab-pane" id="ass-cel" role="tabpanel" aria-labelledby="ass-cel-ic"><strong>Criamos jogos simples mas que pode ser uma ótima experiência de jogo com ótimas histórias, pensando na experiência e não não gráficos em si.</strong></div>
    </div>
  </div>
</div>
@endsection

