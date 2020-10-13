
    @extends('layout.app')
    @section('titolo','La Molisana Prodotto')
    @section('prodotti','active')
    @section('main')
      <div class="cards">
          <div class="card">
            <h3>{{ $card['titolo'] }}</h3>
            <img src="{{ $card['src']}}" alt="{{ $card['titolo'] }}">
            <p class="card-text">{{ $card['descrizione']}}</p>
            <p class="card-text">Cottura: {{ $card['cottura']}}</p>
            <p class="card-text">Peso:{{ $card['peso']}}</p>
          </div>
      </div>
      @endsection
