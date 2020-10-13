<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home() {
      return view('home');
    }

    public function contatti() {
      return view('contatti');
    }

    // public function prodotti() {
    //   $cards = config('prodotti');
    //
    //   $lunghe = [];
    //   $corte = [];
    //   $cortissime = [];
    //
    //   foreach ($cards as $key=>$card) {
    //     if ( $card['tipo'] == 'lunga') {
    //       $lunghe[$key] = $card;
    //     } elseif ($card['tipo'] == 'corta') {
    //       $corte[$key] = $card;
    //     } elseif ($card['tipo'] == 'cortissima') {
    //       $cortissime[$key] = $card;
    //     }
    //   }
    //   // dd($cortissime,$lunghe,$corte);
    //   return view('prodotti', compact('lunghe','corte','cortissime'));
    // }
    //
    //  public function show($id) {
    //
    //  }
}
