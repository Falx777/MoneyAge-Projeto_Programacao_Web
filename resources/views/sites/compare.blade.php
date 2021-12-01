@extends('layouts.custom-2')  

@section('content')
<div>
    <h1></h1>
</div>

<div class="container" style="margin-top: 80px;">
    
    <div class="d-flex justify-content-center">
        <h3><strong>Análise de Preço</strong></h3>
    </div>
    <form action="{{route('compare_values')}}" method="post">
    @csrf
        <div class="d-flex container" style="margin-top: 100px;">
            <div><h4>VALOR:</h4></div>
            <div class="align-self-start d-flex">
                <input type="text" class="form-control" placeholder="00,00" name="value" aria-describedby="basic-addon2" required>
                <input class="btn btn-success" type="submit" value="ANALISAR"></input>
            </div>
            <div style="padding-left: 200px"></div>
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
            @endif
        </div>

    
    </form>
</div>
@stop