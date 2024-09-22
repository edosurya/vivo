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


.bi {
  display: inline-block;
  width: 1em;
  height: 1em;
  vertical-align: -0.035em;
  fill: currentcolor;
}

.btn-download {
    font-size: 15px;
    border-color: none;
    background: rgb(42,144,190);
    background: linear-gradient(90deg, rgba(42,144,190,1) 0%, rgba(114,216,221,1) 49%, rgba(42,144,190,1) 100%);
}

    </style>
    @endpush

@section('content')

      <section class="pb-6 bg-black mt-4">
        <div class="container-lg mb-2">
          <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12">
              <h3 class="text-white vivo_heavy text-uppercase">{{ $creator->fullname }}</h3>
              <p class="text-white">{{ $creator::IMAGE_CATEGORY_2[$creator->category] }}</p>
              <p class="text-white">{!! nl2br($creator->desc) !!}</p>
              <a href="{{ route('creator.download', $creator->code ) }}" class="btn rounded-3 text-black vivo_heavy btn-download text-btn-padding" id="dzSubmitButton">Download Foto</a>
            </div>
          </div>


          <section class="photo-gallery">
            <div class="container">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
                @foreach($creator->relatedImages as $img)
                <div class="col">
                  <a class="gallery-item" href="{{ asset('storage/'.$img->path) }}">
                    <img src="{{ asset('storage/'.$img->path) }}" class="img-fluid">
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </section>
      </div>
</section>

<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
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
          <img class="d-block img-fluid" src=${imgSrc} alt="${imgAlt}">
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

  fsExit.addEventListener("click", (e) => {
    e.preventDefault();
    exitFS();
  });
})


</script>

@endpush
