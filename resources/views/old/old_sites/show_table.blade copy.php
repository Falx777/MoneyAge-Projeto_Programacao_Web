@extends('layouts.custom-2')  

@section('content')
<div>
    <div>
        <h1></h1>
    </div>

    <div class="container" style="margin-top: 80px;">
        <div class="container d-flex justify-content-center" style="margin-bottom: 20px; margin:10px;">
            <div style="margin-right:10px;margin-top: 5px;">
                <h5><strong>{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('name'))[0]['name'] }} </strong></h5>
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
                <input disabled type="text" class="form-control" name="name1"placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item1'))[0]['item1'] }}"  >
            </th>
            <td>
                <input disabled type="number" class="form-control"name="value1" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item1'))[0]['item1'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name2" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item2'))[0]['item2'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value2" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item2'))[0]['item2'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name3" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item3'))[0]['item3'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value3" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item3'))[0]['item3'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name4" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item4'))[0]['item4'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value4" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item4'))[0]['item4'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name5" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item5'))[0]['item5'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value5" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item5'))[0]['item5'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name6" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item6'))[0]['item6'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value6" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item6'))[0]['item6'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name7" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item7'))[0]['item7'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value7"placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item7'))[0]['item7'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name8" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item8'))[0]['item8'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value8" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item8'))[0]['item8'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name9" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item9'))[0]['item9'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value9" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item9'))[0]['item9'] }}" required >
            </td>
            </tr>
            <tr>
            <th scope="row">
                <input disabled type="text" class="form-control" name="name10" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item10'))[0]['item10'] }}" required >
            </th>
            <td>
                <input disabled type="number" class="form-control" name="value10" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item10'))[0]['item10'] }}" required >
            </td>
            </tr>
            @if ((App\Models\Table::where('id','=',Auth::user()->id)->get('item11'))[0]['item11'] != NULL)
                <tr>
                <th scope="row">
                    <input disabled type="text" class="form-control" name="name11" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item11'))[0]['item11'] }}" >
                    
                </th>
                <td>
                    <input disabled type="number" class="form-control" name="value11" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item11'))[0]['item11'] }}">
                </td>
                </tr>
            @endif
            @if ((App\Models\Table::where('id','=',Auth::user()->id)->get('item12'))[0]['item12'] != NULL)
                <tr>
                <th scope="row">
                        <input disabled type="text" class="form-control" name="name12" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item12'))[0]['item12'] }}" >
                    
                </th>
                <td>
                    <input disabled type="number" class="form-control" name="value12" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item12'))[0]['item12'] }}">
                </td>
                </tr>
            @endif
            @if ((App\Models\Table::where('id','=',Auth::user()->id)->get('item13'))[0]['item13'] != NULL)
                <tr>
                <th scope="row">
                        <input disabled type="text" class="form-control" name="name13" placeholder="{{ (App\Models\Table::where('id','=',Auth::user()->id)->get('item13'))[0]['item13'] }}" >
                    
                </th>
                <td>
                    <input disabled type="number" class="form-control" name="value13" placeholder="{{ (App\Models\Values::where('id','=',Auth::user()->id)->get('item13'))[0]['item13'] }}">
                </td>
                </tr>
            @endif
        </tbody>
        <div style="margin-right:10px;margin-top: 5px;">
                <h5><strong>TOTAL: {{ \App\Http\Controllers\MoneyageController::sum(Auth::user()->id)}} </strong></h5>
        </div>
    </div>
</div>

@stop