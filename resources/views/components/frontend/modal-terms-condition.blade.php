<div class="modal fade" id="termsConditionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body"
                style="background:url({{ asset('frontend/images/used/slider1.webp') }}) !important;object-fit:cover !important">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a class="font-weight-bold text-white sm-mb-30" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times" style="font-size: 24pt"></i>
                            </a>
                        </div>
                        @if (App::getLocale() == 'id')
                        @include('components.frontend.term-and-conditions-id')
                        @else
                        @include('components.frontend.term-and-conditions-en')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
