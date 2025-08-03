@extends('layouts.frontend')

@section('title', 'Galeri')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

@push('css-plugin')
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  
@endpush

@php
$categories = [
  ['slug' => 'portrait-photography', 'label' => 'Portrait <br>Photography', 'image' => 'bg-cat-portrait.webp'],
  ['slug' => 'street-life-photography', 'label' => 'Street <br>Photography', 'image' => 'bg-cat-street.webp'],
  ['slug' => 'night-photography', 'label' => 'Night <br>Photography', 'image' => 'bg-cat-night.webp'],
  ['slug' => 'nature-architecture-photography', 'label' => 'Nature & Architecture <br>Photography', 'image' => 'bg-cat-nature.webp'],
];
@endphp


@section('content')


      <section class="py-5 py-md-5 text-white section-pm" id="list-gallery">

        <div class="d-flex {{ $custom_css }}" style="display: {{ $display }}">
          <div class="section-bg-image-pm" style="background-image: url({{ asset('frontend/images/webp/bg-gallery.webp') }});
            "></div>

          <div class="container-lg">
            <div class="row" data-aos="fade-down" data-aos-duration="1500">
              <div class="col-12 text-center">
                <span class="text-white vivo_bold mb-3 text-title-section text-uppercase" data-aos="fade-down" data-aos-duration="1500">Galeri</span>
              </div>
            </div>

            <div class="row flex-center mt-4 p-col-mobile">

              @foreach($categories as $cat)
                <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
                  <a href="{{ route('gallery', ['category' => $cat['slug']]) }}#gallery">
                    <div class="position-relative img-wrapper ">
                      <img class="img-fluid inner-img" src="{{ asset('frontend/images/webp/' . $cat['image']) }}" alt="" loading="lazy"/>
                      <div class="position-absolute bottom-0 panel-text img-tag w-100">
                        <p class="mb-n1 text-light vivo_light fs-category-name">{!! $cat['label'] !!}</p>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>

          </div>
        </div>
    
    
    

    @if($images)
      <script type="text/javascript">
        window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "smooth" });
      </script>
      
      <div class="container-fluid mb-5 pb-6 mt-8">
        <div class="row" data-aos="fade-down">
            <div id="gallery"></div>
            <div class="col-12 text-center mb-5">
              <span class="text-white vivo_bold mb-3 text-title-section text-uppercase" data-aos="fade-down" data-aos-duration="1500">{{ $title }}</span>
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
                  <img class="rounded lazyOwl" src="{{ asset($img['thumb'])}}" alt="" loading="lazy">
                  @else
                  <img class="rounded lazyOwl" src="{{ asset($img['path'])}}" alt="" loading="lazy">
                  @endif
                  <a class="icon d-flex align-items-center justify-content-center position-absolute" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-slide-to="{{$key}}">
                    <span class="ion-ios-search"></span>
                  </a>
                </div>
                <div class="text pt-3 w-100 text-center mt-3">
                  <span class="d-block text-white vivo_bold mb-1 px-4 fs-img-title text-capitalize">{{ ucwords(strtolower(@$img['title'])) }}</span>
                  <span class="d-block text-white vivo_regular fs-img-desc text-capitalize">{{ ucwords(strtolower(@$img['creator'])) }}</span>
                </div>
              </div>
            @endforeach

          </div>
        </div>

      </div>
    @endif
    
    </section>

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
                                 <img src="{{ asset($img['path'])}}" class="d-block"  loading="lazy">
                                 <div class="text pt-3 w-100 text-center">
                                    <span class="d-block text-white vivo_bold mb-1 px-4 fs-img-title text-capitalize">{{ ucwords(strtolower(@$img['title'])) }}</span>
                                    <span class="d-block text-white vivo_regular fs-img-desc text-capitalize">{{ ucwords(strtolower(@$img['creator'])) }}</span>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item">
                                <img src="{{ asset($img['path'])}}" class="d-block"  loading="lazy">
                                <div class="text pt-3 w-100 text-center">
                                    <span class="d-block text-white vivo_bold mb-1 px-4 fs-img-title text-capitalize">{{ ucwords(strtolower(@$img['title'])) }}</span>
                                    <span class="d-block text-white vivo_regular fs-img-desc text-capitalize">{{ ucwords(strtolower(@$img['creator'])) }}</span>
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


      @include('components.frontend.winnerPreview')


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

  var winnerModal = document.getElementById('winnerModal');
  var btn = document.getElementById('btnWinModal');
  var winnerImgPath = document.getElementById('imgPath');
  var winnerImgTitle = document.getElementById('imgTitle');
  var winnerImgOwner = document.getElementById('imgOwn');
  var winnerImgDesc = document.getElementById('imgDesc');


  function winnerPreview(path, title, owner, desc) {
    btn.click();
    winnerImgPath.src = path;
    winnerImgTitle.innerHTML = title;
    winnerImgOwner.innerHTML = owner;
    winnerImgDesc.innerHTML = desc;

  }


  // function closeModal() {
  //   winnerModal.classList.remove("show");
  //   winnerModal.style.display = 'none';
  // }

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
      margin:5,
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
