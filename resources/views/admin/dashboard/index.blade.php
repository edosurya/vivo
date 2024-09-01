@extends('layouts.admin')

@section('title', 'Dashboard')

@section('style')
@endsection


@section('breadcrumb')
    <h4>Dashboard</h4>
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
        <li class="breadcrumb-item active">Index</li>
    </ol>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-12 card">
        <div class="card-body">
            <h3>Hello, Admin</h3>
        </div>
    </div>
     <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_total }}</h2>
                    {{-- <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Pending RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_pending }}</h2>
                    {{-- <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Approved RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_approved }}</h2>
                    {{-- <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-success">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Confirmed RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_confirmed }}</h2>
                    {{-- <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-danger">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Rejected RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_rejected }}</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-briefcase-check float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Waiting RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_waiting }}</h2>
                    
                </div>
            </div>
        </div>
    </div> 
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-briefcase-check float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Reallocated RSVP</h6>
                    <h2 class="mb-4 text-white">{{ $reservation_reallocated }}</h2>
                    
                </div>
            </div>
        </div>
    </div> 
    <div class="col-xl-3 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-briefcase-check float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Contact Us</h6>
                    <h2 class="mb-4 text-white">{{ $contact_us_total }}</h2>
                    
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- end row -->

{{-- <div class="row">

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earnings</h4>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h5 class="font-size-20">$56241</h5>
                        <p class="text-muted">Marketplace</p>
                    </div>
                    <div class="col-6">
                        <h5 class="font-size-20">$23651</h5>
                        <p class="text-muted">Total Income</p>
                    </div>
                </div>

                <div id="morris-donut-example" class="morris-charts morris-charts-height" dir="ltr"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Email Sent</h4>

                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h5 class="font-size-20">$ 89425</h5>
                        <p class="text-muted">Marketplace</p>
                    </div>
                    <div class="col-4">
                        <h5 class="font-size-20">$ 56210</h5>
                        <p class="text-muted">Total Income</p>
                    </div>
                    <div class="col-4">
                        <h5 class="font-size-20">$ 8974</h5>
                        <p class="text-muted">Last Month</p>
                    </div>
                </div>

                <div id="morris-area-example" class="morris-charts morris-charts-height" dir="ltr"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earnings</h4>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h5 class="font-size-20">$ 2548</h5>
                        <p class="text-muted">Marketplace</p>
                    </div>
                    <div class="col-6">
                        <h5 class="font-size-20">$ 6985</h5>
                        <p class="text-muted">Total Income</p>
                    </div>
                </div>

                <div id="morris-bar-stacked" class="morris-charts morris-charts-height" dir="ltr"></div>
            </div>
        </div>
    </div>

</div> --}}
<!-- end row -->

@endsection


@push('js-plugin')
@endpush

@push('script')
<script>
</script>
@endpush
