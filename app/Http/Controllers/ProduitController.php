<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produits;
use Termwind\Components\Element;

class ProduitController extends Controller
{
    public function create(){
    return view('pages.create');
    }

    public function saveproduit(Request $request){

//     $this->valided($request, [
//         'produits_name'=> 'required',
//         'produits_price'=> 'required',
//         'produits_description'=> 'required',

//    ]);

        //  print('<h1>'.$request->produits_name.'<h1>');
        $Produits = new Produits();
        // Pour tester ma BD
        // print($produits::get())
        $Produits->produits_name=$request->input('produits_name');
       $Produits->produits_price=$request->input('produits_price');
        $Produits->produits_description=$request->input('produits_description')
        ;
        $Produits->save();
    // $data = array();

    // $data['produits_name'] = $request->input('produits_name');
    // $data['produits_price'] = $request->input('produits_price');
    // $data['produits_description'] = $request->input('produits_description');

    // DB::table('produits')->insert($data);
        // Retour à la page
        // return back();
        // Retour à la page voulu avec une session ( message )
        return redirect('/services')->with('status','Le produit'.$request->input('produits_name'). ' a été ajouté avec succès !');
    }
    // Pour supprimer un Element

public function deleteproduit($id){
    $produit = Produits::find($id);
    $produit->delete();

    return redirect('/services')->with('status', 'votre produit a été supprimé avec succés!!');

}
}

