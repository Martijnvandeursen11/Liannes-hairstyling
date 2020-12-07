@extends('layouts.index')
<div class="banner2" >

@section('content')
<div class="bannertext">
    <h1>  <span style="color: #4c4ca0">Producten</h1></span>
</div>
</div >
    <div class="page-container">
    @guest
    @if(count($producten) >= 1)
    @foreach($producten as $products)
        <div class="product_card"  style="width: 18rem;">
            <img class="card-img-top" style="with:100%" src="/storage/cover_images/{{$products->product_foto}}">
                <div class="card-body">
                    <h5 class="card-title">{{$products->product_naam}}</h5>
                    <p class="card-text">{{$products->product_omschrijving}}</p>
        </div>
    </div>
    @endforeach
    @else
        <p>Geen producten gevonden</p>
    @endif
    </div>
    
    @else
    </div><a style="float:left; margin-left: 75;" class="btn btn-outline-primary" href="/producten/create">Nieuw product</a><br>
    <div class="page-container2">
        @if(count($producten) >= 1)
    @foreach($producten as $products)
        <div class="product_card"  style="width: 18rem;">
            <img class="card-img-top" style="with:100%" src="/storage/cover_images/{{$products->product_foto}}">
                <div class="card-body">
                    <h5 class="card-title">{{$products->product_naam}}</h5>
                    <p class="card-text">{{$products->product_omschrijving}}</p>


                <a href="producten/{{$products->id}}/edit" class="btn btn-default">Aanpassen</a>

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
    </div>     
@endguest

@endsection