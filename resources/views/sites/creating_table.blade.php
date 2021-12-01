@extends('layouts.custom-2')  

@section('content')
<div>
    <h1></h1>
</div>

<div class="container" style="margin-top: 80px;">
  <form action="{{route('creating_table')}}" method="POST">
    @csrf
    <div class="container d-flex justify-content-center" style="margin-bottom: 20px; margin:10px;">
        <div style="margin-right:10px;margin-top: 5px;">
            <h5><strong>Nome </strong></h5>
        </div>
        <div>
            <input type="text" class="form-control"name="name" placeholder="gastos" required step="0.01" >
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
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name1"placeholder="EX.: comida" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control"name="value1" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name2" placeholder="EX.: água" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value2" placeholder="00.00"  required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name3" placeholder="EX.: energia" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value3" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name4" placeholder="EX.: internet" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value4" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name5" placeholder="EX.: recarga de chip" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value5" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name6" placeholder="EX.: assinatura mensal" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value6" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name7" placeholder="EX.: aluguel" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value7"placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name8" placeholder="EX.: gasolina/transporte" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value8" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name9" placeholder="EX.: festa" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value9" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name10" placeholder="EX.: viagem" required step="0.01" >
        </th>
        <td>
            <input type="number" class="form-control" name="value10" placeholder="00.00" required step="0.01" >
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name11" placeholder="Campo opcional" >
        </th>
        <td>
            <input type="number" class="form-control" name="value11" placeholder="00.00" step="0.01">
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name12" placeholder="Campo opcional" >
        </th>
        <td>
            <input type="number" class="form-control" name="value12" placeholder="00.00" step="0.01">
        </td>
        </tr>
        <tr>
        <th scope="row">
            <input type="text" class="form-control" name="name13" placeholder="Campo opcional" >
        </th>
        <td>
            <input type="number" class="form-control" name="value13" placeholder="00.00" step="0.01">
        </td>
        </tr>
        <!--<tr>
        <th scope="row">
            <div class="container" style="margin-top:20px">
                <h5><strong>TOTAL<strong></h3>
            </div>
        </th>
        <td>
            <textarea readonly class="form-control" name="name1" placeholder="00"></textarea>
        </td>
        </tr>
        -->
    </tbody>
    </table>
        <div class="container d-flex justify-content-center">
        <button class="btn btn-success">Criar</button>
    </div>
  </form>
</div>

<!--
<div  style="padding: 100px">
    <form action="">
        ´´@ ´´foreach ($´´user as $´´user)
        <div class= "d-flex ">
            <div class="form-group">
                <label for="title">Título</label>
                Para editar, deve-se utilizar a tag input sem o disable
                <input type="text" class="form-control" name="name1" value="´´{´´{ ´´$´´post´´-´´>Title}}">
                
                <textarea readonly class="form-control" name="name1" placeholder=""></textarea>
                
            </div>
            <div></div>
        </div>
        <div class="form-group">
            <label for="title">Texto</label>
            <textarea readonly class="form-control" id="text" placeholder=""></textarea>
        </div>
        @´´end´´foreach´
    </form>

</div> -->
@stop