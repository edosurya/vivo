<section id="section-why-visit" class="jarallax text-light">
    <img src="{{ asset('frontend/images/used/slider1.webp') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row ">
            <div class="col-md-10 offset-md-1 text-center wow fadeInUp">
                <h2 class="indosat_bold  display-3 gradient-color-text">
                    <span class="indosat_bold">
                        {{ __('frontend.why_indonesia_ai_day.title') }}</span><br />
                    {{-- <span class="indosat_bold">
                        {{ __('frontend.why_indonesia_ai_day.title_2') }}</span> --}}
                </h2>
                <div class="spacer-single spacer-single-custom"></div>
                {{-- <p class="indosat_body" style="font-size:18px">@lang('frontend.why_visit.message')</p> --}}
                {{-- <div class="spacer-double"></div> --}}
                {{-- <a href="{{ route('attendee.index') }}" class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 25px">@lang('frontend.button.see_more')</a> --}}

            </div>
        </div>

        <div class="row">
            @php
                $whyaiday = [
                    [
                        'title' => __('frontend.world_class_inspiration.title'),
                        'content' => __('frontend.world_class_inspiration.content'),
                        'icon' => 'frontend/images/used/harness_ai.png',
                    ],
                    [
                        'title' => __('frontend.deep_dive_sessions.title'),
                        'content' => __('frontend.deep_dive_sessions.content'),
                        'icon' => 'frontend/images/used/build_a_vibrant_ecosystem.png',
                    ],
                    [
                        'title' => __('frontend.leading_ai_technology_exhibition.title'),
                        'content' => __('frontend.leading_ai_technology_exhibition.content'),
                        'icon' => 'frontend/images/used/shape_the_future.png',
                    ],
                ];
            @endphp
            @foreach ($whyaiday as $item)
                <div class="col-lg-4 wow fadeIn animated my-3" data-wow-delay="0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeIn; background-size: cover;">
                    <div class="box-number square">
                        {{-- <i>
                            <img src="{{ asset($item['icon']) }}" class="img-responsive"></i> --}}

                        {{-- <i class="bg-color hover-color-2 {{ $item['icon'] }} text-light"></i> --}}
                        <div class="mx-2">
                            <h3 class="gradient-color-text indosat_bold">{{ $item['title'] }}</h3>
                            <p>{{ $item['content'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="spacer-why-visit-custom"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center wow fadeInUp">
                <h2 class="indosat_bold gradient-color-text display-3">
                    <span class="indosat_bold">
                        {{ __('frontend.who_should_attend.title') }}
                    </span>
                    <span class="indosat_bold">
                        {{ __('frontend.who_should_attend.title_2') }}
                    </span>
                </h2>
                <div class="spacer-single spacer-single-custom"></div>
                {{-- <p class="indosat_body" style="font-size:18px">@lang('frontend.why_visit.message')</p> --}}
                {{-- <div class="spacer-double"></div> --}}
                {{-- <a href="{{ route('attendee.index') }}" class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 25px">@lang('frontend.button.see_more')</a> --}}

            </div>
        </div>
        <div class="row">
            @php
                $whoshouldattend = [
                    [
                        'title' => __('frontend.government_officials.title'),
                        'content' => __('frontend.government_officials.content'),
                        'icon' => 'frontend/images/used/tech_enthusiast.png',
                    ],
                    [
                        'title' => __('frontend.business_leaders.title'),
                        'content' => __('frontend.business_leaders.content'),
                        'icon' => 'frontend/images/used/business_leaders.png',
                    ],
                    [
                        'title' => __('frontend.ai_read_tech_talents.title'),
                        'content' => __('frontend.ai_read_tech_talents.content'),
                        'icon' => 'frontend/images/used/academics_and_researchers.png',
                    ],
                    [
                        'title' => __('frontend.tech_ai_enthusiast.title'),
                        'content' => __('frontend.tech_ai_enthusiast.content'),
                        'icon' => 'frontend/images/used/academics_and_researchers.png',
                    ],
                ];
            @endphp
            @foreach ($whoshouldattend as $item)
                <div class="col-lg-6 wow fadeIn animated my-3" data-wow-delay="0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeIn; background-size: cover;">
                    <div class="box-number square">
                        {{-- <i> <img src="{{ asset($item['icon']) }}" class="img-responsive"></i> --}}
                        {{-- <i class="bg-color hover-color-2 {{ $item['icon'] }} text-light"></i> --}}
                        <div class="my-3">
                            <h3 class="gradient-color-text indosat_bold">{{ $item['title'] }}</h3>
                            <p>{{ $item['content'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="row">
            <div class="col-md-6 offset-md-3 text-center mt-2 wow fadeInUp" data-wow-delay="1.25s">
                <a href="{{ route('attendee.index') }}"
                    class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold"
                    style="border-radius: 20px">@lang('frontend.button.see_more')</a>
            </div>
        </div> --}}
    </div>
</section>
{{-- 
<section id="section-why-visit" class="jarallax text-light">
    <img src="{{ asset('frontend/images/used/banner.jpg') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center wow fadeInUp">
                <h1 class="title-3 indosat_bold">
                    {{ strtoupper(__('frontend.why_visit.title')) }}
                </h1>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
                <div class="spacer-single"></div>
                <p class="indosat_body" style="font-size:18px">@lang('frontend.why_visit.message')</p>
                <div class="spacer-double"></div>
                <a href="{{ route('attendee.index') }}" class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 25px">@lang('frontend.button.see_more')</a>
            </div>
        </div>
    </div>
</section> --}}
