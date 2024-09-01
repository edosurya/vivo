@extends('layouts.frontend')

@section('title', 'Term & Conditions')
@section('meta_title', 'RSVP Now: Indonesia AI Day 2024')
@section('meta_description', 'Join the conference with 50+ speakers, 1000 innovators, panels, tech demos, and inspiring keynotes on AI and ethics.')
@push('css-plugin')
@endpush

@section('hero')
    <div class="row">
        <div class="col-md-12">
            <div class="spacer-single"></div>
            <h1 class="title-3 indosat_bold">
                @lang('frontend.terms_condition.title')
            </h1>
            <div class="spacer-single"></div>
            @include('components.frontend.button',['url' => route('reservation.index'),'text' =>__('frontend.button.rsvp'),'inline_css' => 'font-size: 14px;'])
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="container">
            <h3 class="text-center indosat_medium">
                Terms and Conditions Indosat Ooredoo Hutchison IM3 Prepaid
            </h3>
            <div class="spacer-single"></div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header w-100 indosat_medium">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Preamble
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body indosat_body">
                            <ol type="1" class="ng-scope">
                                <li>"Indosat Ooredoo Hutchison" is PT Indosat Tbk.</li>
                                <li>"Customer" is an individual using the Prepaid Service</li>
                                <li>"Prepaid SIM Card" is the Prepaid Subscriber Identity Module (SIM) card
                                    issued by Indosat Ooredoo Hutchison for
                                    the Customer to be used in a cellular phone or other compatible gadgets to
                                    enable the Customer to
                                    access Prepaid Services</li>
                                <li>"Prepaid Service" is the prepaid telecommunication service provided by
                                    Indosat Ooredoo Hutchison under the brand
                                    of
                                    <a href="https://indosatooredoo.com/id/personal/">IM3 Ooredoo</a> and/or
                                    Mentari Ooredoo, including but not limited to, voice calls, short messages,
                                    data access/internet and other added value services.
                                </li>
                                <li>"Emergency" is a condition beyond the control of Indosat Ooredoo Hutchison,
                                    including but not limited to, acts
                                    of God, plague, fire, earthquakes, storms, floods, or other disasters,
                                    threat of war, riots, or other
                                    threats of unrest, industrial disputes, blackouts, phone line damage, cyber
                                    attack, acts of other parties that
                                    may cause a condition wherein Indosat Ooredoo Hutchison cannot provide
                                    service as usual to its Customers, or
                                    a ban placed by the government. In the event of such emergency, Indosat
                                    Ooredoo Hutchison is released from
                                    its obligations.</li>
                                <li>"Active Period" is the period when the Prepaid SIM Card is active, as
                                    determined by Indosat Ooredoo Hutchison.</li>
                                <li>"Grace Period" is the 30 calendar day period after the Active Period
                                    expires.</li>
                                <li>General Terms and Conditions are general terms and conditions listed on this
                                    page, which can be contained with Special Terms and Conditions (if any) for
                                    each Indosat Ooredoo Hutchison product and service.</li>
                                <li>Special Terms and Conditions are special terms and conditions listed on this
                                    page or other pages that apply specifically to each product, service or
                                    certain programs that Indosat Ooredoo Hutchison organizes itself or in
                                    collaboration with other parties.</li>
                                <li>"Invalid Card" is a Prepaid SIM Card that has exceeded its Grace Period so
                                    that the Prepaid SIM Card
                                    cannot be used anymore and its remaining phone credit is made void.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header w-100 indosat_medium">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            General Terms
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body indosat_body">
                            <ol type="1" class="ng-scope">
                                <li>The Terms and Conditions apply after all the prerequisites to subscribe for
                                    Indosat Ooredoo Hutchison's Prepaid
                                    mobile cellular telecommunication service has been fulfilled by the Customer
                                    and has been approved
                                    by Indosat Ooredoo Hutchison, which can be done by activating the Prepaid
                                    SIM Card that the Customer obtained.</li>
                                <li>Terms and Conditions apply to Customers who activate the Prepaid Service.
                                </li>
                                <li>There is no guarantee that the Prepaid Service is free of errors and
                                    disruptions, wherein in certain
                                    situations or places the Prepaid Service may not be available constantly or
                                    as it should be</li>
                                <li>Customer may not use, or allow another party to use, the Prepaid Service for
                                    any act that is illegal
                                    or against the law.</li>
                                <li>Customer is forbidden to misuse the Prepaid Service (including the
                                    subscription packs as determined by
                                    Indosat Ooredoo Hutchison), including excessive usage, and to use the
                                    Prepaid Service for any act against the
                                    law.</li>
                                <li>Customer agrees from time to time to receive offers, product information, or
                                    marketing programs that
                                    are disseminated by Indosat Ooredoo Hutchison and/or in cooperation with a
                                    third party.</li>
                                <li>Indosat Ooredoo Hutchison has the right to terminate this Terms and
                                    Conditions.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header w-100 indosat_medium">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Prepaid SIM Card
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body indosat_body">
                            <ol type="1" class="ng-scope">
                                <li>To subscribe for the Prepaid Service, Customer must activate the Prepaid SIM
                                    Card, followed by filling
                                    out the personal data properly and completely according to identifications
                                    (ID Card, Driver's License,
                                    Passport). The Prepaid SIM Card can only be activated within areas according
                                    to the activation area
                                    listed on the front of the Prepaid SIM Card's packaging. The Prepaid Service
                                    cannot be used if its
                                    activation/registration was done outside the mentioned areas</li>
                                <li>To keep using the Prepaid Service, Customer must ensure that the Prepaid SIM
                                    Card is always in the Active
                                    Period.</li>
                                <li>A Prepaid SIM Card in the Grace Period cannot use Prepaid Services</li>
                                <li>Indosat Ooredoo Hutchison is not responsible for any loss of Customer's
                                    phone credit on the when the card becomes
                                    an "Invalid Card", and the Customer will not claim Indosat Ooredoo Hutchison
                                    for damages in any form.</li>
                                <li>The Prepaid SIM Card is still a property of Indosat Ooredoo Hutchison,
                                    however Customer is responsible for all usage
                                    of the Prepaid SIM Card, including but not limited to, the event that the
                                    Prepaid SIM Card is used
                                    by another party.</li>
                                <li>Customer has the right for a replacement of any lost or damaged Prepaid SIM
                                    Card, and Indosat Ooredoo Hutchison
                                    has the right to charge administrative fees according to the terms set by
                                    Indosat Ooredoo Hutchison.</li>
                                <li>A damaged or lost Prepaid SIM Card can only be replaced according to the
                                    terms and conditions set by
                                    Indosat Ooredoo Hutchison. Indosat Ooredoo Hutchison is not responsible for
                                    any loss of phone credit from a Customer's
                                    Prepaid SIM Card that was damaged or lost.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header w-100 indosat_medium">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Limitation and Blocking
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body indosat_body">
                            <ol type="1" class="ng-scope">
                                <li>Indosat Ooredoo Hutchison has the right to do a blocking if the Prepaid SIM
                                    Card is suspected with good reason
                                    to have been used in any act against the law.</li>
                                <li>Indosat Ooredoo Hutchison has the right to do a limitation and blocking on
                                    Prepaid Services for a Customer who
                                    has been discovered to have sent text messages beyond the normal fair usage
                                    for text message transmission,
                                    whether with or without the aid of any tool in the transmission.</li>
                                <li>Indosat Ooredoo Hutchison has the right to do a blocking if the following
                                    were to happen: upon request of an authorized
                                    institution; if there is indication of misuse of the Prepaid SIM Card in any
                                    way that may cause damages,
                                    whether to Indosat Ooredoo Hutchison or to other customers.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-double"></div>
        <div class="col-md-6 offset-md-3 text-center mt-3">
            <a href="{{ route('home') }}" class="btn-custom font-weight-bold text-white sm-mb-30 indosat_bold" style="border-radius: 20px">@lang('frontend.button.to_homepage')</a>
        </div>
    </section>
@endsection


@push('js-plugin')
@endpush

@push('script')
@endpush
