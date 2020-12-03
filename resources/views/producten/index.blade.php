@extends('layouts.app')

@section('content')
    <h1>Producten</h1>    <a href="/producten/create">Nieuw product</a> <br>
    
    @if(count($producten) >= 1)
    @foreach($producten as $products)
        <div class="card"  style="width: 18rem;">
            <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($products->product_foto))}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$products->product_naam}}</h5>
                    <p class="card-text">{{$products->product_omschrijving}}</p>
                <a href="/producten/{{$products->id}}/edit" class="btn btn-default">Aanpassen</a>

                {!!Form::open(['action' => ['productController@destroy', $products->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Verwijderen', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
        </div>
    @endforeach
    @else
        <p>Geen producten gevonden</p>
    @endif


@endsection