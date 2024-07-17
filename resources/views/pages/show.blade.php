@extends('layouts.master')
@section('title')
    show
@endsection
@section('contenu')
<h1>Nos Produits</h1>
<hr>
<h1>{{$produits->produits_name}}</h1>
<h2> {{$produits->produits_price}} € </h2>
<p>{{$produits->produits_description}}</p>
</hr>
<h3>{{$produits->created_at}}</h3>
{{-- @foreach ($Produits as $Produit) --}}
{{-- <div class="well">
<h1><a href="/show/{{$Produit->id}}">{{$Produit->produits_name}}</h1>
</div> --}}
{{-- @endforeach --}}
{{-- {{$Produits->links()}} --}}
<hr>
<a href="" class="btn btn-default">Edit</a>
<form action=" {{url('deleteproduits', [$produits->id])}}" method="POST" class="pull-right">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Supprimer</button>
</form>
 @endsection
