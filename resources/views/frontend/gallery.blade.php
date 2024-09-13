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
            <a href="{{ route('gallery', ['category' => 'street-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-street.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
        
            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'series-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-series.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">SERIES PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>


            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'still-live-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-still-life.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STILL LIFE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'night-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-night.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'nature-photography']) }}">
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

	 	<section class="pb-6 bg-black">
	        <div class="container-lg mb-5">
		        <div class="row" data-aos="fade-down" data-aos-duration="1500">
		            <div class="col-10 col-lg-12 mb-3">
		              <h3 class="text-white vivo_heavy text-uppercase">{{ $title }}</h3>
		              <hr/>
		            </div>
		        </div>

				<div class="col-md-12">
					<div class="featured-carousel owl-carousel gallery-grid">
						@foreach($images as $key => $img)
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset($img['path'])}});">
									<a class="icon d-flex align-items-center justify-content-center" onclick="showModal('{{asset($img['path'])}}', '{{ $img['title'] }}', '{{ $img['desc'] }}', '{{ $img['location'] }}')">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<p class="text-white vivo_bold text-uppercase mb-1 fs-img-title">{{ $img['title'] }}</p>
									<p class="text-white vivo_regular fs-img-dec mb-n1">{{ $img['desc'] }}</p>
									<p class="text-white vivo_regular fs-img-dec">{{ $img['location'] }}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>

	<div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01" loading="lazy" />
	  <div class="text pt-3 w-100 text-center">
				<p class="text-white vivo_bold text-uppercase mb-1 fs-img-title" id="title"></p>
				<p class="text-white vivo_regular fs-img-dec mb-n1" id="desc"></p>
				<p class="text-white vivo_regular fs-img-dec" id="location"></p>
		</div>
	</div>

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
	    loop:true,
	    autoplay: true,
	    margin:5,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
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


function showModal(img, title, desc, location) {
	var modal = document.getElementById("myModal");
	// Get the image and insert it inside the modal - use its "alt" text as a caption

	var img = img;
	var title = title;
	var desc = desc;
	var location = location;
	var modalImg = document.getElementById("img01");
	var tl = document.getElementById("title");
	var dc = document.getElementById("desc");
	var loc = document.getElementById("location");
	
	modal.style.display = "block";
	modalImg.src = img;
	tl.innerHTML = title;
	dc.innerHTML = desc;
	loc.innerHTML = location;
	

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
}

</script>


@endpush
