@extends('layouts.custom') 

@section('content') 
<!--Sobre a empresa-->
<div id="about" class="title">
  <!--título da empresa-->
  <div id="space-team">
    <h2 class="team" style="margin-top: -10px;"><strong>A DEV++</strong></h2>    
  </div>
  <div class="d-flex flex-row justify-content-center">
    <div style="margin: 100px;">
      <img src="/img/logo.png" alt="" style="padding : 10px;height: 450px; width:450px;">
    </div>
    <div style="margin: 100px;">
      <div style="padding-bottom: 50px;">
        <h3><strong>VISÃO</strong></h3>
        <p>Produzir sites, programas e jogos de boa qualidade para todos os usuários.</p>
      </div>
      <div style="padding-bottom: 50px;">
        <h3><strong>MISSÃO</strong></h3>
        <p>Nos tornamosos melhores desenvolvedores do Nordeste, e ter uma fama na região de Petrolina e Juazeiro como a melhor empresa de programação de apps e sites.</p>
      </div>
      <div>
        <h3><strong>VALORES</strong></h3>
        <p>Os clientes são tratados como companheiros, para que todas as especificações deles se tornem possíveis e bem colocadas.</p>
      </div>  
    </div>
</div>
</div>
<!--rodapé-->
<footer id="ftr" class="navbar navbar-light">
  <div>
    <div class="d-flex flex-row">
      <img src="/img/house.png" alt="" style="padding : 10px;height: 60px; width:60px;">
      <h3 style="padding-top: 20px;">Local</h3>
    </div>
    <p>R. Antônio Santana Filho, número, 780A</p>
    <p>Centro, Petrolina - PE, 56201-499</p>
  </div>
  <div>
    <div class="d-flex flex-row">
      <img src="/img/phone.png" alt="" style="padding : 10px;height: 60px; width:60px;">
      <h3 style="padding-top: 20px;">Contatos</h3>
    </div>
    <p>Telefone: +55 (87) 541673190</p>
    <p>E-mail: devplusplus@gmail.com.br</p>
  </div>
</footer>
@endsection