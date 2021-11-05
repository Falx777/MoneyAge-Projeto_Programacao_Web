@extends('layouts.custom') 

@section('content') 
<!--Título das ferramentas-->
<div id="space-team">
  <h2 id="tool" class="team" style="margin-top: -10px;"><strong>FERRAMENTAS</strong></h2>    
</div>
<!--Tabela com as ferramentas-->
<div id="tools">
  <table class="table">
    <thead>
      <!--Títulos das colunas-->
      <tr>
        <th scope="col">Ferramenta</th>
        <th scope="col">Descrição</th>
        <th scope="col" class="description">Complementos</th>
      </tr>
    </thead>
    <tbody>
      <!--Javascript-->
      <tr>
        <td><img src="/img/JS.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>Javascript</p></td>
        <td class="description">Linguagem de programação utilizada para a criação de sites e afins, sendo de script de alto nível e estruturada.</td>
        <td class="description2">
          <a href="https://www.javascript.com/" class="btn btn-dark"  target="_blank">Saiba Mais</a>
        </td>
      </tr>
      <!--CSS-->
      <tr>
        <td><img src="/img/CSS.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>CSS</p></td>
        <td class="description">Mecanismo para dar estilo mas páginas web, podendo alterar cores, fontes, tamanhos e estruturas.</td>
        <td class="description2">
          <a href="https://www.hostinger.com.br/tutoriais/o-que-e-css-guia-basico-de-css" class="btn btn-light"  target="_blank">Saiba Mais</a>
        </td>
      </tr>
      <!--InkScape-->
      <tr>
        <td><img src="/img/INKSCAPE.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>InkScape</p></td>
        <td class="description">Software livre de criação e edição de imagens vetoriais, possuindo muitos recursos para auxiliar em qualquer situação.</td>
        <td class="description2">
          <a href="https://inkscape.org/pt-br/" class="btn btn-dark"  target="_blank">Saiba Mais</a>
        </td>
      </tr>
      <!--HTML-->
      <tr>
        <td><img src="/img/HTML1.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>HTML</p></td>
        <td class="description">É a linguagem de marcação de hipertexto padrão usada documentos projetados para serem exibidos em um navegador da web. Pode ser auxiliado por tecnologias como CSS e linguagens de script como JavaScript.</td>
        <td class="description2">
          <a href=" https://html.spec.whatwg.org/" class="btn btn-light"  target="_blank">Saiba Mais</a>
        </td>
      </tr>
      <!--One Drive-->
      <tr>
        <td><img src="/img/OND.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>One Drive</p></td>
        <td class="description">É um serviço de armazenamento e de sincronização de arquivos em nuvem. Oferece 5GB de espaço de armazenamento gratuito, que pode ser aumentado de forma separada por planos.</td>
        <td class="description2">
          <a href=" https://onedrive.com/" class="btn btn-dark"  target="_blank">Saiba Mais</a>
        </td>
      </tr>
      <!--Photoshop-->
      <tr>
        <td><img src="/img/PTSH.png" alt="" style="border-radius: 30%; padding : 10px;height: 150px; width:150px;"><p>Photoshop</p></td>
        <td class="description">Trata-se de um editor de gráficos raster. Desde que foi lançado se tornou o software padrão da indústria de arte digital e raster.</td>
        <td class="description2">
          <a href="https://www.adobe.com/products/photoshop.html" class="btn btn-light"  target="_blank">Saiba Mais</a>
        </td>
      </tr>  
    </tbody>
  </table>
</div>
@endsection

