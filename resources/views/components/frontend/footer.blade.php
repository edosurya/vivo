 <!-- footer begin -->
 <footer class="" style="padding:25px 0 0 0 !important">
    <div class="container">
        <div class="row d-flex align-items-middle">
            <div class="col-6 col-md-6 d-flex justify-content-center justify-content-md-start align-items-end">
                <img src="{{ asset('frontend/images/used/log.png') }}" class="logo-small"
                    alt="" width="100px"><br>
            </div>
            <div class="col-6 col-md-6 d-flex justify-content-center justify-content-md-end align-items-end">
                <a href="https://www.instagram.com/indonesia.aiday/" class="text-white" target="_blank"><img src="{{ asset('frontend/images/used/footer/Logo Sponsor IG Square_IG.png') }}" alt="" width="32px" class="logo-small"></a>&nbsp;
                {{-- <a href="https://www.tiktok.com/@indonesia.aiday?_t=8oVN3Qx8rmn&_r=1" class="text-white" target="_blank"><img src="{{ asset('frontend/images/used/footer/tiktok.png') }}" alt="" width="24px" class="logo-small"></i></a> --}}
                {{-- <p class="indosat_medium text-white"> --}}
                {{-- </p> --}}
            </div>
        </div>
        <hr class="m-1">
        <div class="row align-items-middle">
            <div class="col-md-6">
                <span class="indosat_body">
                    <a href="#" class="text-white" style="cursor: pointer" id="privacyPolicyBtn">@lang('frontend.menu.privacy_policy')</a>&nbsp;<span class="head_text_color">•</span>&nbsp;
                    <a class="text-white" href="#" style="cursor: pointer" id="termsConditionBtn">@lang('frontend.menu.terms_condition')</a>&nbsp;<span class="head_text_color">•</span>&nbsp;
                </span>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <p class="indosat_medium">Copyright © 2024 Indonesia AI Day. All rights reserved.
                </p>
            </div>
        </div>
    </div>


    {{-- <a href="#" id="back-to-top" class="custom-1"></a> --}}
</footer>

<!-- footer close -->

@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#privacyPolicyBtn', function() {
                $('#privacyPolicyModal').modal('show');
            });
            $(document).on('click', '#termsConditionBtn', function() {
                $('#termsConditionModal').modal('show');
            });
        });
    </script>
@endpush