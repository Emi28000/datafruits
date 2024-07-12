<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProduitController;

 Route::get('/', function () {
     return view('welcome');
 });

// Route::get('/home/{id}/{nom}',function ($id, $nom){
//     return "<h1> Bienvenue dans votre  KIMIA NA TUMA mon id est ".$id." mon nom est ".$nom." </h1>";
// });

Route::get('/home',[PagesController::class,'home']);
Route::get('/apropos',[PagesController::class,'apropos']);
Route::get('/services',[PagesController::class,'services']);
Route::get('/show/{id}',[PagesController::class, 'show']);
Route::get('/create',[ProduitController::class,'create']);
Route::post('/saveproduit',[ProduitController::class, 'saveproduit']);


