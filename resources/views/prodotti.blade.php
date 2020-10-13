
    @extends('layout.app')
    @section('titolo','La Molisana Prodotti')
    @section('prodotti','active')
    @section('main')
      <div class="cards">
        <h2>Le lunghe</h2>
        @foreach ($lunghe as $key=>$card)
          <div class="card">
            <h3><a href="{{ route('show',['id'=>$key]) }}">{{ $card['titolo'] }}</a></h3>
            <img src="{{ $card['src']}}" alt="{{ $card['titolo'] }}">
          </div>
        @endforeach
        <h2>Le corte</h2>
        @foreach ($corte as $key=>$card)
          <div class="card">
            <h3><a href="{{ route('show',['id'=>$key]) }}">{{ $card['titolo'] }}</a></h3>
            <img src="{{ $card['src']}}" alt="{{ $card['titolo'] }}">
          </div>
        @endforeach
        <h2>Le cortissime</h2>
        @foreach ($cortissime as $key=>$card)
          <div class="card">
            <h3><a href="{{ route('show',['id'=>$key]) }}">{{ $card['titolo'] }}</a></h3>
            <img src="{{ $card['src']}}" alt="{{ $card['titolo'] }}">
          </div>
        @endforeach
      @endsection
