<section class="jarallax text-light">
    <img src="{{ asset('frontend/images/used/slider1.webp') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p class="indosat_medium text-white" style="font-size:24px">@lang('frontend.sponsor.brought_you')</p>
                        <img src="{{ asset('frontend/images/used/sponsor/Asset 7@4x.png') }}" alt=""
                        class="m-1 broughtSponsor">
                    </div>
                    <div class="col-md-12 mt-3">
                        <br>
                        <p class="indosat_medium text-white" style="font-size:24px">@lang('frontend.sponsor.powered_by')</p>
                        <img src="{{ asset('frontend/images/used/sponsor/poweredby.png') }}" alt=""
                        class="m-1 powerSponsor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('style')

<style>

.broughtSponsor{
        width: 100% !important;
    }
    .powerSponsor{
        width: 60% !important;
    }
@media (min-width: 768px) { 
    .broughtSponsor{
        width: 100% !important;
    }
    .powerSponsor{
        width: 60% !important;
    }
}

@media (min-width: 992px) {
    .broughtSponsor{
        width: 50% !important;
    }
    .powerSponsor{
        width: 25% !important;
    }
}
</style>
    
@endpush
