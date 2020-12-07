@extends('layouts.index')
<div class="banner2" >

@section('content')
<div class="bannertext2">
    <h1>  <span style="color: #4c4ca0">Product aanpassen</h1></span>
</div>
</div>
    <div class="page-container">
        {!! Form::open(['action' => ['productController@update', $producten->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{form::label('product_naam', 'Product naam:')}}
                {{form::text('Naam', $producten->product_naam, ['class' => 'form-control', 'placeholder' => 'Product naam'])}}
            </div>
             <div class="form-group">
                {{form::label('product_omschrijving', 'Product omschrijving:')}}
                {{form::textarea('Omschrijving', $producten->product_omschrijving, ['class' => 'form-control', 'placeholder' => 'Product omschrijving'])}}
            </div>
            <div class="form-group">
                {{form::label('product_prijs', 'Product prijs: €')}}
                {{form::number('Prijs', $producten->product_prijs)}}
            </div>
            <div class="form-group">
                {{form::label('product_categorie', 'Product categorie:')}}
                {{Form::select('Categorie', ['Haarstyling' => 'Haarstyling', 'Verzorgingsproducten' => 'Verzorgingsproducten'])}}
            </div>
            <div class="form-group">
                {{form::label('product_foto', 'Product Afbeelding:')}}
                {{Form::file('Foto')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Aanpassen', ['class'=>'btn btn-primary'])}}
            <a style="margin-left:20px;" href="/producten"> Annuleren </a>
        {!! Form::close() !!}
        </div>
@endsection