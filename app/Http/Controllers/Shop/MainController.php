<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $produits = Produit::all();
        // dd($produits);
        
     
        return view('shop.index',compact('produits'));
    }
}
