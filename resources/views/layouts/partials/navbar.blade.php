<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper">
    <div class="row" style="padding:0; margin:0">
      <div class="col l2 offset-l1">
        <a id="logo-container" href="/" class="brand-logo">Pariwisata Pontianak</a>
      </div>

      <div class="col l7 offset-l1">
        <ul class="right hide-on-med-and-down">
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
          <!--tambah halaman artikel  -->
          <li class="{{ Request::is('/artikel') ? 'active' : '' }}"><a href="/artikel">Artikel</a></li>
          <!-- /artikel -->
          <li class="{{ Request::is('/event') ? 'active' : '' }}"><a href="/event">Event</a></li>
          <li class="{{ Request::is('/about') ? 'active' : '' }}"><a href="/about">Tentang</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Terjemahkan<i class="material-icons right">arrow_drop_down</i></a></li>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#googtrans(id|id)" class="lang-id lang-select" data-lang="id">Indonesia</a></li>
            <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English</a></li>
          </ul>
        </ul>
      </div>
    </div>

    <ul id="nav-mobile" class="sidenav">
      <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
      <li class="{{ Request::is('/artikel') ? 'active' : '' }}"><a href="/artikel">Artikel</a></li>
      <li class="{{ Request::is('/event') ? 'active' : '' }}"><a href="/event">Event</a></li>
      <li class="{{ Request::is('/about') ? 'active' : '' }}"><a href="/about">Tentang</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Terjemahkan<i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="#googtrans(id|id)" class="lang-id lang-select" data-lang="id">Indonesia</a></li>
          <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English</a></li>
        </ul>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
