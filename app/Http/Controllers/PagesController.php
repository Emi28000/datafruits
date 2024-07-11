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
        $Produits=DB::table("Produits")->orderBy('produits_name', 'asc')->get();
        // $Produits = Produits::paginate(2);


        return view("pages.services")->with('Produits',$Produits);
    }
    public function show($id){
       $Produit = DB::table('Produits')
       ->where('id',$id)
       ->first();
       return view('pages.show')->with('produits',$Produit);
    }

}
