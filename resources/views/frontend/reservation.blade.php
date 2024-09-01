@extends('layouts.frontend')

@section('title', 'Reservation')
@section('meta_title', 'RSVP Now: Indonesia AI Day 2024')
@section('meta_description',
    'Join the conference with 50+ speakers, 1000 innovators, panels, tech demos, and inspiring
    keynotes on AI and ethics.')

    @push('css-plugin')
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
        <link href="{{ asset('admin/assets/css/loading.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />
    @endpush

@section('header')
    @include('components.frontend.header')
@endsection

@section('hero')
    <section class="pb-0 pb-sm-2" style="background: none !important">
        <div class="row d-flex align-content-start align-content-md-center">
            <div class="col-md-12 col-sm-12 mb-3 mt-3">
                <h1 class="indosat_medium banner-subtitle unleashText" style="font-size: 42px;letter-spacing:7px">
                    @lang('frontend.reservation.title')
                </h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section style="padding-top:45px !important">
        <div class="container">
            <div class="row d-flex g-5 align-items-center justify-content-around">
                <div class="col-md-12 col-lg-8 px-1 mx-auto" style="background-size: cover;">
                    <form id="reservationForm" enctype="multipart/form-data" method="post"
                        action="{{ route('reservation.store') }}">
                        <div class="row" style="background-size: cover;">

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="firstname">
                                    @lang('frontend.reservation.form.firstname')
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control indosat_body" name="firstname" id="firstname"
                                    placeholder="@lang('frontend.reservation.form.firstname')" style="border-radius:10px">

                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="lastname">
                                    @lang('frontend.reservation.form.lastname')
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="lastname" id="lastname"
                                    placeholder="@lang('frontend.reservation.form.lastname')" style="border-radius:10px">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="email">
                                    @lang('frontend.reservation.form.email')
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="email" id="email"
                                    placeholder="@lang('frontend.reservation.form.email')" style="border-radius:10px">
                            </div>

                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="phone">
                                    @lang('frontend.reservation.form.phone')
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="row">
                                    <div class="col-3 col-md-2 mb-0 mr-0">
                                        <select name="dial_code" id="dial_code" class="form-control indosat_body"
                                            style="border-radius:10px" dont-clear="true">
                                            @forelse ($dial_codes as $item)
                                                <option value="{{ $item['dial_code'] }}"
                                                    {{ $item['dial_code'] == '+62' ? 'selected' : '' }}>
                                                    ({{ $item['code'] }})
                                                    {{ $item['dial_code'] }}</option>
                                            @empty
                                                <option value="">-</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="col-9 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="phone"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="phone"
                                            placeholder="@lang('frontend.reservation.form.phone')" style="border-radius:10px">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="job_title">
                                    @lang('frontend.reservation.form.job_title')
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="job_title" id="job_title"
                                    style="border-radius:10px">
                                    <option value="" selected>-- @lang('frontend.reservation.form.job_title') --</option>
                                    @forelse ($job_titles as $job_title)
                                        <option value="{{ $job_title['id'] }}">{{ $job_title['name'] }}</option>
                                    @empty
                                        <option value="">-- EMPTY --</option>
                                    @endforelse
                                </select>

                            </div>

                            <div class="mb-3 col-md-12 universityBlock" style="display:none">
                                <label class="indosat_bold_body" for="university_name">
                                    @lang('frontend.reservation.form.university_name')
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="university_name"
                                    id="university_name" placeholder="@lang('frontend.reservation.form.university_name')" style="border-radius:10px">
                            </div>

                            <div class="mb-3 col-md-12 universityBlock" style="display:none">
                                <label class="indosat_bold_body" for="major">
                                    @lang('frontend.reservation.form.major')
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="major" id="major"
                                    style="border-radius:10px">
                                    <option value="" selected>-- @lang('frontend.reservation.form.major') --</option>
                                    @forelse ($majors as $major)
                                        <option value="{{ $major['id'] }}">{{ $major['name'] }}</option>
                                    @empty
                                        <option value="">-- EMPTY --</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="mb-3 col-md-12 companyBlock" style="display:none">
                                <label class="indosat_bold_body" for="company_name">
                                    @lang('frontend.reservation.form.company_name')
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="company_name"
                                    id="company_name" placeholder="@lang('frontend.reservation.form.company_name')" style="border-radius:10px">

                            </div>

                            <div class="mb-3 col-md-12 companyBlock" style="display:none">
                                <label class="indosat_bold_body" for="company_industry">
                                    @lang('frontend.reservation.form.company_industry')
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="company_industry" id="company_industry"
                                    style="border-radius:10px">
                                    <option value="" selected>-- @lang('frontend.reservation.form.company_industry') --</option>
                                    @forelse ($industries as $industry)
                                        <option value="{{ $industry['id'] }}">{{ $industry['name'] }}</option>
                                    @empty
                                        <option value="">-- EMPTY --</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="mb-3 col-md-12 companyMajorCustomBlock" style="display:none">
                                <label class="indosat_bold_body otherTitle" for="company_major_custom">
                                    text
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="company_major_custom"
                                    id="company_major_custom" placeholder="text"
                                    style="border-radius:10px">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="interest_text">
                                    @lang('frontend.reservation.form.interest')
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="interest_text"
                                    id="interest_text" placeholder="@lang('frontend.reservation.form.interest')"
                                    style="border-radius:10px">
                            </div>

                            @if (config('services.is_captcha'))
                                <div class="mb-3 col-md-12">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            @endif
                            <div class="my-3 col-md-12">
                                <button id="btn-reservation" type="submit"
                                    class="button-secondary indosat_bold py-3 px-5 rounded-full me-2 text-white"
                                    role="button"
                                    style="font-size:24px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover;margin-bottom:10px !important">@lang('frontend.button.submit')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('components.frontend.modal-reservation-completed')
@endsection


@push('js-plugin')
    <script src="{{ asset('admin/assets/js/helpers/globalHelpers.js') }}"></script>
    <script src="{{ asset('admin/assets/js/helpers/submitForm.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/toastr/toastr.min.js') }}"></script>
@endpush

@push('script')
    <script>
        const isUniversityJobs = @json($is_university_jobs);
        $(document).ready(function() {
            $(document).on('change', '#job_title',function() {
                toggleUniversityCompanyBlocks();
            });

            // Event listener for company industry and major change
            $(document).on('change','#company_industry, #major', function() {
                toggleCompanyMajorCustomBlock();
            });

            $('#reservationForm').submit(function(event) {
                event.preventDefault();
                let form = $(this);
                submitForm({
                    form: form,
                    modal: null,
                    datatable: null,
                    customArray: [],
                    isRecaptcha: true
                }).then(function(resp) {
                    if (resp.success) {
                        $('#reservationCompletedModal').modal('show');
                        // setTimeout(function () {
                        //     location.href('/');
                        // }, 200);
                        clearForm($('#reservationForm'));
                    }
                    if (!resp.success) {
                        grecaptcha.reset();
                    }
                });
            });

            showSticky();

        });

        function toggleUniversityCompanyBlocks() {
            toggleCompanyMajorCustomBlock();
            if (isUniversityJobs.includes(Number($('#job_title').val()))) {
                $('.universityBlock').show();
                $('.companyBlock').hide();
            } else {
                $('.universityBlock').hide();
                $('.companyBlock').show();
            }
        }

        function toggleCompanyMajorCustomBlock() {
            $('.companyMajorCustomBlock').hide();
            $('#company_major_custom').val('');

            if (isUniversityJobs.includes(Number($('#job_title').val()))) {
                if ($('#major').val() == `{{ App\Enums\MajorEnum::OTHER->value }}`) {
                    $('.companyMajorCustomBlock').show();
                    $('.companyMajorCustomBlock').find('.otherTitle').html(`{{ __('frontend.reservation.form.other.major') }}<span class="text-danger">*</span>`);
                    $('.companyMajorCustomBlock').find('#company_major_custom').attr('placeholder',`{{ __('frontend.reservation.form.other.major') }}`);
                }
            } else {
                if ($('#company_industry').val() == `{{ App\Enums\IndustryNameEnum::OTH->value }}`) {
                    $('.companyMajorCustomBlock').find('.otherTitle').html(`{{ __('frontend.reservation.form.other.industry') }}<span class="text-danger">*</span>`);
                    $('.companyMajorCustomBlock').find('#company_major_custom').attr('placeholder',`{{ __('frontend.reservation.form.other.industry') }}`);
                    $('.companyMajorCustomBlock').show();
                }
            }
        }
    </script>

<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'pageLoadReservation',
        'conversionId': '{{ $conversionId }}',
        'conversionLabel': '{{ $conversionLabel }}',
    });

    document.getElementById('btn-reservation').addEventListener('click', function() {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'reservationComplete',  // Custom event name
            'conversionId': '{{ $conversionId }}',
            'conversionLabel': '{{ $conversionSubmitLabel }}',
        });
    });
</script>
@endpush
