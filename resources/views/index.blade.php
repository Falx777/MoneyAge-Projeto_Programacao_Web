@extends('layouts.custom')



@section('content')
<!--texto da imagem inicial-->
<div>
  <h3 style="color: white; position: absolute; margin-top: 150px; margin-left: 80px"><cite title="BioRhyme"> Voce esta cansado de ficar fazendo contas e contas? <br> Com medo de passar do seu orçamento? <br> Agora com o moneyage seus problemas acabaram! <br> Nós lhe ajudamos a gerenciar tantos seus ganhos quanto divídas. <br> Venha ver como é fácil e rápido!!</cite></h3>
  <!--imagem inicial TAX-->
  <img class="card-img-top" src="/img/tax.jpeg" alt="Imagem de capa do card" style="margin-left : 35%; width: 70%; padding : 10px;">
</div>

<section class="loginbody"></section>
<!--título das equipes-->
<div id="space-team">
  <h2 id="team"><strong><cite title="BioRhyme">Quem Somos?</cite></strong></h2>    
</div>
<!--Cards dos integrantes do grupo-->
<div class="card-deck d-flex justify-content-center">
  <!--Lucas Israel-->
  <div class="card" style="margin-right: 30px; margin-left: 30px; margin-top: 30px;">
    <img class="card-img-top" src="/img/lucas.jpg" alt="Imagem de capa do card" style="border-radius: 100%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Lucas Israel Alves</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Desenvolvedor Front End</strong></h6>
      <p class="card-text d-flex justify-content-center">Responsável pela programação e criação da inteface de utilização do site.</p>
    </div>
  </div>
  <!--Davi Ferreira-->
  <div class="card" style="margin-right: 30px; margin-top: 30px; border-radius: 10px;">
    <img class="card-img-top" src="/img/dfsm.jpeg" alt="Imagem de capa do card" style="border-radius: 50%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Davi Ferreira</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Tester de integridade e responsabilidade</strong></h6>
      <p class="card-text d-flex justify-content-center">Responsável pela análise de interface web responsiva/mobile e feedback.</p>
    </div>
  </div>
  <!--Luiz Filipe-->
  <div class="card" style="margin-right: 30px; margin-top: 30px; border-radius: 10px;">
    <img class="card-img-top" src="/img/filipe.jpeg" alt="Imagem de capa do card" style="border-radius: 50%; padding : 10px;">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">Luiz Filipe Xavier</h5>
      <h6 class="card-text d-flex justify-content-center"><strong>Desenvolvedor Back End</strong> </h6>
      <p class="card-text d-flex justify-content-center">Responsável pela programação infraestrutural do site e seus bancos de dados.</p>
    </div>
  </div>
  <!--melque zedeque-->
  <div class="card" style="margin-left: 30px; margin-top: 30px; border-radius: 10px;">
      <img class="card-img-top" src="/img/dfsm.jpeg" alt="Imagem de capa do card" style="border-radius: 100%; padding : 10px;">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Melque Zedeque</h5>
        <h6 class="card-text d-flex justify-content-center"><strong>Desenvolvedor Front End</strong> </h6>
        <p class="card-text d-flex justify-content-center">Responsável pela programação e criação da inteface de utilização do site.</p>
      </div>
    </div>
  </div> 
</div>
<!--Título das reviews-->
<div id="space-team" style="margin-bottom:50px;">
  <h2 id="tool" class="team  d-flex justify-content-center"><strong><cite title="BioRhyme">Reviews</cite></strong></h2>
</div>
<!--Tabela com as reviews-->
<div id="tools">
  <table class="table">
    <thead >
      <!--Títulos das colunas-->
      <tr>
        <th style="border-bottom:none; color: white;" scope="col">Usuário</th>
        <th style="border-bottom:none; color:white;" scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <!--josé-->
      <tr>
        <td style="border-bottom:none"><img src="/img/avatar1.jpg" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>José</p></td>
        <td style="border-bottom:none" class="description">Muito bom o site, me ajudou bastante e estou muito grato aos desenvolvedores dele</td>
        <td style="border-bottom:none" class="description2">
          </td>
      </tr>
      <!--maria-->
      <tr>
        <td style="border-bottom:none"><img src="/img/avatarm1.jpg" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>Maria</p></td>
        <td style="border-bottom:none" class="description">Melhor site 10/10</td>
        <td style="border-bottom:none" class="description2">
        </td>
      </tr>
      <!--cecília-->
      <tr>
        <td style="border-bottom:none"><img src="/img/avatarm2.jpg" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>Cecília</p></td>
        <td style="border-bottom:none" class="description">se pudesse conectar a conta bancaria seria top, mas fora isso o site é um dos mais uteis que já vi</td>
        <td style="border-bottom:none" class="description2">
          </td>
      </tr>
      </tr>  
    </tbody>
  </table>
</div>

<!--empresa-->
<div id="about" class="title">
  <!--título da empresa-->
  <div id="space-team ">
    <h2 class="team " style="text-black; margin-top: 100px;"><strong><cite title="BioRhyme">    A MONEYAGE</cite></strong></h2>    
  </div>
  <div class="d-flex flex-row justify-content-center bg-#77a5c6" style="background-color:#FFFFFF;">
    <div style="margin: 100px;">
      <img src="/img/logo.png" alt="" style="padding : 2px; height: 350px; width:550px;">
    </div>
    <div style="margin: 100px;">
      <div style="padding-bottom: 50px;">
        <h3 ><strong>VISÃO</strong></h3>
        <p style="color: black;">Almejamos que os usuarios possam melhorar suas finanças de uma forma boa e sem muita burocracia</p>
      </div>
      <div style="padding-bottom: 50px;">
        <h3><strong>MISSÃO</strong></h3>
        <p style="color: black;">Nos tornamosos o melhor site de ajuda financeira do brasil e ajudar as pessoas que não sabem como usar seu dinehiro de maneira mais eficiente.Lembrando sempre que não somos um site de investimento..</p>
      </div>
      <div>
        <h3><strong>VALORES</strong></h3>
        <p style="color: black;">Os clientes são tratados como companheiros, para que possa haver confiança entre eles e a gente.</p>
      </div>  
    </div>
</div>
</div>
@endsection