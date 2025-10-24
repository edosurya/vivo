@extends('layouts.frontend')

@section('title', 'Beranda')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

@section('content')

      <section class="py-5 py-md-5 text-white section-pm">

        <div class="d-flex justify-content--center justify-content-lg-start  align-items-center min-vh-100">

          <div class="container-lg">
            <div class="row mb-3" data-aos="fade-down" data-aos-duration="1500">
              <div class="col-12 text-center">
                <span class="text-white vivo_bold mb-3 text-title-section" data-aos="fade-down" data-aos-duration="1500">Registrasi Ditutup</span>
              </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                <div class="mb-3 col-md-12 mb-0 pb-0 d-flex justify-content-center">
                  <div class="d-grid gap-2">
                    <a class="btn btn-register text-light vivo_medium" href="{{ route('home') }}">HOME</a>
                  </div>
                </div>
            </div>

          </div>

        </div>

      </section>

@endsection

