<div class="sticky-info container-fluid py-1 jarallax text-light" style="display:none">
    <img src="{{ asset('frontend/images/used/slider1.webp') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row align-items-center justify-content-between px-3">
            <div class="col-7 col-md-7 text-md-start mb-0 mb-md-0">
                @php
                    $sticky_text = config('services.event.is_launch')
                        ? __('frontend.sticky.title')
                        : __('frontend.button.launch_rsvp');
                @endphp
                <p class="fw-bold mb-0 indosat_bold text-white text-xs">{{ $sticky_text }}</p>
            </div>
            <div class="col-5 col-md-5 text-md-end pl-1 mt-2">

                @if (config('services.event.is_launch'))
                    <button class="button-secondary text-white p-1 px-2 col-12 col-md-5 mb-2 text text-xs-sm mt-2 me-2"
                        role="button"
                        style="font-size:14px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover; border-radius:25px"
                        onclick="location.href='{{ isLaunching('url') }}'">
                        <span class="text-white text text-xs-sm mt-2 indosat_bold">
                            @lang('frontend.button.rsvp')
                        </span>
                    </button>
                @endif

                <button class="button-secondary text-white p-1 px-2 col-12 col-md-5 mb-2 text text-xs-sm mt-2"
                    role="button" id="btnContactUs"
                    style="font-size:14px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover;border-radius:25px">
                    <span class="text-white text text-xs-sm mt-2 indosat_bold">
                        @lang('frontend.contact_us.title')
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>


@push('css-plugin')
    <style>
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
