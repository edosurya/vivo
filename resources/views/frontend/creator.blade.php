@extends('layouts.frontend')

@section('title', 'Creatot Details')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
      <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
      <link rel="stylesheet" href="{{ asset('frontend/css/gallery.css') }}">
    @endpush

    @push('style')
    <style type="text/css">
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
          <div class="row mb-4" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-12 col-lg-12">
              <h3 class="text-white vivo_heavy text-uppercase">{{ $creator->fullname }}</h3>
              <h5 class="text-white">Kategori - {{ $creator::IMAGE_CATEGORY_2[$creator->category] }}</h5>
              <h5 class="text-white">Deskripsi Foto:</h5>
              <p class="text-white">{!! nl2br($creator->desc) !!}</p>
            </div>
          </div>

          <div class="photo-gallery">
            <div class="container">
              <div class="mb-4 d-flex justify-content-end">
              <a href="{{ route('creator.download', $creator->code ) }}" class="btn rounded px-5 py-3 text-black vivo_heavy btn-download text-btn-padding" id="dzSubmitButton">Download Foto</a>
            </div>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-2 gallery-grid">
                @foreach($creator->relatedImages as $img)
                <div class="col">
                  <a class="gallery-item" href="{{ asset('storage/'.$img->path) }}">
                    <img src="{{ asset('storage/'.$img->path) }}" class="img-fluid rounded">
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>


          <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12">
            </div>
          </div>

      </div>
</section>

<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <span class="close" data-bs-dismiss="modal" aria-label="Close">&times;</span>
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
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
      <div id="lightboxCarousel" class="carousel slide" data-bs-ride="true">
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



})


</script>

@endpush
