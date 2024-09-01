<section id="section-speakers" class="jarallax text-light">
    <img src="{{ asset('frontend/images/used/slider.jpg') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center wow fadeInUp">
                <h2 class="display-3 indosat_bold gradient-color-text mb-0">
                    <span class="indosat_bold">@lang('frontend.speaker.main')</span>
                    <span class="indosat_bold">@lang('frontend.speaker.title')</span>
                </h2>

                <h3 class="indosat_body display-7 mt-3">@lang('frontend.speaker.message')</h3>
                {{-- <div class="separator"><span><i class="fa fa-square"></i></span></div> --}}
                <div class="spacer-single"></div>
            </div>

            <div class="clearfix"></div>

            <!-- team member -->
            @foreach ($speakers['main'] as $item)
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb30 wow fadeInUp">
                    <div class="de-team-list" style="border-radius: 35px ; border: 4px solid #33C9BD;">
                        @php
                            $speaker_ready = config('services.event.speakers_ready');
                            $image = $speaker_ready ? asset($item['image']) : asset($item['background']);
                        @endphp
                        <div class="card speaker-vip">
                            <div class="team-pic">
                                <img src="{{ $image }}" class="img-responsive rounded-10" alt="speaker_in_indonesia_ai_day">
                                @if (!$speaker_ready)
                                <div class="centered-text indosat_body">@lang($item['to_be_revealed_soon'])</div>
                                @endif
                            </div>
                            @if ($speaker_ready)
                            <div class="px-3 pt-2 responsive_name_card text-center">
                                <p class="text-md text-dark indosat_bold text-white my-0">{{ $item['name'] }}</p>
                                <p class="text-sm position vip-subtitle mb-2 lh-base">{!! $item['position'] !!} &nbsp;</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- team close -->
            {{-- @foreach ($speakers['other'] as $index => $item)
            
            <div class="col-sm-6 col-md-6 col-lg-4 mb-3 speaker-item {{ $index < 6 ? '' : 'd-none' }}" data-wow-delay="1.0s">
                <div class="card speaker-vip wow fadeInUp" style="border-radius: 20px ; border: 3px solid #33C9BD;">
                    <div class="schedule-item p-1" style="border:none !important; border-radius: 18px;
                    background-image: url('{{ asset('frontend/images/used/bg-speaker-other.png')  }}'); background-size:auto">
                        <div class="sc-pic sc-pic-removehover">
                            <img src="{{ asset($item['image']) }}" class="img-circle" alt="">
                        </div>
                        <div class="sc-name indosat_bold" >
                            <p class="text-dark indosat_bold my-0 px-sm-2 text-white text-md" >{{ $item['name'] }}</p>
                            <p class="vip-subtitle mb-2 px-sm-2 lh-sm text-white text-sm">{{ $item['position'] }}</p>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div> 


                
            @endforeach --}}
        </div>
    </div>

    <div class="col-md-4 offset-md-4 text-center mt-2 wow fadeInUp" data-wow-delay="1.25s">
        <p class="indosat_bold text-white text-xs">@lang('frontend.speaker.more')</p>
        {{-- <button class="button-secondary indosat_bold  py-2 px-4 moreBtn" role="button" style="font-size:18px;background:url({{ asset('frontend/images/used/bg-speaker-other.png')  }}) center no-repeat;background-size:cover">
            <span class="text-white text text-xs-sm mt-2">
                @lang('frontend.button.speaker_see_more')
            </span>
        </button>
        <button class="button-secondary indosat_bold  py-2 px-4 lessBtn" role="button" style="font-size:18px;background:url({{ asset('frontend/images/used/bg-speaker-other.png')  }}) center no-repeat;background-size:cover;display:none;">
            <span class="text-white text text-xs-sm mt-2">
                @lang('frontend.button.see_less')
            </span>
        </button> --}}


        {{-- <a class="btn btn-primary font-weight-bold text-white gradient-color sm-mb-30 indosat_bold moreBtn"
            style="border-radius: 20px;cursor: pointer;"></a>
        <a class="btn btn-primary font-weight-bold text-white gradient-color sm-mb-30 indosat_bold lessBtn"
            style="border-radius: 20px;display:none;cursor: pointer;">@lang('frontend.button.see_less')</a> --}}
    </div>
</section>

@push('style')
    <style>
        .speaker-vip {
            background: black;
            /* background-image: linear-gradient(#56febc, #58dced) !important; */
        }

        .speaker-others {
            background: #000;
            /* background-image: linear-gradient(#56febc, #58dced) !important; */
        }

        .card.speaker-vip {
            border: none;
        }

        .rounded-20 {
            border-radius: 20px !important;
        }

        .vip-subtitle {
            color: #fff !important;
            font-weight: 100;
            font-size: 12px
        }

        .sc-pic-removehover:hover {
            background-color: transparent !important;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }
    </style>
@endpush

@push('script')
    <script>
        $(document).ready(function() {
            // $(document).on('click', '.moreBtn', function() {
            //     $('.speaker-item').slice(6).fadeIn(400, function() {
            //         $(this).removeClass('d-none');
            //     });
            //     $('.moreBtn').hide();
            //     $('.lessBtn').show();
            // });

            // $(document).on('click', '.lessBtn', function() {
            //     $('.speaker-item').slice(6).fadeOut(400, function() {
            //         $(this).addClass('d-none');
            //     });
            //     $('.moreBtn').show();
            //     $('.lessBtn').hide();
            // });
        });
    </script>
@endpush
