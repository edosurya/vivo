
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 vivo_regular" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/vivo-logo.png') }}" alt="" width="80" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Beranda</a></li>
              <li class="nav-item"><a class="nav-link {{ Route::is('award') ? 'active' : '' }}" href="{{ url('/award') }}">Photography Awards</a></li>
              <li class="nav-item"><a class="nav-link {{ Route::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Galeri </a></li>
            </ul>
            <div class="py-3 py-lg-0">
              <img alt="image" src="{{ asset('frontend/images/fb.png') }}" width="25" height="25">
              <img alt="image" class="ms-2" src="{{ asset('frontend/images/ig.png') }}" width="26" height="26">
              <img alt="image" class="ms-2" src="{{ asset('frontend/images/yt.png') }}" width="30" height="30">
            </div>
          </div>
        </div>
      </nav>