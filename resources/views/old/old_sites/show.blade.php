@extends('layouts.tabletest') 
 
@section('title', 'Editar') 

@section('content')
<div  style="padding: 100px">
    <form action="">
        @foreach ($post as $post)
        <div class= "d-flex ">
            <div class="form-group">
                <label for="title">Título</label>
                <!--Para editar, deve-se utilizar a tag input sem o disable-->
                <!--<input type="text" class="form-control" id="title" value="{{ $post->Title}}">-->
                
                <textarea readonly class="form-control" id="title" placeholder="{{ $post->Title}}"></textarea>
                
            </div>
            <div></div>
        </div>
        <div class="form-group">
            <label for="title">Texto</label>
            <textarea readonly class="form-control" id="text" placeholder="{{ $post->Text}}"></textarea>
        </div>
        @endforeach
    </form>

</div>

@stop