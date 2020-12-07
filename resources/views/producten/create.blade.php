@extends('layouts.index')
<div class="banner2" >

@section('content')
<div class="bannertext2">
    <h1>  <span style="color: #4c4ca0">Nieuw product</h1></span>
</div>
</div>
<div class="page-container">
        {!! Form::open(['action' => 'productController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                {{Form::select('Categorie', ['Haarstyling' => 'Haarstyling', 'Verzorgingsproducten' => 'Verzorgingsproducten'])}}
            </div>
            <div class="form-group">
                {{form::label('product_foto', 'Product Afbeelding:')}}
                {{Form::file('Foto')}}
            </div>
            {{Form::submit('Toevoegen', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
@endsection