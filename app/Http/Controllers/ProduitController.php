<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class ProduitController extends Controller
{
    public function create(){
    return view('pages.create');
    }

    public function saveproduit(Request $request){
        //  print('<h1>'.$request->produits_name.'<h1>');
        $Produits = new Produits();
        // Pour tester ma BD
        // print($produits::get())
        $Produits->produits_name=$request->input('produits_name');
       $Produits->produits_price=$request->input('produits_price');
        $Produits->produits_description=$request->input('produits_description')
        ;
        $Produits->save();
        // Retour à la page
        // return back();
        // Retour à la page voulu avec une session ( message )
        return redirect('/services')->with('status','Le produit'.$request->input('produits_name'). ' a été ajouté avec succès !');
    }
}
