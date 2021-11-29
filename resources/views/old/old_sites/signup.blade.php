@extends('layouts.custom')

@section('content')
<div style="margin-top: 160px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastro</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('create_user') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Data</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" value="">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Gênero</label>

                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender" value="">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="hint" class="col-md-4 col-form-label text-md-right">Dica da senha</label>

                                <div class="col-md-6">
                                    <input id="hint" type="text" class="form-control" name="hint" value="">
                                </div>
                            </div>
                            <!--
                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="profession" class="col-md-4 col-form-label text-md-right">Profissão</label>

                                <div class="col-md-6">
                                    <input id="profession" type="text" class="form-control" name="profession" value="">
                                </div>
                            </div>
                            -->
                            <div class="form-group row" style="margin-top: 20px;">
                                <label for="wage" class="col-md-4 col-form-label text-md-right">Salário</label>

                                <div class="col-md-6">
                                    <input id="wage" type="text" class="form-control" name="wage" value="">
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-top: 20px;">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 160px"></div>
@endsection
