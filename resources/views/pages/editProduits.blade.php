@extends('layouts.master')
@section('title')
    Update
@endsection

@section('contenu')
@if (count($errors) > 0)
     <div class="alert alert-danger">
        <ul>
            @foreach ($erros->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
     </div>

@endif

<form action="{{url('updateproduit', [$produit->id])}}" method="POST" class="form-horizontal">
     {{-- csrf pour maintenir la page active --}}
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Produit</label>
        <input type="text" name="produits_name" value="{{$produit->produits_name}}" placeholder="Produit Name" class="form-control"required>
    </div>
    <div class="form-group">
        <label>Produit Price</label>
        <input type="number" name="produits_price" value="{{$produit->produits_price}}" placeholder="Produit Price" class="form-control"required>
    </div>
    <div class="form-group">
        <label>Produit description</label>
        <textarea name="produits_description" cols="30" rows="10" class="form-control"required>
{{$produit->produits_description}}
        </textarea>
    </div>
    <input type="submit" value="Update Produits" class="btn btn-primary">
  </form>
 @endsection
