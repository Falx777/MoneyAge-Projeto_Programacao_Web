@extends('layouts.custom-2')  

@section('content')
<div>
    <div>
        <h1></h1>
    </div>

    <div class="container" style="margin-top: 80px;">
        <div class="container d-flex justify-content-center" style="margin-bottom: 20px; margin:10px;">
            <div style="margin-right:10px;margin-top: 5px;">
                <h5><strong>{{ App\Models\Table::where('id','=',$id)->get('name')[0]['name']}} </strong></h5>
            </div>
        </div>
        <table class="table table-secondary">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 13; $i++)
                <form method="post"  action="{{route('update', [$id])}}">
                    @csrf
                    @method('PUT')
                    <tr>
                    <th scope="row">
                        <input type="text" class="form-control" name="{{'name' . strval($i)}}" value="{{ (App\Models\Table::where('id','=',$id)->get('item' . strval($i)))[0]['item' . strval($i)] }}"  >
                    </th>
                    <td class="d-flex">
                            <input type="number" class="form-control" name="{{'item' . strval($i)}}" value="{{ (App\Models\Values::where('id','=',$id)->get('item'. strval($i)))[0]['item' . strval($i)] }}" step="0.01">
                            <input class="btn btn-success" type="submit" value="Enviar"></input>
                    </td>
                    </tr>
                </form>
            @endfor
            <div style="margin-right:10px;margin-top: 5px;">
                <h5><strong>TOTAL: {{ \App\Http\Controllers\MoneyageController::sum($id)}} </strong></h5>
            </div>
        </tbody>
    </div>
</div>

@stop