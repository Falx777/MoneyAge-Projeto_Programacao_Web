@extends('layouts.custom-2')  

@section('content')
<div>
    <h1></h1>
</div>

<div class="container" style="margin-top: 80px;margin-bottom:200px;">
    
    <div class="d-flex justify-content-center">
        <h3><strong>Análise de Preço</strong></h3>
    </div>
    @if (\App\Http\Controllers\MoneyageController::get_compare() == FALSE)
        <form action="{{route('compare_values')}}" method="post">
        @csrf
            <div class="d-flex container" style="margin-top: 100px;">
                <div>
                    <div><h4>NOME:</h4></div>
                    <div class="align-self-start d-flex" style="margin-bottom:25px;">
                        <input type="text" class="form-control" placeholder="celular" name="name" aria-describedby="basic-addon2" restricted>
                    </div>
                    <div><h4>VALOR:</h4></div>
                    <div class="align-self-start d-flex">
                        <input type="number" class="form-control" placeholder="00,00" name="value" aria-describedby="basic-addon2" restricted step="0.01">
                        <input class="btn btn-success" type="submit" value="ANALISAR"></input>
                    </div>
                </div>
                <div style="padding-left: 200px"></div>
        </form>
        
    @endif
    </div>
            @if (\App\Http\Controllers\MoneyageController::get_compare() == TRUE)
                <div >
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr class="table-light">
                        <th scope="col-2">Viável</th>
                        <th scope="col-3">Inviável</th>
                        </tr>
                    </thead>
                        <tbody>
                            <th scope="row">
                            @foreach ($possibility as $psi)
                            
                                @if ($psi != NULL)   
                                    <tr >
                                    @if ($psi[0] == TRUE)
                                        <td style="color:white;" class="bg-success">
                                            <h4><strong>Tabela: </strong> <strong>{{$psi[1]}}</strong> <br> <strong>Parcelas: </strong> {{$psi[2]}}</h4>
                                            @if ((\App\Models\Values::where('id','=',$psi[5])->get('item11'))[0]['item11'] == NULL || (\App\Models\Values::where('id','=',$psi[5])->get('item12'))[0]['item12'] == NULL || (\App\Models\Values::where('id','=',$psi[5])->get('item13'))[0]['item13'] == NULL) 
                                                <form action="{{route('add_to_table', [$psi[5], $psi[3], $psi[4]])}}" method="get">
                                                    @csrf
                                                    <input class="btn btn-warning" type="submit" value="Adicionar à Tabela"></input>
                                                </form>
                                            @endif
                                        </td>
                                    @elseif ($psi[0] == FALSE)
                                        <td></td>
                                        <td style="color:white;" class="bg-danger">
                                            <h4><strong>Tabela: </strong> <strong>{{$psi[1]}}</strong> <br> <strong>Parcelas: </strong> 0</h4>
                                        </td>
                                    @endif 
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                </table>
                
                </div>
                <a href="http://localhost:8000/sites/compare" class="btn btn-primary d-flex justify-content-center" style="margin-top:40 px;">VER OUTRO VALOR</a>
            @endif
        

    
    
</div>
@stop