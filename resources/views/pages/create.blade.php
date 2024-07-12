@extends('layouts.master')
@section('title')
    create
@endsection

@section('contenu')
<form action="{{url('/saveproduit')}}" method="POST" class="form-horizontal">
     {{-- csrf pour maintenir la page active --}}
    @csrf
    <div class="form-group">
        <label>Produit</label>
        <input type="text" name="produits_name" placeholder="Produit Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Produit Price</label>
        <input type="text" name="produits_price" placeholder="Produit Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Produit description</label>
        <textarea name="produits_description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="Add Produits" class="btn btn-primary">
  </form>
 @endsection
