@extends('layouts.custom-2')

@section('content')
{{\App\Http\Controllers\MoneyageController::false_compare()}}
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }
        </script>
<div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>


<div style=" margin: 100px; padding-top: 10px; background-color: white; border-radius: 50px;">
                <div class="d-flex justify-content-flex-start" style=" margin: 30px;">
                    <div class="d-flex flex-column">
                        <div class="d-flex" >
                            <div class="d-flex justify-content-center" style="padding-top: 60px">
                                @if (\App\Http\Controllers\MoneyageController::verify_table() == TRUE && \App\Http\Controllers\MoneyageController::eco()>0)
                                    <h1><strong>{{ Auth::user()->name }}, Parabéns! <br> Você economizou R$ {{\App\Http\Controllers\MoneyageController::eco()}} Neste Mês! </strong></h1>
                                @else
                                    <h1><strong>{{ Auth::user()->name }}, olá! comece agora a melhorar sua vida financeira criando sua primeira tabela </strong></h1>
                                @endif
                            </div>
                            <!--Imagem para colocar ao lado-->
                            <div style=" margin-left: 200px;">
                                <img src="/img/cm2.png" alt="" style="padding : 2px; height: 400px; width:550px;">
                            </div>
                        </div>
                        <div >
                            <!--<button class="btn btn-warning btn-lg" style="margin-left: 150px; margin-top:-300px; padding-inline:30px; padding-top:10px;padding-bottom:10px;">Ver detalhes</button>-->
                        </div>
                    </div>
                </div>
            </div>
        <!--Tabelas-->
        <div class="d-flex justify-content-center">
            <h1 style="color:white;"><strong>TABELA<strong></h1>
        </div>
        <!--1ª tabela-->
        <!--<h1>{//{//\//A//pp\Http\Controllers\MoneyageController://:verify_id_tables//()//}//}</h1>-->
    @foreach (\App\Http\Controllers\MoneyageController::verify_id_tables() as $ids )
        @if ($ids['id'] == Auth::id('id'))
            {{\App\Http\Controllers\MoneyageController::add()}}
        @endif
    @endforeach
        @foreach (\App\Http\Controllers\MoneyageController::verify_id_tables() as $ids )    
            @if ( \App\Models\Table::where('id', '=',$ids['id'])->get('user_id')[0]['user_id'] == Auth::id())
                {{\App\Http\Controllers\MoneyageController::add()}}
                <div style="padding-top:20px; margin:30px; background-color:#f8f9fa; border-radius:20px" class="d-flex">
                    <table class="table table-light d-flex flex-row bd-highlight">
                        <tbody class="d-flex">
                            
                                <tr>
                                    <th scope="row" >{{(\App\Models\Table::where('id', '=',$ids['id'])->get('name')[0]['name'])}}</th> 
                                </tr>
                                <!--<tr>
                                    <th>TOTAL: {{ \App\Http\Controllers\MoneyageController::sum(\App\Models\Values::where('id', '=',$ids['id'])->get('id')[0]['id'])}}</th>
                                </tr>-->
                                <tr>
                                    <th>Saldo: {{ \App\Http\Controllers\MoneyageController::balance(\App\Models\Values::where('id', '=',$ids['id'])->get('id')[0]['id'])}}</th>
                                </tr>
                        </tbody>
                    </table>
                    <table class="table table-light d-flex flex-row-reverse bd-highlight">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="http://localhost:8000/sites/show_table/{{$ids['id']}}" class="btn btn-primary" v-b-tooltip.hover title="ver todos os itens da tabela">Exibir</a>
                                </td>
                                <td>
                                    <a href="http://localhost:8000/sites/edit_table/{{$ids['id']}}" class="btn btn-primary" v-b-tooltip.hover title="edite valores e o nome dos campos"> Editar</a>
                                </td>
                                <td >
                                    <a class="btn btn-danger" onclick="return deleteTable();"  v-b-tooltip.hover title="exclui toda a tabela" href="{{route('delete_table', $ids)}}"><i class="fa fa-trash"></i>DELETAR</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif

        @endforeach
        <!--criar-->    
        @if (\App\Http\Controllers\MoneyageController::count() < 5)
            <div>
                <h3 class="d-flex justify-content-center" style="padding-top: 50px; color: white;" ><strong>CRIE AQUI SUA TABELA</strong></h3>
                <a href="{{route('create_table')}}" class="btn btn-success d-flex justify-content-center" v-b-tooltip.hover title="Crie aqui sua tabela"  style="margin-left:600px;margin-right:600px;margin-top:10px; padding-inline:30px; padding-top:10px;padding-bottom:10px;">Criar</a>
            </div>

        @endif
        <!--Verificar-->
        @if (\App\Http\Controllers\MoneyageController::verify_table() == TRUE)
                <div class="d-flex justify-content-center" style="padding-top: 50px;">
                <h2 style="color:white;"><strong>PARA CONFERIR SE SEU SALDO É SUFICIENTE PARA ALGUMA COMPRA</strong></h2>
            </div>
                <div class="container d-flex justify-content-center" style="margin-top:30px;">
                    <a href="http://localhost:8000/sites/compare" class="btn btn-primary d-flex justify-content-center"  style=" margin-top:10px; padding-inline:30px; padding-top:10px;padding-bottom:10px;">VERIFICAR</a>
                </div>
            </div> 
        @endif
        <!-- vídeos -->
        <div class="d-flex justify-content-center" style="padding-top: 50px;">
            <h1 style="color:white;"><strong>VÍDEOS<strong></h1>
        </div>
<div class="d-flex">
    <div class="container" style="margin-top: 130px; color:white;font-size: 18px;">
        <p>Aqui ao lado disponibilizamos alguns vídeos informativos caso você seja um novato no assunto de economia e investimento.<br> Esses vídeos explicam o básico para como se comportar com dinheiro e um guia de como investir.<br> Os vídeos são da Nathalia Arcuri do canal Me Poupe, do Thiago Nigro do canal Primo Rico e Breno Perrucho do canal Jóvens de Negócios e com eles você aprende de uma forma prática e rápida tudo que você precisa saber para começar no mundo do saving.</p>
    </div>
    <div style="padding-bottom: 150px;margin-top: 60px; margin-right:30px">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel" >
        <!--Slide Bootstrap-->
        <div class="carousel-item">
        <a target="_blank">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/videoseries?list=PL5vSn8ej1b0tFJPaD72cHxR6hDGgmGQTl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        </div>
        <!--Slide JQuerry-->
        <div class="carousel-item active">
        <a  target="_blank">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/videoseries?list=PLHvsswG2Q9jLC-wOgKP2VtnvEJGBq2q6D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        </div>
        <!--Slide GitHub-->
        <div class="carousel-item">
        <a  target="_blank">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/videoseries?list=PLAKfMr7XPL79g3Um8RD_Cj_J7IpMhIAkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        </div>
    <!--Os botões para a mudança de slides está presente, mas foi retirado o ícone-->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    </a>
    </div>
</div>

</div>
        <script>
            function deleteTable() {
                if(!confirm("Você realmente deseja deletar essa tabela?"))
                event.preventDefault();
            }
        </script>
@endsection