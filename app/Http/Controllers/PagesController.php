<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view("pages.services")->with('Produits',$Produits);
    }

}
