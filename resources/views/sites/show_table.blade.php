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
                @if ((App\Models\Table::where('id','=',$id)->get('item' . strval($i)))[0]['item' . strval($i)] != NULL)
                    <tr>
                    <th scope="row">
                        <input disabled type="text" class="form-control" name="name1"placeholder="{{ (App\Models\Table::where('id','=',$id)->get('item' . strval($i)))[0]['item' . strval($i)] }}"  >
                    </th>
                    <td>
                        <input disabled type="number" class="form-control"name="value1" placeholder="{{ (App\Models\Values::where('id','=',$id)->get('item'. strval($i)))[0]['item' . strval($i)] }}" required >
                    </td>
                    </tr>
                @endif
            @endfor
            <div style="margin-right:10px;margin-top: 5px;">
                <h5><strong>TOTAL: {{ \App\Http\Controllers\MoneyageController::sum($id)}} </strong></h5>
            </div>
        </tbody>
    </div>
</div>

@stop