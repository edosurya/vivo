@extends('layouts.frontend')

@section('title', 'Galeri')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description', 'vivo IMAGINE')

@push('css-plugin')
  <link href="{{ asset('frontend/css/homepage_2.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endpush

@push('style')
<style>
  body {
    background-color: #000;
  }

.carousel-wrapper {
  position: relative;
  overflow: hidden;
  padding: 40px 0 60px;
}

.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 1.5rem;
  transition: transform 0.3s ease;
  flex-wrap: nowrap;
}

.gallery-slide {
  flex: 0 0 200px;
  height: 400px;
  border-radius: 20px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  opacity: 0.4;
  transform: scale(0.85);
  transition: all 0.4s ease-in-out;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  position: relative;
}

.gallery-slide.active {
  flex: 0 0 250px;
  height: 450px;
  opacity: 1;
  transform: scale(1);
}

.slide-caption {
  background-color: rgba(0, 0, 0, 0.6);
  padding: 12px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  color: #fff;
  text-align: center;
}

.slide-caption h5 {
  margin: 0;
  font-size: 1rem;
  font-weight: 700;
}

.slide-caption p {
  margin: 0;
  font-size: 0.85rem;
  font-weight: 300;
}

.carousel-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: linear-gradient(to right, rgba(0, 0, 0, 0.5), transparent);
  color: white;
  font-size: 2rem;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 2;
}

.carousel-nav.prev {
  left: 0;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.carousel-nav.next {
  right: 0;
  background: linear-gradient(to left, rgba(0, 0, 0, 0.5), transparent);
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.carousel-dots {
  text-align: center;
  margin-top: 20px;
}

.carousel-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 0 6px;
  background-color: #888;
  border-radius: 50%;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.carousel-dot.active {
  background-color: #fff;
}



</style>
@endpush

@php
$categories = [
  ['slug' => 'portrait-photography', 'label' => 'PORTRAIT PHOTOGRAPHY', 'image' => 'bg-category-portrait.webp'],
  ['slug' => 'street-life-photography', 'label' => 'STREET PHOTOGRAPHY', 'image' => 'bg-category-street.webp'],
  ['slug' => 'series-photography', 'label' => 'SERIES PHOTOGRAPHY', 'image' => 'bg-category-series.webp'],
  ['slug' => 'still-life-photography', 'label' => 'STILL LIFE PHOTOGRAPHY', 'image' => 'bg-category-still-life.webp'],
  ['slug' => 'night-photography', 'label' => 'NIGHT PHOTOGRAPHY', 'image' => 'bg-category-night.webp'],
  ['slug' => 'nature-architecture-photography', 'label' => 'NATURE PHOTOGRAPHY', 'image' => 'bg-category-nature.webp'],
];
@endphp


@section('content')

    <section class="pb-1 pb-md-3 bg-black" id="list-gallery" style="display: {{ $display }};">
      <div class="container-lg mb-4">
        <div class="row" data-aos="fade-down" data-aos-duration="1500">
          <div class="col-12">
            <h3 class="text-white vivo_heavy text-uppercase">Galeri</h3>
          </div>
        </div>

        <div class="row flex-center p-2">
          @foreach($categories as $cat)
          <div class="col-4 mb-4 p-col-mobile" data-aos="fade-up">
            <a href="{{ route('gallery', ['category' => $cat['slug']]) }}#gallery">
              <div class="position-relative img-wrapper">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/' . $cat['image']) }}" alt="{{ $cat['label'] }}" loading="lazy">
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold fs-category-name">{{ $cat['label'] }}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="gallery-slider-section bg-black py-5" id="gallery">
      <div class="container-fluid px-md-5 text-center mb-4">
        <h2 class="text-primary vivo_heavy display-4">NATURE</h2>
      </div>

<div class="carousel-wrapper">
  <div class="carousel-nav prev" onclick="moveSlide(-1)">‹</div>

  <div class="carousel-container" id="carouselContainer">
    @foreach($images as $key => $img)
      <div class="gallery-slide {{ $key === 0 ? 'active' : '' }}"
           style="background-image: url('{{ asset($img['path']) }}');"
           data-index="{{ $key }}">
        <div class="slide-caption">
          <h5>{{ $img['title'] }}</h5>
          <p>{{ $img['desc'] }}</p>
        </div>
      </div>
    @endforeach
  </div>

  <div class="carousel-nav next" onclick="moveSlide(1)">›</div>

  <div class="carousel-dots" id="carouselDots">
    @foreach($images as $key => $img)
      <span class="carousel-dot {{ $key === 0 ? 'active' : '' }}" onclick="goToSlide({{ $key }})"></span>
    @endforeach
  </div>
</div>



    </section>



@endsection

@push('js-plugin')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endpush

@push('script')
<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('.gallery-slide');
  const dots = document.querySelectorAll('.carousel-dot');
  const totalSlides = slides.length;

  function updateSlides() {
    slides.forEach((slide, index) => {
      slide.classList.remove('active');
      if (index === currentIndex) {
        slide.classList.add('active');
      }
    });

    dots.forEach((dot, index) => {
      dot.classList.remove('active');
      if (index === currentIndex) {
        dot.classList.add('active');
      }
    });
  }

  function moveSlide(direction) {
    currentIndex += direction;

    if (currentIndex < 0) {
      currentIndex = totalSlides - 1;
    } else if (currentIndex >= totalSlides) {
      currentIndex = 0;
    }

    updateSlides();
  }

  function goToSlide(index) {
    currentIndex = index;
    updateSlides();
  }

  // Optional: Auto play
  // setInterval(() => moveSlide(1), 5000);
</script>


@endpush



