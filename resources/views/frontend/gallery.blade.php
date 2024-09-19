@extends('layouts.frontend')

@section('title', 'Galeri')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
      <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
  <!-- <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} "> -->
      <!-- <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ asset('frontend/css/gallery.css') }}">
      <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/167648/owl.carousel.css">
      <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/167648/owl.theme.css">
    @endpush

    @push('style')
<style type="text/css">
#owl-Gallery .item{
  margin: 3px;
}
#owl-Gallery .item img{
  display: block;
    width: 100%;
    height: 300px;
    position: relative;
    object-fit: cover;
}

#owl-Gallery .owl-buttons {
    display: flex;
    position: absolute;
    top: 30%;
    width: 90%;
    left: 5%;
    justify-content: space-between;
}

.owl-theme .owl-controls .owl-buttons div {
    color: #FFF;
    display: inline-block;
    zoom: 1;
    margin: 5px;
    font-size: 70px;
    border-radius: none;
    background: none;
    opacity: 1;
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

            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'potrait-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-portrait.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">POTRAIT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
      
            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'street-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-street.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
        
            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
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

            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'night-photography']) }}#gallery">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-night.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
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

    <section class="pb-6 bg-black" id="gallery">
      <div class="container-fluid mb-5">
        <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12 mb-3">
              <h3 class="text-white vivo_heavy text-uppercase">{{ $title }}</h3>
              <hr/>
            </div>
        </div>

        <div class="col-md-12">
          <div id="owl-Gallery" class="owl-carousel">
             @foreach($images as $key => $img)
            <div class="item">
              <img class="lazyOwl rounded-2" data-src="{{ asset($img['path'])}}" alt="Lazy Owl Image">
              <a class="icon d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-slide-to="{{$key}}">
                <span class="ion-ios-search"></span>
              </a>
            </div>
            @endforeach
          </div>
        </div>


      </div>
    </section>



        <!-- Modal -->
        <div class="modal fade lightbox-modal" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <span class="close" data-bs-dismiss="modal" aria-label="Close">&times;</span>
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">

                <div class="modal-content">
                    <div id="carouselCategoryControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner justify-content-center mx-auto">

                            @foreach($images as $key => $img)
                            @if($key == 0)
                            <div class="carousel-item active">
                                <img src="{{ asset($img['path'])}}" loading="lazy">
                                <div class="text pt-3 w-100 text-center">
                                    <p class="text-white vivo_bold text-uppercase mb-1 fs-img-title">{{ $img['title'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec mb-n1">{{ $img['desc'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec">{{ $img['location'] }}</p>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item">
                                <img src="{{ asset($img['path'])}}" class="d-block"  loading="lazy">
                                <div class="text pt-3 w-100 text-center">
                                    <p class="text-white vivo_bold text-uppercase mb-1 fs-img-title">{{ $img['title'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec mb-n1">{{ $img['desc'] }}</p>
                                    <p class="text-white vivo_regular fs-img-dec">{{ $img['location'] }}</p>
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



@endsection

@push('js-plugin')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/167648/owl.carousel.js"></script>

@endpush

@push('script')
<script type="text/javascript">
$(document).ready(function () {
  $("#owl-Gallery").owlCarousel({
    items: 4,
    lazyLoad: true,
    navigation: true,
    itemsScaleUp: false,
    slideSpeed: 50,
    autoPlay: 5000,
    navigationText: ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
    responsive:{
      0:{
        items:3
      },
      600:{
        items:3
      },
      1000:{
        items:4
      }
    }
  });
});
</script>


<script type="text/javascript">
  (function($) {

  "use strict";

  var fullHeight = function() {

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function(){
      $('.js-fullheight').css('height', $(window).height());
    });

  };
  fullHeight();

  var carousel = function() {
    $('.featured-carousel').owlCarousel({
      autoplay: 5000,
      margin:5,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      dots: true,
      autoplayHoverPause: false,
      items: 4,
      navigationText: ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
      responsive:{
        0:{
          items:3
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
