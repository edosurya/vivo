@extends('layouts.frontend')

@section('title', 'Beranda')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('style')
    	<link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} ">
    	<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

<style type="text/css">


 a {
     -webkit-transition: .3s all ease;
     -o-transition: .3s all ease;
     transition: .3s all ease;
     color: #1089ff;
}
 a:hover, a:focus {
     text-decoration: none !important;
     outline: none !important;
     -webkit-box-shadow: none;
     box-shadow: none;
}
 button {
     -webkit-transition: .3s all ease;
     -o-transition: .3s all ease;
     transition: .3s all ease;
}
 button:hover, button:focus {
     text-decoration: none !important;
     outline: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
}
 .img {
     background-size: cover;
     background-repeat: no-repeat;
     background-position: center center;
}
 .owl-carousel {
     position: relative;
}
 .owl-carousel .owl-item {
     opacity: 1;
}
 .owl-carousel .owl-item.active {
     opacity: 1;
}
 .owl-carousel .owl-nav {
	position: absolute;
    top: 50%;
    width: 90%;
    left: 5%;
}
 .owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next {
     position: absolute;
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
     transform: translateY(-50%);
     margin-top: -60px;
     color: white !important;
     -webkit-transition: 0.7s;
     -o-transition: 0.7s;
     transition: 0.7s;
     opacity: 0;
}
 @media (prefers-reduced-motion: reduce) {
     .owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next {
         -webkit-transition: none;
         -o-transition: none;
         transition: none;
    }
}
 .owl-carousel .owl-nav .owl-prev span:before, .owl-carousel .owl-nav .owl-next span:before {
     font-size: 60px;
}
 .owl-carousel .owl-nav .owl-prev {
     left: 0;
}
 .owl-carousel .owl-nav .owl-next {
     right: 0;
}
 .owl-carousel .owl-dots {
     text-align: center;
     margin-top: 20px;
}
 .owl-carousel .owl-dots .owl-dot {
     width: 10px;
     height: 10px;
     margin: 5px;
     border-radius: 50%;
     background: #fff;
     position: relative;
}
 .owl-carousel .owl-dots .owl-dot:hover, .owl-carousel .owl-dots .owl-dot:focus {
     outline: none !important;
}
 .owl-carousel .owl-dots .owl-dot.active {
     background: rgba(42,144,190,1);
}
 .owl-carousel:hover .owl-nav .owl-prev, .owl-carousel:hover .owl-nav .owl-next {
     opacity: 1;
}
 .owl-carousel:hover .owl-nav .owl-prev {
     left: -25px;
}
 .owl-carousel:hover .owl-nav .owl-next {
     right: -25px;
}
 .owl-carousel.owl-drag .owl-item {
     -ms-touch-action: pan-y;
     touch-action: pan-y;
}
 .work {
     width: 100%;
}
 .work .img {
     width: 100%;
     height: 300px;
     position: relative;
     -webkit-box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
     -moz-box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
     box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
}
 .work .img .icon {
     width: 70px;
     height: 70px;
     border-radius: 50%;
     background: #fff;
     display: block;
     opacity: 0;
     -webkit-transition: 0.3s;
     -o-transition: 0.3s;
     transition: 0.3s;
}
 @media (prefers-reduced-motion: reduce) {
     .work .img .icon {
         -webkit-transition: none;
         -o-transition: none;
         transition: none;
    }
}
 .work .text h3 {
     font-size: 18px;
     font-weight: 500;
}
 .work .text h3 a {
     color: #000;
}
 .work:hover .img .icon {
     opacity: 1;
}


</style>
    
    @endpush


@section('content')

   <!-- ============================================-->
      <!-- <section> Category  ============================-->

      <section class="pb-6 bg-black mt-4">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12">
              <h3 class="text-white vivo_heavy text-uppercase">Galeri</h3>
            </div>
          </div>

          <div class="row flex-center">

            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'potrait-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category1.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">POTRAIT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
      
            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
           	<a href="{{ route('gallery', ['category' => 'street-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category2.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
        
            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
			<a href="{{ route('gallery', ['category' => 'series-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category3.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">SERIES PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>


            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
           	<a href="{{ route('gallery', ['category' => 'still-live-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category4.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">STILL LIFE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
           	<a href="{{ route('gallery', ['category' => 'night-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category5.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'nature-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/category6.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center text-cat">NATURE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

          </div>

        </div>

    </section>

 	<section class="pb-6 bg-black">
        <div class="container-fluid mb-5">
	        <div class="row" data-aos="fade-down" data-aos-duration="1500">
	            <div class="col-10 col-lg-12 mb-3">
	              <h3 class="text-white vivo_heavy text-uppercase">{{ $title }}</h3>
	              <hr/>
	            </div>
	        </div>

			<div class="col-md-12">
				<div class="featured-carousel owl-carousel">
					@foreach($images as $img)
					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset($img['path'])}});">
								<a href="#" class="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">{{ $img['title'] }}</p>
								<span class="text-white vivo_regular fs-img-dec">{{ $img['desc'] }}</span>
							</div>
						</div>
					</div>
					@endforeach
<!-- 					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{asset('frontend/images/work-2.jpg')}});">
								<a href="#" class="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">Work 01</p>
								<span class="text-white vivo_regular fs-img-dec">Web Design</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{asset('frontend/images/work-3.jpg')}});">
								<a href="#" class="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">Work 01</p>
								<span class="text-white vivo_regular fs-img-dec">Web Design</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{asset('frontend/images/work-4.jpg')}});">
								<a href="#" class="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">Work 01</p>
								<span class="text-white vivo_regular fs-img-dec">Web Design</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{asset('frontend/images/work-5.jpg')}});">
								<a href="#" class="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">Work 01</p>
								<span class="text-white vivo_regular fs-img-dec">Web Design</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="work">
							<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{asset('frontend/images/work-1.jpg')}});">
								<a href="#" 6lass="icon d-flex align-items-center justify-content-center">
									<span class="ion-ios-search"></span>
								</a>
							</div>
							<div class="text pt-3 w-100 text-center">
								<p class="text-white vivo_bold text-uppercase mb-n1 fs-img-title">Work 01</p>
								<span class="text-white vivo_regular fs-img-dec">Web Design</span>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>


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
</script>


@endpush
