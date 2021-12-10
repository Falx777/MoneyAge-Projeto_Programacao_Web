@extends('layouts.custom-2')

@section('content')  

<div style="margin-top: 100px">
    <div class="container">
        <div>
            <div class="col-md-8">
                <div >
                    <div class="card-header"><h4>Minhas informações</h4></div>

                    <div class="card-body">
                        
                            @csrf
                            <div style="margin-top: 20px;" class="d-flex">
                                <label for="wage" class="col-md-4 col-form-label text-md-right" style="margin-right: -180px;">Nome</label>
                        
                                <div class="col-md-6" style="margin-right: -200px;">
                                    <input id="wage" type="text" class="form-control" name="name" placeholder="{{ Auth::user()->name }}" disabled>
                                </div>
                        
                               <!-- <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div> -->
                            </div>

                            <div class="d-flex" style="margin-top: 20px;">
                                <label for="date" class="col-md-4 col-form-label text-md-right" style="margin-right: -180px;">Data</label>

                                <div class="col-md-6" style="margin-right: -200px;">
                                    <input id="date" type="text" class="form-control" name="date" placeholder="{{ \App\Http\Controllers\MoneyageController::date_format() }}" disabled>
                                </div>
                                
                                <!--<div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>-->

                            </div>

                            <div class="d-flex" style="margin-top: 20px;">
                                <label for="gender" class="col-md-4 col-form-label text-md-right" style="margin-right: -180px;">Gênero</label>

                                <div class="col-md-6" style="margin-right: -200px;">
                                    <input id="gender" type="text" class="form-control" name="gender" placeholder="{{ Auth::user()->gender }}" disabled>
                                </div>

                                <!--<div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>-->

                            </div>

                            <div style="margin-top: 20px;">
                                <form action="{{route('update_wage')}}" method="post"  class="d-flex">
                                    @csrf
                                    <label for="wage" class="col-md-4 col-form-label text-md-right"  style="margin-right: -180px;">Renda</label>

                                    <div class="col-md-6" >
                                        <input id="wage" type="number" class="form-control" name="wage" value="{{ Auth::user()->wage}}" step="0.01">
                                    </div>
                                    <div>
                                        <input class="btn btn-primary" style="margin-left: 10px;" type="submit" value="EDITAR"></input>
                                    </div>
                                </form>
                                <!--<div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>-->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div  style="padding: 100px">
    
    <form method="post" action="{{ route('post_opinion') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title"><h3>Dê a sua opinião sobre a moneyage:</h1></label>
        @if (Auth::user()->opinion == NULL)
                <textarea class="form-control" id="text" name="opinion"></textarea>
            <button class="btn btn-secondary" type="submit">Enviar</button>
        @else
                <textarea readonly class="form-control" id="text" name="opinion" placeholder="{{ Auth::user()->opinion }}"></textarea>
        @endif
        </div>
        
    </form>
    
    <div class="btn-group-vertical" role="group" aria-label="Basic mixed styles example" style="margin:25px;">
        <form action="{{route('delete_account', Auth::id())}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <input type="submit" class="btn btn-danger" onclick="return deleteTable();" value="EXCLUIR CONTA"></input>

        </form> 
    </div>  
    
</div>

<script>
    function deleteTable() {
        if(!confirm("Você realmente deseja deletar essa tabela?"))
        event.preventDefault();
    }
</script>
@stop