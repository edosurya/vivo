<div class="modal fade" id="contactUsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body"
                style="background:url({{ asset('frontend/images/used/banner-blackop.webp') }}) !important;object-fit:cover !important">
                    <div class="container">
                        <div class="col-md-12 text-right">
                            <a class="font-weight-bold text-white sm-mb-30" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times" style="font-size: 24pt"></i>
                            </a>
                        </div>
                        <div class="row d-flex justify-content-around align-items-center">
                            <h1 class="display-3 wow fadeInUp indosat_bold gradient-color-text">
                                @lang('frontend.contact_us.title')</h1>
                            <div class="spacer-single"></div>
                            <p class="text-center wow fadeInUp indosat_body text-white" style="font-size:18px">@lang('frontend.contact_us.message')
                            </p>
                            <div class="spacer-single"></div>
                            <div class="col-md-8">
                                <form action="{{ route('contact_us.store') }}" id="contactUsForm"
                                    enctype="multipart/form-data">
                                    <div class="row" style="background-size: cover;">
                                        <div class="mb-3 wow fadeInUp">
                                            <label class="indosat_bold_body" for="fullname">@lang('frontend.reservation.form.fullname')<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control indosat_body" name="fullname"
                                                    id="fullname" placeholder="@lang('frontend.reservation.form.fullname')"
                                                    style="border-radius:10px">
                                            </div>
                                        </div>
                                        <div class="mb-3 wow fadeInUp">
                                            <label class="indosat_bold_body" for="company_name">@lang('frontend.reservation.form.company_name')<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control indosat_body"
                                                    name="company_name" id="company_name"
                                                    placeholder="@lang('frontend.reservation.form.company_name')" style="border-radius:10px">
                                            </div>
                                        </div>
                                        <div class="mb-3 wow fadeInUp">
                                            <label class="indosat_bold_body" for="email">@lang('frontend.reservation.form.email')<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control indosat_body" name="email"
                                                    id="email" placeholder="@lang('frontend.reservation.form.email')"
                                                    style="border-radius:10px">
                                            </div>
                                        </div>
                                        <div class="mb-3 wow fadeInUp">
                                            <label class="indosat_bold_body" for="phone">@lang('frontend.reservation.form.message')<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <textarea class="form-control indosat_body" name="message" id="message" placeholder="@lang('frontend.reservation.form.message')" rows="5"
                                                    style="border-radius:15px"></textarea>
                                            </div>
                                        </div>

                                        @if(config('services.is_captcha'))
                                        <div class="mb-3 wow fadeInUp">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                        @endif

                                        
                                        <div class="d-flex justify-content-end wow fadeInUp">
                                            <button id="btn-section-banner" type="submit" class="button-secondary indosat_bold py-3 px-5 rounded-full me-2 text-white" role="button"
                                            style="font-size:24px;background:url({{ asset('frontend/images/used/bg-speaker-other.png')  }}) center no-repeat;background-size:cover;margin-bottom:10px !important">@lang('frontend.button.submit')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
