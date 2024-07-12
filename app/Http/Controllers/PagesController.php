<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produits;

class PagesController extends Controller
{
    //
    public function home(){
        return view("pages.home");
    }
    public function apropos(){
        return view("pages.apropos");
    }
    public function services(){
        $Produits=DB::table("Produits")->orderBy
        // Pour creer des pages
        ('produits_name', 'asc')->paginate(4);
        // $Produits = Produits::paginate(2);


        return view("pages.services")->with('Produits',$Produits);
    }
    public function show($id){
    //    $Produit = DB::table('Produits')
    //    ->where('id',$id)
    //    ->first();
          $Produit = Produits::find($id);
       return view('pages.show')->with('produits',$Produit);
    }

}
