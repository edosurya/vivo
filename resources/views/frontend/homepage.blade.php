@extends('layouts.frontend')

@section('title', 'Beranda')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

@php
$categories = [
  ['slug' => 'portrait-photography', 'label' => 'Portrait <br>Photography', 'image' => 'bg-cat-portrait.webp'],
  ['slug' => 'nature-architecture-photography', 'label' => 'Nature & Architecture <br>Photography', 'image' => 'bg-cat-nature.webp'],
  ['slug' => 'night-photography', 'label' => 'Night <br>Photography', 'image' => 'bg-cat-night.webp'],
  ['slug' => 'street-photography', 'label' => 'Street <br>Photography', 'image' => 'bg-cat-street2.webp'],
];


$judges = [
  ['name' => 'Benny Lim', 'job' => 'Professional Photographer', 'image' => 'juri-benny.webp'],
  ['name' => 'Didi Kaspi', 'job' => 'Social Eco Journalist & Editor in Chief of @natgeoindonesia', 'image' => 'juri-didi.webp'],
  ['name' => 'Keshav Chugh', 'job' => 'Senior Product Manager for Image Effects', 'image' => 'juri-keshav.webp'],
];
@endphp

@section('hero')
    <section class="main-banner"></section>
@endsection

@section('content')


      <!-- ============================================-->
      <!-- <section> About Us ============================-->

    <section class="py-5 py-md-5 text-white section-about-us" id="how-to">

        <div class="section-bg-image-about-us" style="background-image: url({{ asset('frontend/images/webp/bg-about-us.webp') }});
          "></div>

        <div class="container-lg mb-4">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-12 text-center mb-3">
              <span class="d-block text-white vivo_bold mb-4 text-title-section" data-aos="fade-down" data-aos-duration="1500">JOY IN NUSANTARA</span>
              <span class="d-block text-desc-section">vivo merayakan<span class="new-line pe-2"> keberagaman budaya Indonesia <span class="new-line pe-1">dengan mengabadikan keindahan,<br/>serta menangkap momen kebersamaan <span class="new-line pe-1"> yang menyatukan masyarakat <span class="new-line pe-1"> dari berbagai daerah</span>

            </div>
          </div>

          <div class="d-flex justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{ asset('frontend/images/webp/section-about-us.webp') }}" class="img-fluid my-4 rounded-3 img-responsive-custom" alt="Joy in Nusantara Image" loading="lazy" />
          </div>

          <div class="row d-flex justify-content-center">
            <div class="mb-3 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
              <span class="d-block text-desc-section">Kirimkan hasil karya Anda</span>
              <span class="d-block vivo_bold text-date-regist">
                5 Agustus<span class="line"></span>30 Oktober 2025
              </span>
            </div>
          </div>

          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
              <div class="mb-3 col-md-12 mb-0 pb-0 d-flex justify-content-center">
                <div class="d-grid gap-2">
                  <a class="btn btn-register text-light vivo_medium" href="{{ route('register.index') }}#register">REGISTRASI SEKARANG</a>
                </div>
              </div>
          </div>

        </div>

      </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> Category  ============================-->


    <section class="py-5 py-md-5 text-white section-category">

        <div class="section-bg-image-category" style="background-image: url({{ asset('frontend/images/webp/bg-category.webp') }});
          "></div>

        <div class="container-lg mb-4">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-12 text-center mb-3">
              <span class="d-block text-white vivo_bold mb-4 text-title-section text-uppercase" data-aos="fade-down" data-aos-duration="1500">Kategori</span>
              <span class="d-block text-desc-section">Temukan inspirasi dari tiap kategori <span class="new-line pe-1"></span>vivo Imagine Mobile Photography Competition</span>
            </div>
          </div>

          <div class="row flex-center mt-4 p-col-mobile">

            @foreach($categories as $cat)
              <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('gallery', ['category' => $cat['slug']]) }}#gallery">
                  <div class="position-relative img-wrapper ">
                    <img class="img-fluid inner-img" src="{{ asset('frontend/images/webp/' . $cat['image']) }}" alt="" loading="lazy"/>
                    <div class="position-absolute bottom-0 panel-text img-tag w-100">
                      <p class="mb-n1 text-light vivo_light fs-category-name">{!! $cat['label'] !!}</p>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach

          </div>
        </div>
      </section>


<!--       <section class="py-5 py-md-5 text-white section-judge">

        <div class="container-lg mb-4">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <span class="d-block text-white vivo_bold text-uppercase mb-3 text-title-section">Juri</span>
            </div>
          </div>

          <div class="row p-col-mobile d-flex justify-content-center">

          @foreach($judges as $judge)
            <div class="col-md-4 col-4 mb-4 d-flex p-col-mobile" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-judge w-100 d-flex flex-column h-100">
                <div class="judge img-wrapper">
                  <img class="img-fluid inner-img" src="{{ asset('frontend/images/webp/' . $judge['image']) }}" alt="" loading="lazy"/>
                </div>
                <div class="panel-text-gradient w-100 min-h-150">
                  <span class="d-block fs-judge-title text-light vivo_bold py-2">{{ $judge['name'] }}</span>
                  <span class="d-block fs-judge-desc  text-light vivo_light">{{ $judge['job'] }}</span>
                </div>
              </div>
            </div>
          @endforeach

          </div>

        </div>

      </section> -->


      <!-- <section class="py-5 py-md-5 text-white section-prize"> -->
      <section class="py-5 py-md-5 text-white section-judge">

        <div class="container-fluid">
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-md-8 col-lg-5 text-center mb-4">
              <span class="d-block text-white vivo_bold text-uppercase mb-3 text-title-section">Hadiah</span>
            </div>
          </div>
          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-5 col-md-4 p-3 me-3 mb-3 text-center box-prize ">
              <div class="p-2 m-w-50jt">
                <img class="mb-3 d-block prize-1" src="{{ asset('frontend/images/webp/prize-50jta.webp') }}" alt="" class="img-fluid" loading="lazy" />
              </div>
            </div>
            <div class="col-5 col-md-4 p-3 mb-3 text-center box-prize">
              <div class="p-2">
                <img class="mb-3 mb-3 d-block mx-auto prize-2" src="{{ asset('frontend/images/webp/prize-smartphone.webp') }}" alt="" class="img-fluid" loading="lazy" />
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> Periode ============================-->

      <section class="py-3 py-md-5 text-white section-pm">

        <div class="section-bg-image-pm" style="background-image: url({{ asset('frontend/images/webp/bg-section-pm.webp') }});
          "></div>

        <div class="container py-5 py-md-5">
          <!-- Judul -->
          <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1500">
            <div class="col-12 text-center mb-4">
              <span class="d-block vivo_bold text-uppercase mb-3 text-title-section">Periode Kompetisi</span>
            </div>
          </div>

          <!-- Gambar Tengah -->
          <div class="text-center mb-2 mb-md-7" data-aos="fade-in" data-aos-duration="1000">
            <img src="{{ asset('frontend/images/webp/period-line.webp') }}" class="img-fluid period-line-img" alt="Joy in Nusantara Image" loading="lazy" />
          </div>

          <!-- Wrapper Cards -->
          <div class="position-relative d-flex justify-content-between flex-wrap card-period-wrapper align-items-stretch" data-aos="fade-up" data-aos-duration="2500">
            <!-- Kiri -->
            <div class="card text-center card-period">
              <div class="card-body d-flex flex-column justify-content-start mx-auto h-100">
                <span class="d-block text-white vivo_bold fs-period-date period">5 Agustus<span class="line"></span><br/>30 Oktober 2025</span>
                <span class="d-block vivo_regular fs-period-desc fw-semibold">Periode registrasi & <br/>pengunggahan hasil foto</span>
              </div>
            </div>

            <!-- Tengah -->
            <div class="card text-center card-period">
              <div class="card-body d-flex flex-column justify-content-start mx-auto h-100">
                <span class="d-block text-white vivo_bold fs-period-date period">3<span class="line"></span>7 November 2025</span>
                <span class="d-block vivo_regular fw-semibold fs-period-desc">Seleksi awal & skoring juri</span>
              </div>
            </div>

            <!-- Kanan -->
            <div class="card text-center card-period">
              <div class="card-body d-flex flex-column justify-content-start mx-auto h-100">
                <span class="d-block text-white vivo_bold fs-period-date period">27 November 2025</span>
                <span class="d-block vivo_regular fw-semibold fs-period-desc">Pengumuman pemenang</span>
              </div>
            </div>
          </div>
        </div>


        <div class="container py-5 py-md-8">
              <div class="row justify-content-center text-center mb-4" data-aos="fade-down" data-aos-duration="1500">
                <div class="col-lg-8 col-xxl-7">
                  <span class="d-block vivo_bold text-uppercase mb-3 text-title-section">Mekanisme</span>
                </div>
              </div>

              <div class="row flex-center p-2 align-items-stretch p-col-mobile">

                <div class="col-md-4 col-4 mb-4 d-flex p-1 p-lg-3" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card card-step text-white text-center position-relative h-100 w-100">
                    <div class="step-number">1</div>
                    <div class="card-body d-flex flex-column justify-content-start align-items-center">
                      <img src="{{ asset('frontend/images/webp/step-1.webp') }}" alt="Step 1" class="step-icon mb-3" />
                      <span class="step-desc text-white text-center">
                        Ambil foto menggunakan smartphone vivo dengan mengaktifkan fitur <br/>watermark vivo
                      </span>
                    </div>
                  </div>
                </div>


                <div class="col-md-4 col-4 mb-4 d-flex p-1 p-lg-3" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card card-step text-white text-center position-relative h-100 w-100">
                    <div class="step-number">2</div>
                    <div class="card-body d-flex flex-column justify-content-start align-items-center">
                      <img src="{{ asset('frontend/images/webp/step-2.webp') }}" alt="Step 2" class="step-icon mb-3" />
                      <span class="step-desc text-white text-center">
                        Registrasi & unggah karyamu <span class="new-line pe-1"></span> <a href="{{ route('register.index') }}#register"> di sini</a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-4 mb-4 d-flex p-1 p-lg-3" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card card-step text-white text-center position-relative h-100 w-100">
                    <div class="step-number">3</div>
                    <div class="card-body d-flex flex-column justify-content-start align-items-center">
                      <img src="{{ asset('frontend/images/webp/step-3.webp') }}" alt="Step 3" class="step-icon mb-3" />
                      <span class="step-desc text-white text-center">
                        Nantikan pengumuman pemenang
                      </span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
                <div class="mb-3 col-md-12 mb-0 pb-0 d-flex justify-content-center">
                  <div class="d-grid gap-2">
                    <a class="btn btn-register text-light vivo_medium" href="{{ route('register.index') }}#register">REGISTRASI SEKARANG</a>
                  </div>
                </div>
              </div>
        </div>


        </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->

@endsection

@push('js-plugin')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
@endpush

@push('script')
<script type="text/javascript">
   $(function() {
    $('.scroll-down').click (function() {

      var windowHeight = window.innerHeight;
      var percent = 80;
      var percentPixel = windowHeight * (percent / 100);

      $('html, body').animate({scrollTop: percentPixel }, 'slow');
      return false;
    });
  });
</script>
@endpush
