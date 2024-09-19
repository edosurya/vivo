@extends('layouts.frontend')

@section('title', 'Galeri')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
      <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} ">
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ asset('frontend/css/gallery.css') }}">
    @endpush

    @push('style')
    <style type="text/css">


@keyframes zoomin {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

.gallery-item {
  display: block;
}

.gallery-item img {
  box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
  transition: box-shadow 0.2s;
}

.gallery-item:hover img {
  box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.35);
}

.lightbox-modal .modal-content {
  background-color: var(--lightbox);
}

.lightbox-modal .btn-close {
  position: absolute;
  top: 1.25rem;
  right: 1.25rem;
  font-size: 1.25rem;
  z-index: 10;
  filter: invert(1) grayscale(100);
}

.lightbox-modal .modal-body {
  display: flex;
  align-items: center;
  padding: 0;
}

.lightbox-modal .lightbox-content {
  width: 100%;
}

.lightbox-modal .carousel-indicators {
  margin-bottom: 0;
}

.lightbox-modal .carousel-indicators [data-bs-target] {
  background-color: var(--carousel-text) !important;
}

.lightbox-modal .carousel-inner {
  width: 75%;
}

.lightbox-modal .carousel-inner img {
  animation: zoomin 10s linear infinite;
}

.lightbox-modal .carousel-item .carousel-caption {
  right: 0;
  bottom: 0;
  left: 0;
  padding-bottom: 2rem;
  background-color: var(--lightbox);
  color: var(--carousel-text) !important;
}

.lightbox-modal .carousel-control-prev,
.lightbox-modal .carousel-control-next {
  width: auto;
}

.lightbox-modal .carousel-control-prev {
  left: 1.25rem;
}

.lightbox-modal .carousel-control-next {
  right: 1.25rem;
}

@media (min-width: 1400px) {
  .lightbox-modal .carousel-inner {
    max-width: 60%;
  }
}

[data-bs-theme = "dark"] .lightbox-modal .carousel-control-next-icon,
[data-bs-theme = "dark"] .lightbox-modal .carousel-control-prev-icon {
    filter: none;
}

.btn-fullscreen-enlarge,
.btn-fullscreen-exit {
  position: absolute;
  top: 1.25rem;
  right: 3.5rem;
  z-index: 10;
  border: 0;
  background: transparent;
  opacity: .6;
  font-size: 1.25rem;
}

.bi {
  display: inline-block;
  width: 1em;
  height: 1em;
  vertical-align: -0.035em;
  fill: currentcolor;
}

    </style>
    @endpush

@section('content')

      <section class="pb-6 bg-black mt-4">
        <div class="container-lg mb-2">
          <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12">
              <h3 class="text-white vivo_heavy text-uppercase">Galeri</h3>
            </div>
          </div>

          <div class="row flex-center">

            <div class="col-4 mb-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'potrait-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-portrait.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">POTRAIT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
      
            <div class="col-4 mb-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'street-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-street.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
        
            <div class="col-4 mb-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'series-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-series.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">SERIES PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>


            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'still-live-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-still-life.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STILL LIFE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'night-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-night.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'nature-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-nature.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NATURE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

          </div>
        </div>
    </section>
    
    

    @if($images)
    <section class="pb-6 bg-black">
      <div class="container-fluid mb-5">
        <div class="row" data-aos="fade-down">
            <div class="col-10 col-lg-12 mb-3">
              <h3 class="text-white vivo_heavy text-uppercase">{{ $title }}</h3>
              <hr/>
            </div>
        </div>

        <div class="col-md-12 photo-gallery">
          <div class="featured-carousel owl-carousel gallery-grid">

            @foreach($images as $key => $img)
            <div class="item col">
                <a class="gallery-item" href="{{ asset($img['path'])}}">
                <img class="rounded lazyOwl" src="{{ asset($img['path'])}}" alt="sadsa" loading="lazy">
                </a>
    
            </div>
            @endforeach

          </div>
        </div>

      </div>
    </section>
    @endif
    
    <div id="gallery"></div>


   


<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <button type="button" class="btn-fullscreen-enlarge" aria-label="Enlarge fullscreen">
        <svg class="bi"><use href="#enlarge"></use></svg>
      </button>
      <button type="button" class="btn-fullscreen-exit d-none" aria-label="Exit fullscreen">
        <svg class="bi"><use href="#exit"></use></svg>
      </button>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="lightbox-content">
          <!-- JS content here -->
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@push('js-plugin')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }} "></script>

 
<!-- Include js plugin -->
<!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/167648/owl.carousel.js"></script> -->
@endpush

@push('script')
<script type="text/javascript">
  (function($) {

  var carousel = function() {
    $('.featured-carousel').owlCarousel({
      lazyLoad:true,
      loop:true,
      margin:5,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      dots: true,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 6000,
      autoplaySpeed: 6000,
      autoplayHoverPause: true,
      items: 4,
      navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
      responsive:{
        0:{
          items:2
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    });

  };
  carousel();

})(jQuery);

</script>

<script type="text/javascript">
  const html = document.querySelector('html');
html.setAttribute('data-bs-theme', 'dark');

document.addEventListener('DOMContentLoaded', () => {
  // --- Create LightBox
  const galleryGrid = document.querySelector(".gallery-grid");
  const links = galleryGrid.querySelectorAll("a");
  const imgs = galleryGrid.querySelectorAll("img");

  const lightboxModal = document.getElementById("lightbox-modal");
  const bsModal = new bootstrap.Modal(lightboxModal);
  const modalBody = lightboxModal.querySelector(".lightbox-content");

  function createCaption (caption) {
    return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
  }

  function createIndicators (img) {
    let markup = "", i, len;

    const countSlides = links.length;
    const parentCol = img.closest('.col');
    const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

    for (i = 0, len = countSlides; i < len; i++) {
      markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
    }

    return markup;
  }

  function createSlides (img) {
    let markup = "";
    const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

    for (const img of imgs) {
      const imgSrc = img.closest('.gallery-item').getAttribute("href");
      const imgAlt = img.getAttribute("alt");

      markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
    }

    return markup;
  }

  function createCarousel (img) {
    const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

    modalBody.innerHTML = markup;
  }

  for (const link of links) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const currentImg = link.querySelector("img");
      const lightboxCarousel = document.getElementById("lightboxCarousel");

      if (lightboxCarousel) {
        const parentCol = link.closest('.col');
        const index = [...parentCol.parentElement.children].indexOf(parentCol);

        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
        bsCarousel.to(index);
      } else {
        createCarousel(currentImg);
      }

      bsModal.show();
    });
  }

  // --- Support Fullscreen
  const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
  const fsExit = document.querySelector(".btn-fullscreen-exit");

  function enterFS () {
    lightboxModal.requestFullscreen().then({}).catch(err => {
      alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
    });
    fsEnlarge.classList.toggle("d-none");
    fsExit.classList.toggle("d-none");
  }

  function exitFS () {
    document.exitFullscreen();
    fsExit.classList.toggle("d-none");
    fsEnlarge.classList.toggle("d-none");
  }

  fsEnlarge.addEventListener("click", (e) => {
    e.preventDefault();
    enterFS();
  });

  fsExit.addEventListener("click", (e) => {
    e.preventDefault();
    exitFS();
  });
})

</script>
@endpush
