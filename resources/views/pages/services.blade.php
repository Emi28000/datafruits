@extends('layouts.master')
@section('title')
    services
@endsection
@section('contenu')
<h1>Nos Produits</h1>
@if (Session::has('status'))
<div class="alert.alert-success">
    {{Session::get('status')}}
</div>
@endif
@foreach ($Produits as $Produit)
<div class="well">
<h1><a href="/show/{{$Produit->id}}">{{$Produit->produits_name}}</h1>
</div>
@endforeach
{{$Produits->links()}}
 @endsection

