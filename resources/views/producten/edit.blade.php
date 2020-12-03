@extends('layouts.app')

@section('content')
    <h1>Product aanpassen</h1>
        {!! Form::open(['action' => ['productController@update', $producten->id], 'method' => 'POST']) !!}
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
                {{Form::select('Categorie', ['H' => 'Haarstyling', 'V' => 'Verzorgingsproducten'])}}
            </div>
            <div class="form-group">
                {{form::label('product_foto', 'Product Afbeelding:')}}
                {{Form::file('Foto')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Aanpassen', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection