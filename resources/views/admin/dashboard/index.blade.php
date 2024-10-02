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
     <div class="col-xl-12 col-sm-12">
        <div class="card mini-stat bg-secondary">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Creator</h6>
                    <h2 class="mb-4 text-white">{{ $creator_total }}</h2>
                </div>
            </div>
        </div>
    </div>

    <h2> Data Source </h2>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Direct</h6>
                    <h2 class="mb-4 text-white">{{ $direct_total }}</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Banner</h6>
                    <h2 class="mb-4 text-white">{{ $small_banner_total }}</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Community</h6>
                    <h2 class="mb-4 text-white">{{ $community_total }}</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Facebook</h6>
                    <h2 class="mb-4 text-white">{{ $fb_total }}</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Instagram</h6>
                    <h2 class="mb-4 text-white">{{ $ig_total }}</h2>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-sm-12">
        <div class="card mini-stat bg-warning">
            <div class="card-body mini-stat-img">
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">X</h6>
                    <h2 class="mb-4 text-white">{{ $x_total }}</h2>
                </div>
            </div>
        </div>
    </div>

    <h2> Images </h2>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Portrait Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category1_total }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Street Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category2_total }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Series Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category3_total }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Still Life Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category4_total }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Night Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category5_total }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-buffer float-end"></i>
                </div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Images Nature Photography</h6>
                    <h2 class="mb-4 text-white">{{ $images_category6_total }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->



@endsection


@push('js-plugin')
@endpush

@push('script')
<script>
</script>
@endpush
