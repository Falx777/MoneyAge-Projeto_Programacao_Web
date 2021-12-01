@extends('layouts.custom')
 
@section('content')

<div class="card mb-3" style="margin-top: 100px">
  <img class="card-img-top" src="/img/cadastro.jpeg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Junte-se a milhares de pessoas que gerenciam seus recursos de forma eficiente. Faça seu cadastro para ter acesso a todas as funcionalidades.</p>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Data</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" required >
                            </div>
                        </div>

                        
                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gênero</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender" required >
                            </div>
                        </div>

                        
                        <div class="form-group row"  style="margin-top: 20px;">
                            <label for="wage" class="col-md-4 col-form-label text-md-right">Renda</label>

                            <div class="col-md-6">
                                <input id="wage" type="text" class="form-control" name="wage" required >
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-top: 20px;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
