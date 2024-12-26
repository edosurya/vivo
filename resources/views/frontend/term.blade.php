@extends('layouts.frontend')

@section('title', 'Photography Awards')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
        @vite(['resources/js/app.js'])
        <link href="{{ asset('frontend/css/homepage_2.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
        <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    @endpush

    @push('style')
    @endpush

@section('hero')
      <section class="pt-5 pb-5 bg-dark bg-img-main-banner" id="main-banner">
        <div class="container-fluid">
          <div class="row vivo-ipa-logo">
            <div class="col-12 col-md-8">
              <img alt="image" class="img-fluid"
                src="{{ asset('frontend/images/webp/vivo-ipa-logo.webp') }}">
            </div>
          </div>
        </div>
      </section>
@endsection

@section('content')

      <!-- ============================================-->
      <!-- <section> Category  ============================-->

      <section class="bg-100 py-7 section-has-bg" style="background-image: url({{ asset('frontend/images/webp/bg-section-category.webp') }});" id="form">
        <div class="container-lg mb-5">
          <div class="row">
            <div class="col-12 col-md-5 mb-5">
              <p class="text-white vivo_heavy text-uppercase fs-term-condition" >SYARAT & KETENTUAN</p>
                <ul class="text-white term-condition"><!-- 
                    <li style="color: #126479" class="mb-2"><span class="text-white">Peserta dapat mengikuti kompetisi ini lebih dari 1 kategori.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit</i> minimal 1 foto atau maksimal 5 foto untuk tiap kategori; <i>Portrait Photography, Nature Photography, Street Photography, Night Photography, dan Still Life Photography.</i></span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit</i> minimal 3 foto atau maksimal 5 foto khusus untuk kategori <i>Photo series.</i></span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Tidak diizinkan melakukan <i>Digital Imaging</i> berlebih, untuk <i>Retouching</i> gambar dasar diperbolehkan.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit High Resolution files</i> (HD minimal 1280x720 pixels).</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Berikan deskripsi maksimal 250 karakter untuk keseluruhan foto.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Gunakan watermark vivo.</li> -->
                    <li style="color: #126479" class="mb-2"><span class="text-white">Peserta dapat mengikuti lebih dari 1 kategori dalam kompetisi ini.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Unggah minimal 1 foto atau maksimal 5 foto untuk setiap kategori (Portrait Photography, Street Photography, Still Life Photography, Night Photography, dan Nature Photography).</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Unggah minimal 3 foto atau maksimal 5 foto khusus untuk kategori Series Photography.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Gunakan smartphone vivo dan aktifkan fitur watermark vivo.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Tidak diizinkan melakukan Digital Imaging berlebih; retouching gambar dasar diperbolehkan.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Unggah file dengan resolusi tinggi (High Definition/HD minimal 1280x720 pixels).</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Berikan judul dan deskripsi untuk menjelaskan setiap foto yang diunggah</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Penulisan judul maksimal 50 karakter dan deskripsi maksimal 250 karakter</span></li>

                </ul>
                <div class="fs-term-condition-other">
                <p class="text-white"> Untuk informasi lebih lanjut, silakan klik tautan berikut ini:</p>
                <button type="button" class="btn bg-black text-white mb-3 border-blue-gradient w-100 text-btn-padding" data-bs-toggle="modal" data-bs-target="#myModal">
                  <img alt="image" class="img-fluid me-2"
                src="{{ asset('frontend/images/webp/document.webp') }}" width="30">S&K vivo Imagine - Publik
                </button>
                <button type="button" class="btn bg-black text-white border-blue-gradient w-100 text-btn-padding" data-bs-toggle="modal" data-bs-target="#myModal1">
                  <img alt="image" class="img-fluid me-2"
                src="{{ asset('frontend/images/webp/document.webp') }}" width="30">S&K vivo Imagine - Internal
                </button>
                </div>
            </div>
          </div>
        </div>

      </section>


    @include('components.frontend.term-condition')

@endsection


@push('js-plugin')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

@endpush

@push('script')
@endpush
