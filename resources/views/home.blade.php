@extends('layouts.custom-2')

@section('content')
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
                            <div>
                                <h1><strong>{{ Auth::user()->name }}    , Parabéns! <br> Você economizou R$ X <br> Neste Mês! </strong></h1>
                            </div>
                            <!--Imagem para colocar ao lado-->
                            <div style=" margin-left: 100px;">
                                <img src="/img/money.png" alt="" style="padding : 2px; height: 400px; width:550px;">
                            </div>
                        </div>
                        <div >
                            <button class="btn btn-warning btn-lg" style="margin-left: 150px; margin-top:-300px; padding-inline:30px; padding-top:10px;padding-bottom:10px;">Ver detalhes</button>
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
            @if (\App\Http\Controllers\MoneyageController::count() > 0 && \App\Models\Table::where('id', '=',$ids['id'])->get('user_id')[0]['user_id'] == Auth::id())
                <div style="padding-top:20px; margin:30px; background-color:#f8f9fa; border-radius:20px" class="d-flex">
                    <table class="table table-light d-flex flex-row bd-highlight">
                        <tbody>
                            
                                <tr>
                                    <th scope="row" >{{(\App\Models\Table::where('id', '=',$ids['id'])->get('name')[0]['name'])}}</th> 
                                </tr>
                            
                        </tbody>
                    </table>
                    <table class="table table-light d-flex flex-row-reverse bd-highlight">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="http://localhost:8000/sites/show_table" class="btn btn-success">Exibir</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                </td>
                                <td >
                                    <a href="{{route('delete_table', $ids)}}" type="submit" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        @endforeach
        <!--@//i//f//(\App\Http\Controllers\MoneyageController://:count//() < 3)-->
                <div>
                    <a href="{{route('create_table')}}" class="btn btn-success" style="margin-left: 30px; margin-top:10px; padding-inline:30px; padding-top:10px;padding-bottom:10px;">Criar</a>
                </div>
        <!-- vídeos -->
        <div class="d-flex justify-content-center" style="padding-top: 50px;">
            <h1 style="color:white;"><strong>VÍDEOS<strong></h1>
        </div>
        <div class="d-flex" style="padding-top: 50px;">
            <div style="margin: 50px;">
                <h3 style="color: white;">Texto falando sobre playlist de vídeos que podem ajudar os usuários <br> a iniciar no mundo dos investimentos com esses vídeos da <br> Nathalia Arcuri do canal Me Poupe, do Thiago Nigro do canal Primo Rico <br> e Breno Perrucho do canal Jóvens de Negócios e blablabla... <br> Elaborar o texto!</h3>
            </div>
            <div class="d-flex flex-row-reverse bd-highlight">
                <div style="margin:40px; border-style: solid; border-width: 10px; border-color: #66ff99;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL5vSn8ej1b0tFJPaD72cHxR6hDGgmGQTl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex flex-row-reverse bd-highlight">
                <div style="margin:40px; border-style: solid; border-width: 10px; border-color: #66ff99;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLHvsswG2Q9jLC-wOgKP2VtnvEJGBq2q6D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex flex-row-reverse bd-highlight">
                <div style="margin:40px; border-style: solid; border-width: 10px; border-color: #66ff99;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLAKfMr7XPL79g3Um8RD_Cj_J7IpMhIAkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>    
        </div>

@endsection
