@extends('layouts.frontend')

@section('title', 'Galeri')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

  @push('css-plugin')
    <link href="{{ asset('frontend/css/homepage_2.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/gallery.css') }}">
  @endpush

@php
$categories = [
  ['slug' => 'portrait-photography', 'label' => 'PORTRAIT PHOTOGRAPHY', 'image' => 'bg-category-portrait.webp'],
  ['slug' => 'street-life-photography', 'label' => 'STREET PHOTOGRAPHY', 'image' => 'bg-category-street.webp'],
  ['slug' => 'night-photography', 'label' => 'NIGHT PHOTOGRAPHY', 'image' => 'bg-category-night.webp'],
  ['slug' => 'nature-architecture-photography', 'label' => 'NATURE PHOTOGRAPHY', 'image' => 'bg-category-nature.webp'],
];
@endphp

@section('content')


      <section class="pb-1 pb-md-3 bg-black" id="list-gallery" style="display: {{ $display }};">
        <div class="container-lg mb-2">
          <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12">
              <h3 class="text-white vivo_heavy text-uppercase">Galeri</h3>
            </div>
          </div>

          <div class="row flex-center p-2">


          @foreach($categories as $cat)
            <div class="col-3 mb-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
              <a href="{{ route('gallery', ['category' => $cat['slug']]) }}#gallery">
                <div class="position-relative img-wrapper ">
                  <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/' . $cat['image']) }}" alt="" loading="lazy"/>
                  <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                    <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">{{ $cat['label'] }}</p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach

          </div>
        </div>
    </section>
    
    

    @if($images)
    <script type="text/javascript">
      window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "smooth" });
    </script>
    
    <section class="pb-6 bg-black">
      <div class="container-fluid mb-5">
        <div class="row" data-aos="fade-down">
            <div class="col-10 col-lg-12 mb-3">
              <h3 class="text-white vivo_heavy text-uppercase">{{ $title }}</h3>
              <hr/>
            </div>
        </div>
        <div class="justify-content-center text-center h-50" id="loader">
          <span class="loader"></span>
        </div>
        <div class="col-md-12" style="display:none" id="galleryList">
          <div class="featured-carousel owl-carousel">

            @foreach($images as $key => $img)
              <div class="item work">
                <div class="img d-flex align-items-center justify-content-center">
                  @if(@$img['thumb'])
                  <img class="rounded-5 lazyOwl" src="{{ asset($img['thumb'])}}" alt="" loading="lazy">
                  @else
                  <img class="rounded-5 lazyOwl" src="{{ asset($img['path'])}}" alt="" loading="lazy">
                  @endif
                  <a class="icon d-flex align-items-center justify-content-center position-absolute" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-slide-to="{{$key}}">
                    <span class="ion-ios-search"></span>
                  </a>
                </div>
                <div class="text pt-3 w-100 text-center mt-3">
                  <p class="text-white vivo_bold mb-1 px-4 fs-img-title">{{ @$img['title'] }}</p>
                  <p class="text-white vivo_regular fs-img-dec mb-n1">{{ @$img['desc'] }}</p>
                  <p class="text-white vivo_regular fs-img-dec">{{ @$img['location'] }}</p>
                </div>
              </div>
            @endforeach

          </div>
        </div>

      </div>
    </section>
    @endif
    

    @if($images)

        <!-- Modal -->
        <div class="modal fade lightbox-modal" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <span class="close" data-bs-dismiss="modal" aria-label="Close" role="button">&times;</span>
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">

                <div class="modal-content">
                    <div id="carouselCategoryControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner justify-content-center mx-auto">

                            @foreach($images as $key => $img)
                            @if($key == 0)
                            <div class="carousel-item active">
                                <img src="{{ asset($img['path'])}}" loading="lazy">
                                <div class="text pt-3 w-100 text-center">
                                    <p class="text-white vivo_bold mb-1 fs-img-title">{{ @$img['title'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec">{{ @$img['desc'] }}</p>
                                    <div class="row align-items-center justify-content-center">
                                      <div class="col-10 col-md-8">
                                      <p class="text-white vivo_regular fs-img-dec">{{ @$img['desc2'] }}</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item">
                                <img src="{{ asset($img['path'])}}" class="d-block"  loading="lazy">
                                <div class="text pt-3 w-100 text-center">
                                    <p class="text-white vivo_bold mb-1 fs-img-title">{{ @$img['title'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec">{{ @$img['desc'] }}</p>
                                    <div class="row align-items-center justify-content-center">
                                      <div class="col-10 col-md-8">
                                      <p class="text-white vivo_regular fs-img-dec">{{ @$img['desc2'] }}</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


      @endif


      @include('components.frontend.winnerPreview');


@endsection

@push('js-plugin')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }} "></script>
@endpush

@push('script')
<script type="text/javascript">


  const galleryList = $('#galleryList');
  const loading = $('#loader');
  setTimeout(() => {
      galleryList.show()
      loading.hide();
  }, 500);
  

  (function($) {
  var carousel = function() {
    $('.featured-carousel').owlCarousel({
      lazyLoad:true,
      loop:false,
      margin:30,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      dots: true,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 4000,
      autoplaySpeed: 4000,
      autoplayHoverPause: true,
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


  var myCarousel = document.querySelector('#carouselCategoryControls')
  var myModalEl = document.getElementById('categoryModal')

  myModalEl.addEventListener('show.bs.modal', function (event) {
      const trigger = event.relatedTarget
      var bsCarousel = bootstrap.Carousel.getInstance(myCarousel)
      bsCarousel.to(trigger.dataset.bsSlideTo)
  })

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    myModalEl.style.display = "none";
  }

</script>

@endpush
