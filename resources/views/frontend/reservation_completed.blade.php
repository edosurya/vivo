@extends('layouts.frontend')

@section('title', 'Reservation Completed')
@section('meta_title', 'RSVP Now: Indonesia AI Day 2024')
@section('meta_description', 'Join the conference with 50+ speakers, 1000 innovators, panels, tech demos, and inspiring
    keynotes on AI and ethics.')

    @push('css-plugin')
    @endpush

@section('hero')
    <div class="row">
        <div class="col-md-12">
            <div class="spacer-single"></div>
            <h1 class="title-3 indosat_bold">
                @lang('frontend.reservation.completed.title')
            </h1>
            <div class="spacer-single"></div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="col-md-8 offset-md-2 text-center" style="background-size: cover;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lJIrF4YjHfQ?si=42uQiCIAUBGiqpS0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
            <br>
            <br>
            <p class="indosat_body" style="text-align: center">
                @lang('frontend.reservation.completed.message')
            </p>
        </div>
        <div class="spacer-single"></div>
        <div class="col-md-6 offset-md-3 text-center mt-3">
            <a href="{{ route('home') }}" class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 20px">@lang('frontend.button.to_homepage')</a>
        </div>
    </section>
@endsection


@push('js-plugin')
@endpush

@push('script')
@endpush
