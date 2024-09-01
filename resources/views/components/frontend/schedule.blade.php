<section id="section-schedule" aria-label="section-services-tab"
    data-bgimage="url({{ asset('frontend/images/used/banner-blackop.webp') }}) center right no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center wow fadeInUp">
                <h1 class="display-3 indosat_bold text-white" style="color:#33C9BD !important">@lang('frontend.agenda.title')</h1>
                <div class="spacer-single"></div>
                <p class="indosat_body text-white" style="font-size:18px">@lang('frontend.agenda.message')</p>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
                <div class="spacer-single"></div>
            </div>

            <div class="col-md-12 wow fadeInUp splide">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="i_h3 fa fa-arrow-left id-color"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="i_h3 fa fa-arrow-right id-color"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list text-center indosat_body">
                        @php
                            $agendas = [
                                [
                                    'title' => __('frontend.agenda.event_1.title'),
                                    'content' => __('frontend.agenda.event_1.sub_title'),
                                    'url' => config('app.url') . '/agenda',
                                    'img' => asset('frontend/images/used/schedule/1.png'),
                                ],
                                [
                                    'title' => __('frontend.agenda.event_2.title'),
                                    'content' => __('frontend.agenda.event_2.sub_title'),
                                    'url' => config('app.url') . '/agenda',
                                    'img' => asset('frontend/images/used/schedule/2.png'),
                                ],
                                [
                                    'title' => __('frontend.agenda.event_3.title'),
                                    'content' => __('frontend.agenda.event_3.sub_title'),
                                    'url' => config('app.url') . '/agenda',
                                    'img' => asset('frontend/images/used/schedule/3.png'),
                                ],
                                [
                                    'title' => __('frontend.agenda.event_4.title'),
                                    'content' => __('frontend.agenda.event_4.sub_title'),
                                    'url' => config('app.url') . '/agenda',
                                    'img' => asset('frontend/images/used/schedule/4.png'),
                                ],
                                [
                                    'title' => __('frontend.agenda.event_5.title'),
                                    'content' => __('frontend.agenda.event_5.sub_title'),
                                    'url' => config('app.url') . '/agenda',
                                    'img' => asset('frontend/images/used/schedule/5.png'),
                                ],
                            ];
                            // dd($agendas);
                        @endphp
                        @foreach ($agendas as $key => $agenda)
                            <li class="splide__slide">
                                <div class="card mx-2 border rounded-xl agenda" style="border-radius:10px;">

                                    <div class="card-body p-0"
                                        style="border-radius:10px;background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.9)), url('{{ $agenda['img'] }}">
                                        {{-- <div class="row p-0">
                                            <div class="col-md-12 w-full">
                                                <img src="{{ $agenda['img'] }}"
                                                    alt=""
                                                    style="border: 1px solid; border-top-left-radius: 20px; border-top-right-radius: 20px; white; "
                                                    class="img-responsive ">
                                            </div>
                                        </div> --}}
                                        <div class="card-description">
                                            <h3 class="indosat_bold  text-center my-1" style="color: #ff007a !important">{{ $agenda['title'] }}</h3>
                                            <p style="text-align: center; color: #32c9bd !important" class="indosat_body">
                                                {{ $agenda['content'] }}</p>
                                                <a href='#'
                                                class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold btnScheduleModal" data-key='event{{ $key }}'
                                                style="border-radius: 25px;cursor:pointer">@lang('frontend.button.see_more')</a>
                                        </div>
                                        {{-- <div class="row p-0">
                                            <div class="col-12 col-md-12 p-4 ">
                                                <h3 class="indosat_bold text-white">{{ $agenda['title'] }}</h3>
                                                <p style="text-align: justify " class="text-white indosat_body">{{ $agenda['content'] }}</p>
                                                <a href='#'
                                                    class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold btnScheduleModal" data-key='event{{ $key }}'
                                                    style="border-radius: 25px;cursor:pointer">@lang('frontend.button.see_more')</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@push('style')
    <style>
         .agenda{
            height: 250px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
            background-size: cover !important;
            color: white;
            position: relative;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card-description {
            position: absolute;
            bottom: 20px;
            /* left: 10px; */
            width:100%;
        }

        .card-description h3 {
            font-size: 22px;
        }

        .card-description p {
            font-size: 15px;
        }
    </style>
@endpush

@push('script')
<script>
    var splide = new Splide('.splide', {
                type: 'slide',
                perPage: 3,
                perMove: 1,
                start: 1,
                breakpoints: {
                    1024: {
                        perPage: 3,

                    },
                    767: {
                        perPage: 1,

                    },
                    640: {
                        perPage: 1,

                    },
                },
            });

            splide.mount();
</script>
@endpush



{{-- <div id="slider" class="text-center indosat_body">
    @for ($i = 1; $i <= 5; $i++)
    
    @endfor
</div> --}}
