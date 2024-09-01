<div class="modal fade" id="reservationCompletedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body"
                style="background:url({{ asset('frontend/images/used/banner-blackop.webp') }}) !important;object-fit:cover !important">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-12 col-lg-8 text-right">
                            <a href="{{ route('home') }}" class="font-weight-bold text-white sm-mb-30">
                                <i class="fa fa-times" style="font-size: 24pt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="row">
                        <div class="mx-auto col-md-12 text-center wow fadeInup" style="background-size: cover;">
                            <h1 class="display-5 indosat_bold gradient-color-text">
                                @lang('frontend.reservation.completed.title')
                            </h1>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="row">
                        <div class="mx-auto col-12 col-lg-6 mb-sm-30 text-center wow fadeInup">
                            <div class="de-images z-1">
                                <img class="img-fluid wow fadeInUp customImage"
                                    src="{{ asset('frontend/images/used/about/asset01.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="row">
                        <div class="mx-auto col-12 col-lg-6 text-center wow fadeInup" style="background-size: cover;">
                            <p class="indosat_medium text-white" style="text-align: center;font-size:14px">
                                @lang('frontend.reservation.completed.message')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
