@extends('layouts.custom')

@section('content')
<div class="d-flex justify-content-center container-sm" style="margin:100px;">
    <h1 style="color:white; border-radius:10px; padding:10px;"><strong>ACESSO NEGADO!</strong></h1>
</div>
<div class="d-flex justify-content-center" style="margin:100px;background-color:white">
    <div class="d-flex justify-content-center container"><a href="http://127.0.0.1:8000/sites/login">Tentar Novamente</a></div>
    <div class="d-flex justify-content-center container"><a href="http://127.0.0.1:8000/sites/index">Página Inicial</a></div>
</div>
@endsection