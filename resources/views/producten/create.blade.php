@extends('layouts.app')

@section('content')
    <h1>Maak een nieuw product</h1>
        {!! Form::open(['action' => 'productController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{form::label('product_naam', 'Product naam:')}}
                {{form::text('Naam', '', ['class' => 'form-control', 'placeholder' => 'Product naam'])}}
            </div>
             <div class="form-group">
                {{form::label('product_omschrijving', 'Product omschrijving:')}}
                {{form::textarea('Omschrijving', '', ['class' => 'form-control', 'placeholder' => 'Product omschrijving'])}}
            </div>
            <div class="form-group">
                {{form::label('product_prijs', 'Product prijs: €')}}
                {{form::number('Prijs', 'Product prijs')}}
            </div>
            <div class="form-group">
                {{form::label('product_categorie', 'Product categorie:')}}
                {{Form::select('Categorie', ['H' => 'Haarstyling', 'V' => 'Verzorgingsproducten'])}}
            </div>
            <div class="form-group">
                {{form::label('product_foto', 'Product Afbeelding:')}}
                {{Form::file('Foto')}}
            </div>
            {{Form::submit('Toevoegen', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection