<section id="section-about" class="jarallax text-light">
    <img src="{{ asset('frontend/images/used/slider1.webp') }}" class="jarallax-img" alt="">
{{-- <section id="section-about" data-bgimage="url({{ asset('frontend/images/used/headline_bg_2.jpg') }}) center right no-repeat"> --}}
    
    <div class="container">
        <div class="row d-flex g-5 align-items-center justify-content-around">
            
            <div class="col-lg-6 wow fadeInLeft z-1">
                <h2 class="indosat_bold gradient-color-text">@lang('frontend.about_us.title')</h2>
                <p class="indosat_body text-white " style="text-align: justify">
                    @lang('frontend.about_us.message')
                </p>
                <div class="spacer10"></div>
                {{-- <a class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 25px" id="btnShowAbout">@lang('frontend.button.see_more')</a> --}}
            </div>
            <div class="col-lg-6 mb-sm-30 text-center wow fadeInRight mb-5">
                <div class="de-images z-">
                    {{-- <img class="di-small wow fadeIn z-0" src="{{ asset('frontend/images/used/about/about-2.jpg') }}" alt=""> --}}
                    {{-- <img class="di-small-2" src="{{ asset('frontend/images/used/about/about-1.jpeg') }}" alt=""> --}}
                    <img class="img-fluid wow fadeInRight" src="{{ asset('frontend/images/used/about/asset01.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
