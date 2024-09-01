<div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body"
                style="background:url({{ asset('frontend/images/used/banner-blackop.webp') }}) !important;object-fit:cover !important">
                <div class="container">
                    <div class="row d-flex g-5 align-items-center justify-content-around">
                        <div class="col-md-12 text-right">
                            <a class="font-weight-bold text-white sm-mb-30" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times" style="font-size: 24pt"></i>
                            </a>
                        </div>

                        <div class="col-lg-6 wow fadeInLeft z-1" data-wow-delay="1s">
                            <h2 class="indosat_bold" style="color:#33C9BD">@lang('frontend.about_us.title')</h2>
                            <p class="text-white indosat_body" style="text-align: justify">
                                @lang('frontend.about_us.message')
                            </p>
                            {{-- <p class="text-white indosat_body" style="text-align: justify">
                                    @lang('frontend.about_us.message_2')
                                </p>
                                <p class="text-white indosat_body" style="text-align: justify">
                                    @lang('frontend.about_us.message_3')
                                </p> --}}
                            <div class="spacer10"></div>
                        </div>
                        <div class="col-lg-6 mb-sm-30 text-center wow fadeInRight mb-5" data-wow-delay="1s">
                            <div class="de-images z-">
                                {{-- <img class="di-small wow fadeIn z-0"
                                    src="{{ asset('frontend/images/used/about/about-2.jpg') }}" alt=""> --}}
                                {{-- <img class="di-small-2" src="{{ asset('frontend/images/used/about/about-1.jpeg') }}"
                                    alt=""> --}}
                                <img class="img-fluid wow fadeInRight"
                                    src="{{ asset('frontend/images/used/about/about-2.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
