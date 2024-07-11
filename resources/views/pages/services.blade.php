@extends('layouts.master')
@section('title')
    services
@endsection
@section('contenu')
<h1>Nos Produits</h1>
@foreach ($Produits as $Produit)
<div class="well">
<h1><a href="">{{$Produit->produits_name}}</h1>
</div>
@endforeach

 @endsection

