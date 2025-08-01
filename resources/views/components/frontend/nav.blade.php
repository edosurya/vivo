
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 vivo_regular" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/webp/vivo-logo.webp') }}" alt="" width="60%" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Beranda</a></li>
              <li class="nav-item"><a class="nav-link {{ Route::is('register.index') ? 'active' : '' }}" href="{{ url('/photographyawards') }}">Photography Awards</a></li>
              <li class="nav-item"><a class="nav-link {{ Route::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Galeri </a></li>
            </ul>
              <div class="social-icons ms-4 py-2 d-flex align-items-center gap-2 px-3">
                <a href="https://www.facebook.com/vivoIndonesia/" target="_blank">
                  <img alt="facebook" src="{{ asset('frontend/images/webp/fb-icon.webp') }}" width="30" height="30">
                </a>
                <a href="https://www.instagram.com/vivo_indonesia/" target="_blank">
                  <img alt="instagram" src="{{ asset('frontend/images/webp/ig-icon.webp') }}" width="30" height="30">
                </a>
                <a href="https://www.youtube.com/channel/UCKONryt63ztbYmCZzxen7tA" target="_blank">
                  <img alt="youtube" src="{{ asset('frontend/images/webp/yt-icon.webp') }}" width="30" height="30">
                </a>
              </div>
          </div>
        </div>
      </nav>

