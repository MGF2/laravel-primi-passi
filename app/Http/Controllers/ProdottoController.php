<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottoController extends Controller
{

  protected $prodotti;

  public function __construct() {
    $this->prodotti = config('prodotti');
  }

  public function prodotti() {
    $cards = $this->prodotti;

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($cards as $key=>$card) {
      if ( $card['tipo'] == 'lunga') {
        $lunghe[$key] = $card;
      } elseif ($card['tipo'] == 'corta') {
        $corte[$key] = $card;
      } elseif ($card['tipo'] == 'cortissima') {
        $cortissime[$key] = $card;
      }
    }
    return view('prodotti', compact('lunghe','corte','cortissime'));
  }

   public function show($id) {
     if (!array_key_exists($id , $this->prodotti)) {
       abort(404);
     }
     // dd($this->prodotti);
     $card = $this->prodotti[$id];
     return view('show', compact('card'));
   }
}
