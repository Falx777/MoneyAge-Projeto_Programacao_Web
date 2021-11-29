@extends('layouts.tabletest') 

@section('content') 
<div class="d-flex justify-content-center" style="margin: auto; padding: 100px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Texto</th>
                <th scope="col">Ação</th>
            </tr>
        </thead> 

        @foreach ($posts as $post) 
        <tbody>
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->Title}}</td>
                <td>{{$post->Text}}</td>
                <td class="text-center">
                    <a href="{{route('show_post', $post->id)}}" class="btn btn-secondary">Exibir</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@stop