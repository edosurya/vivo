@extends('layouts.frontend')

@section('title', 'Beranda')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
        <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
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
      <!-- <section> About Us ============================-->

      <section class="bg-100 py-7 text-white section-has-bg" style="background-image: url({{ asset('frontend/images/webp/bg-section-about-us.webp') }});" id="how-to">
        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-12 text-center mb-3"  >
              <p class="fs-how-to-desc mb-5" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">vivo menghubungkan semua orang untuk menangkap foto yang memperlihatkan keindahan dan emosi dalam momen sehari-hari. <br/>Melalui <span class="vivo_bold">Joy In Us</span>, vivo menginspirasi agar lebih eksploratif dan ekspresif berkarya melalui lensa kamera. </p>
              <div class="fs-desc-schedule vivo_extraBold" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                <p>Kirimkan hasil karya Anda!</p>
                <p class="mt-n3">23 Sep - 23 Nov 2024</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
            <div class="col-10 col-md-4 text-center mb-3">
              <div class="d-grid gap-2">
                <a class="btn p-3 rounded-3 text-black vivo_heavy btn-register fs-button-register" href="{{ url('/photographyawards') }}#form">REGISTER SEKARANG</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> Category  ============================-->

      <section class="bg-100 py-7 section-has-bg" style="background-image: url({{ asset('frontend/images/webp/bg-section-category.webp') }});">
        <div class="container-lg mb-5">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-10 col-lg-12 text-center mb-3">
              <h2 class="text-white vivo_heavy text-uppercase mb-3">Kategori</h2>
              <p class="desc mb-5 text-white fs-desc-category">Ikuti salah satu atau beberapa kategori Photography Awards, serta temukan inspirasi dari tiap kategori di galeri vivo Imagine.</p>
            </div>
          </div>

          <div class="row flex-center">

            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'potrait-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-portrait.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">POTRAIT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
      
            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'street-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-street.webp') }}" alt="" loading="lazy"/>
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>
        
            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'series-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-series.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">SERIES PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>


            <div class="col-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
            <a href="{{ route('gallery', ['category' => 'still-live-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-still-life.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">STILL LIFE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-4 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <a href="{{ route('gallery', ['category' => 'night-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-night.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

            <div class="col-4 mt-6 p-col-mobile" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a href="{{ route('gallery', ['category' => 'nature-photography']) }}">
              <div class="position-relative img-wrapper ">
                <img class="img-fluid rounded-4 inner-img" src="{{ asset('frontend/images/webp/bg-category-nature.webp') }}" alt="" loading="lazy" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-3 pb-3 mb-n1 text-uppercase text-white vivo_bold text-center fs-category-name">NATURE PHOTOGRAPHY</p>
                </div>
              </div>
            </a>
            </div>

          </div>

        </div>

        <div class="container-lg mt-5 py-7">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h2 class="text-white vivo_heavy text-uppercase">Juri</h2>
            </div>
          </div>

          <div class="row text-center text-white" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/webp/national-geographic-logo.webp') }}" alt="" width="120" loading="lazy" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/webp/judge-didi.webp') }}" alt="" loading="lazy" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1"> Didi Kaspi</p>
                  <p class=" fs-judge-desc mb-1 vivo_extraLight lh-1">Social eco journalist. </p>
                  <p class="fs-judge-desc  vivo_extraLight lh-1">Editor in Chief of @natgeoindonesia</p>
              </div>
            </div>
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/webp/vivozeiss-logo.webp') }}" alt="" width="120" loading="lazy" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/webp/judge-lorem.webp') }}" alt="" loading="lazy" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1">Carl Zeiss <small style="font-size:11px">Representatif</small> </p>
                  <p class="fs-judge-desc  mb-1 vivo_extraLight lh-1">Representative from Carl Zeiss</p>
              </div>
            </div>
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/webp/vg-logo.webp') }}" alt="" width="120" loading="lazy" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/webp/judge-benny.webp') }}" alt="" loading="lazy" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1"> Benny Lim</p>
                  <p class="fs-judge-desc mb-1 vivo_extraLight lh-1">vivographer winner 2020</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

        <div class="container-fluid">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-8 col-lg-5 text-center mb-4">
              <h2 class="text-white vivo_heavy text-uppercase">hadiah</h2>
            </div>
          </div>
          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-5 col-md-4 p-3 border border-white rounded-4 me-3 d-flex flex-column bd-highlight mb-3 text-center">
              <div class="bd-highlight">
                <p class="fs-prize-title text-white vivo_bold text-uppercase mb-0">Grand Prize</p>
                <p class="text-white vivo_light lh-1">Special Jury Awards</p>
              </div>
              <div class="p-2 bd-highlight">
                <img class="mb-3 d-sm-block d-none" src="{{ asset('frontend/images/webp/hadiah-50jt-desktop.webp') }}" alt="" class="img-fluid" width="100%" loading="lazy" />
                <img class="mb-3 d-block d-sm-none" src="{{ asset('frontend/images/webp/hadiah-50jt-mobile.webp') }}" alt="" class="img-fluid" width="100%" loading="lazy" />
              </div>
              <div class="p-2 bd-highlight">
                <img class="img-fluid" src="{{ asset('frontend/images/webp/prize-desc-1.webp') }}" alt=""  loading="lazy" />
              </div>
            </div>
            <div class="col-5 col-md-4 p-3 border border-white rounded-4 d-flex flex-column bd-highlight mb-3 text-center">
              <div class="bd-highlight">
                <p class="fs-prize-title text-white vivo_bold text-uppercase mb-0">6 Pemenang</p>
                <p class="text-white vivo_light lh-1 ">dari 6 kategori</p>
              </div>
              <div class="p-2 bd-highlight">
                <img class="mb-3 mb-3 d-sm-block d-none mx-auto" src="{{ asset('frontend/images/webp/hadiah-vivo-device.webp') }}" alt="" class="img-fluid" width="50%" loading="lazy" />
                <img class="mb-3 mb-3 d-block d-sm-none" src="{{ asset('frontend/images/webp/hadiah-vivo-device.webp') }}" alt="" class="img-fluid" width="100%" loading="lazy" />
              </div>
              <div class="p-2 bd-highlight">
                <img class="img-fluid" src="{{ asset('frontend/images/webp/prize-desc-2.webp') }}" alt="" loading="lazy" />
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> Periode ============================-->
      <section class="pb-6 bg-black">

        <div class="container-lg">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-8 col-lg-5 text-center mb-4">
              <h2 class="text-white vivo_heavy text-uppercase">Periode</h2>
            </div>
          </div>

          <div class="row justify-content-center text-white" data-aos="fade-up" data-aos-duration="2500" data-aos-once="true">
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <p class="my-4 text-white vivo_bold fs-period-date lh-1">23 Sept 2024</p>
                    <p class="vivo_extraLight fs-period-desc">Pendaftaran kompetisi fotografi vivo imagine dimulai</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <p class="my-4 text-white vivo_bold fs-period-date lh-1">23 Nov 2024</p>
                    <p class="vivo_extraLight fs-period-desc">Pendaftaran kompetisi fotografi vivo imagine ditutup</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <p class="my-4 text-white vivo_bold fs-period-date lh-1">30 Nov 2024</p>
                    <p class="vivo_extraLight fs-period-desc">Pengumuman 7 pemenang untuk menghadiri hari penghargaan </p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <p class="my-4 text-white vivo_bold fs-period-date lh-1">06 Des 2024</p>
                    <p class="vivo_extraLight fs-period-desc">Hari penghargaan pemenang kompetisi fotografi vivo imagine</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <p class="my-4 text-white vivo_bold fs-period-date lh-1">08-31 Des 2024 </p>
                    <p class="vivo_extraLight fs-period-desc">Pameran online hasil karya pemenang di website vivo imagine </p>
                </div>
              </div>
            </div>
          </div>

         </div>

      </section>


      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> Mechanism ============================-->

        <section class="pb-6 bg-black">
          <div class="container">
            <div class="row justify-content-center text-center mb-4" data-aos="fade-down" data-aos-duration="1500">
              <div class="col-lg-8 col-xxl-7">
                 <h2 class="text-white vivo_heavy text-uppercase">Mekanisme</h2>
              </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2500" data-aos-once="true">
              <div class="col-4 p-col-mobile">
                <div class="text-center position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                   <img src="{{ asset('frontend/images/webp/mechanism-1.webp') }}" alt="" class="img-fluid img-mechanism" loading="lazy" />
                  </div>
                  <p class="lead text-white mt-4 fs-desc-mechanism px-lg-3 mb-5 mb-lg-0 vivo_extraLight">Ambil foto menggunakan tipe smartphone vivo apapun</p>
                  <div class="arrow-icon position-absolute d-lg-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-4 p-col-mobile">
                <div class="text-center position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                   <img src="{{ asset('frontend/images/webp/mechanism-2.webp') }}" alt="" class="img-fluid img-mechanism"  loading="lazy" />
                  </div>
                  <p class="lead text-white  mt-4 fs-desc-mechanism px-lg-3 mb-5 mb-lg-0 vivo_extraLight">Registrasi dan upload karyamu di vivoimagine.id / photographyawards hingga 23 November 2024</p>
                  <div class="arrow-icon position-absolute d-lg-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-4 p-col-mobile">
                <div class="text-center position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                   <img src="{{ asset('frontend/images/webp/mechanism-3.webp') }}" alt=""class="img-fluid img-mechanism" loading="lazy" />
                  </div>
                  <p class="lead text-white mt-4 fs-desc-mechanism px-lg-3 mb-5 mb-lg-0 vivo_extraLight">Grand prize Special Jury Award dan 6 pemenang dari 6 kategori akan di umumkan pada 30 November 2024</p>
                </div>
              </div>
            </div>

            <div class="row justify-content-center text-center mb-4 mt-5">
              <div class="col-lg-10 col-xxl-7">
              <div class="d-grid gap-2">
                <a class="btn p-3 rounded-3 text-black vivo_heavy btn-register" href="{{ url('/photographyawards') }}#form">REGISTER SEKARANG</a>
              </div>

              </div>
            </div>

          </div>
        </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->

@endsection
