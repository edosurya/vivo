@extends('layouts.frontend')
@section('title', 'Home')
@section('meta_title', 'Indonesia AI Day: Unleashing Indonesia’s AI Sovereignty')
@section('meta_description',
    'Indonesia AI Day: Wujudkan Dominasi AI Indonesia. Ikuti konferensi AI paling inovatif di
    Indonesia')



    @push('css-plugin')
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
        <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/splide.min.css') }}" rel="stylesheet">

        <style>
            .splide__arrow {
                background: none
            }

            .splide__arrow--next {
                right: -2em !important
            }

            .splide__arrow--prev {
                left: -1em !important
            }

            .head {
                width: 35% !important
            }

            .sub {
                width: 50% !important
            }

            /* @media (max-width: 375px) {
                                
                            } */

            @media (max-width: 575.98px) {
                .sub {
                    width: 100% !important
                }

                .head {
                    width: 80% !important;
                    margin-top: 90px !important
                }

                .responsive_name_card {
                    min-height: 16vh !important;
                    height: 20vh;
                }

                .unleashText {
                    font-size: 32px !important;
                }

                .subUnleashText {
                    font-size: 18px !important;
                }
            }

            @media (max-width: 768px) {
                .sub {
                    width: 100% !important
                }

                .head {
                    width: 80% !important;
                    margin-top: 90px !important
                }

                .responsive_name_card {
                    height: 18vh;
                }
            }

            .banner-subtitle {
                text-shadow: 2px 2px 10px #1db3c6;

            }

            .responsive_name_card {
                min-height: 10vh;
                height: auto;
                background: black;
            }

            .sticky-info,
            .btn-gradient-banner {
                /* background: rgb(255, 200, 5);
                                                    background: -moz-linear-gradient(270deg, rgba(255, 200, 5, 1) 0%, rgba(236, 0, 140, 1) 100%);
                                                    background: -webkit-linear-gradient(270deg, rgba(255, 200, 5, 1) 0%, rgba(236, 0, 140, 1) 100%);
                                                    background: linear-gradient(270deg, rgba(255, 200, 5, 1) 0%, rgba(236, 0, 140, 1) 100%); */
                background: linear-gradient(217deg, #041926, #0b333d 70.71%),
                    linear-gradient(127deg, #0c323f, #0b333d 70.71%),
                    linear-gradient(336deg, #0b333d, #041926 70.71%);
                /* filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffc805", endColorstr="#ec008c", GradientType=1); */
            }
        </style>
    @endpush

@section('header')
    @include('components.frontend.header')
@endsection

@section('hero')
    <section style="background: none !important">
        <div class="container mt-0 mt-lg-5">
            <div class="row d-flex align-content-start align-content-md-center" id="banner">
                <div class="spacer-single"></div>
                <div class="col-md-12 col-sm-12 mt-1 mt-sm-2 mt-md-3">
                    <img src="{{ asset('frontend/images/used/banner/banner080824.png') }}" alt="" class="head">
                </div>

                <div class="col-md-12 col-sm-12 mb-3 mt-3">
                    {{-- <img src="{{ asset('frontend/images/used/banner-subtitle.webp') }}" alt="" class="sub" > --}}
                    <h1 class="indosat_medium banner-subtitle unleashText" style="font-size: 42px;letter-spacing:7px">
                        Unleashing Indonesia's AI
                        Sovereignty</h1>
                    <div class="spacer-single"></div>
                    <p class="indosat_medium banner-subtitle subUnleashText" style="font-size: 25px;">@lang('frontend.banner.sub_headline')</p>
                </div>

                <div class="col-md-6 col-sm-12 offset-md-3 mt-1 mt-sm-2 mt-md-3">
                    @if (config('services.event.is_launch'))
                        @if (App::getLocale() == 'id')
                            <img src="{{ asset('frontend/images/used/banner/assetbanner04ID.png') }}" alt=""
                                width="80%">
                        @else
                            <img src="{{ asset('frontend/images/used/banner/assetbanner04EN.png') }}" alt=""
                                width="80%">
                        @endif
                    @else
                        <img src="{{ asset('frontend/images/used/banner/assetbanner03.png') }}" alt=""
                            width="80%">

                    @endif
                </div>

                <div class="col-12 mb-2 col-button-banner">
                    <button id="btn-section-banner" class="button-secondary indosat_bold py-3 px-4 rounded-full me-2"
                        role="button" onclick="location.href='{{ isLaunching('url') }}'"
                        style="font-size:24px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover;margin-bottom:10px !important">
                        <span class="text-white text text-xs-sm mt-2" style="font-size:18px">
                            {{ isLaunching('text') }}
                        </span>
                    </button>
                    <button id="btn-section-banner" class="button-secondary indosat_bold py-3 px-4 rounded-full"
                        role="button" onclick="location.href='#section-speakers'"
                        style="font-size:24px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover">
                        <span class="text-white text text-xs-sm mt-2" style="font-size:18px">
                            @lang('frontend.button.see_speaker')
                        </span>
                    </button>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')



    @include('components.frontend.about')


    <!-- section begin -->
    {{-- @include('components.frontend.feature') --}}
    <!-- section close -->


    <!-- section begin -->
    @include('components.frontend.speaker')
    <!-- section close -->

    <!-- section begin -->
    @include('components.frontend.why-visit')
    <!-- section close -->

    <!-- section begin -->
    {{-- @include('components.frontend.schedule') --}}
    <!-- section close -->


    <!-- section begin -->
    @include('components.frontend.sponsors')
    <!-- section close -->

    <!-- section begin -->
    {{-- @include('components.frontend.when_where') --}}
    <!-- section close -->

    <!-- section begin -->

    <!-- logo carousel section close -->


    @include('components.frontend.modal-about-us')
    @include('components.frontend.modal-schedule')

@endsection

@section('sticky')
    @include('components.frontend.sticky')
@endsection

@push('js-plugin')
    <script src="{{ asset('admin/assets/js/helpers/submitForm.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/toastr/toastr.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
@endpush


@push('script')
    <script>
        $(document).ready(function() {
            $('#contactUsForm').submit(function(event) {
                event.preventDefault();
                let form = $(this);
                submitForm({
                    form: form,
                    modal: null,
                    datatable: null,
                    customArray: []
                }).then(function(res) {
                    if (res.success) {
                        setTimeout(function() {
                            window.location.reload();
                        }, 4000);
                    }
                });
            });


            $(document).on('click', '#btnShowAbout', function() {
                $('#aboutUsModal').modal('show');
            });

            $(document).on('click', '.btnScheduleModal', function() {
                $('#scheduleModal').modal('show');
                let key = $(this).data('key');
                $('.event').removeClass('active');
                $(`.${key}`).addClass('active');
            });

            scrollSticky(window)

            // Add scroll event listener
            $(window).on('scroll', function() {
                scrollSticky(this)
            });


            function scrollSticky(window) {
                if ($(document).height() < $(window).height()) {
                    // Jika tidak bisa di-scroll, tampilkan elemen .sticky-info
                    $('.sticky-info').show();
                } else {
                    // Jika bisa di-scroll, tambahkan event listener untuk scroll
                    $(window).scroll(function() {

                        // Get the vertical position of the scroll bar
                        var scrollPos = $(window).scrollTop();
                        // Get the position of the image section
                        var imageSectionPos = $('#section-about').offset().top;

                        // console.log("scrollPos",scrollPos)
                        // console.log("imageSectionPos",imageSectionPos)

                        if (scrollPos >= 900) {
                            // Show the sticky element
                            $('.sticky-info').show();
                        } else {
                            // Hide the sticky element
                            $('.sticky-info').hide();
                        }


                        // mobile top 1129
                        // mobile about 1132

                        //desktop top 1133
                        //desktop about  1195


                        // if ($(window).scrollTop() > 0) {
                        //     $('.sticky-info').show();
                        // } else {
                        //     $('.sticky-info').hide();
                        // }
                    });
                }
            }
        });
    </script>
@endpush
