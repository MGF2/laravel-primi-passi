<header>
  <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="molisana-logo">
  <nav>
    <ul>
      <li class="@yield('home')"><a href="{{ route('home') }}">Home</a></li>
      <li class="@yield('prodotti')"><a href="{{ route('prodotti') }}">Prodotti</a></li>
      <li class="@yield('contatti')"><a href="{{ route('contatti') }}">Contatti</a></li>
    </ul>
  </nav>
</header>
