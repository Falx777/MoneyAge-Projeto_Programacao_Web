@extends('layouts.tabletest')

@section('content')

    @foreach ($user3s as $user)     
    <table class="table">
		<thead class="thead-dark">
				<tr>
				<th scope="col">id</th>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">Token</th>
				</tr>
		</thead>
	<tbody>
		<tr>
		<th scope="row">{{$user->id}}</th>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->remember_token}}</td>
		</tr>  
	</tbody>
	@endforeach

@stop
