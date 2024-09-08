<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>LaslesVPN | Landing &amp; Corporate Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/flaticon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/flaticon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/flaticon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    @vite(['resources/sass/theme.scss'])

    <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">

  </head>
  <body>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 vivo_regular" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/vivo-logo.png') }}" alt="" width="80" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active active" aria-current="page" href="#">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Photography Awards</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Galeri </a></li>
            </ul>
            <div class="py-3 py-lg-0">
              <img alt="image" src="{{ asset('frontend/images/fb.png') }}" width="25" height="25">
              <img alt="image" class="ms-2" src="{{ asset('frontend/images/ig.png') }}" width="26" height="26">
              <img alt="image" class="ms-2" src="{{ asset('frontend/images/yt.png') }}" width="30" height="30">
            </div>
          </div>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> Main Banner ============================-->


      <section class="pt-5 pb-5 bg-dark"
        style="min-height: 100vh; background-size: cover; background-position: center; background-image: url({{ asset('frontend/images/banner.png') }});" id="main-banner">
        <div class="container-fluid">
          <div class="row vivo-ipa-logo">
            <div class="col-12 col-md-8">
              <img alt="image" class="img-fluid"
                src="{{ asset('frontend/images/vivo-ipa-logo.png') }}">
            </div>
          </div>
        </div>
      </section>
     
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> How To ============================-->

      <section class="bg-100 py-7 text-white section-has-bg" style="background-image: url({{ asset('frontend/images/bg-section-2.png') }});" id="how-to">
        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-12 text-center mb-3">
              <p class="fs-how-to-desc mb-5">vivo menghubungkan semua orang untuk menangkap foto yang memperlihatkan keindahan dan emosi dalam momen sehari-hari. Melalui Joy In Us, vivo menginspirasi agar lebih eksploratif dan ekspresif berkarya melalui lensa kamera </p>
              <div class="fs-desc-schedule vivo_extraBold">
                <p class="mb-1">Kirimkan hasil karya anda</p>
                <p>23 Sep - 23 Nov 2024</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-10 col-md-4 text-center mb-3">
              <div class="d-grid gap-2">
                <button class="btn p-3 rounded-3 text-black vivo_heavy btn-register" type="button">REGISTER SEKARANG</button>
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

      <section class="bg-100 py-7 section-has-bg" style="background-image: url({{ asset('frontend/images/bg-section-3.png') }});">
        <div class="container-lg mb-5">
          <div class="row justify-content-center">
            <div class="col-10 col-lg-12 text-center mb-3">
              <h2 class="text-white vivo_heavy text-uppercase mb-3">Kategori</h2>
              <p class="desc mb-5 text-white">ikuti salah satu atau beberapa kategori Photography Awards, serta temukan inspirasi dari tiap kategori di galeri vivo Imagine.</p>
            </div>
          </div>

          <div class="row flex-center">

            <div class="col-4 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category1.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">POTRAIT PHOTOGRAPHY</p>
                </div>
              </div>
            </div>
      
            <div class="col-4 mt-4 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category2.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">STREET PHOTOGRAPHY</p>
                </div>
              </div>
            </div>

            <div class="col-4 mt-6 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category3.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">SERIES PHOTOGRAPHY</p>
                </div>
              </div>
            </div>


            <div class="col-4 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category4.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">STILL LIFE PHOTOGRAPHY</p>
                </div>
              </div>
            </div>

            <div class="col-4 mt-4 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category5.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">NIGHT PHOTOGRAPHY</p>
                </div>
              </div>
            </div>

            <div class="col-4 mt-6 p-col-mobile">
              <div class="position-relative">
                <img class="img-fluid rounded-4" src="{{ asset('frontend/images/category6.png') }}" alt="" />
                <div class="position-absolute bottom-0 panel-text img-tag text-center w-100">
                  <p class="pt-4 pb-1text-uppercase text-white vivo_bold text-center text-cat">NATURE PHOTOGRAPHY</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-lg mt-5 py-7">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h2 class="text-white vivo_heavy text-uppercase">Juri</h2>
            </div>
          </div>

          <div class="row text-center text-white">
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/ng-logo.png') }}" alt="" width="120" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/judge1.png') }}" alt="" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1"> Didi Kaspi</p>
                  <p class=" fs-judge-desc mb-1 vivo_extraLight lh-1">Social eco journalist. </p>
                  <p class="fs-judge-desc  vivo_extraLight lh-1">Editor in Chief of @natgeoindonesia</p>
              </div>
            </div>
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/vivozeiss-logo.png') }}" alt="" width="120" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/judge2.png') }}" alt="" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1">Lorem ipsum</p>
                  <p class="fs-judge-desc  mb-1 vivo_extraLight lh-1">Representative from Carl Seiz</p>
              </div>
            </div>
            <div class="col-4 p-col-mobile">
              <img class="mb-3" src="{{ asset('frontend/images/vg-logo.png') }}" alt="" width="120" />
              <img class="img-fluid rounded-3 mb-3" src="{{ asset('frontend/images/judge3.png') }}" alt="" />
              <div>
                  <p class="fs-judge-title vivo_bold mb-1"> Benny Lim</p>
                  <p class="fs-judge-desc mb-1 vivo_extraLight lh-1">vivographer winner 2020</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-4">
              <h2 class="text-white vivo_heavy text-uppercase">hadiah</h2>
            </div>
          </div>
          <div class="row  justify-content-center text-center">
            <div class="col-5 p-3 border border-white rounded-4 me-3">
              <p class="fs-prize-title text-white vivo_bold text-uppercase mb-0">Grand Prize</p>
              <p class="text-white vivo_light lh-1">Special Jury Awards</p>
              <div class="w-100">
                <img class="mb-3 d-lg-block d-none" src="{{ asset('frontend/images/50jt.png') }}" alt="" class="img-fluid" width="100%" />
                <img class="mb-3 d-block d-sm-none" src="{{ asset('frontend/images/50jt-mobile.png') }}" alt="" class="img-fluid" width="100%" />
                <img class="img-fluid" src="{{ asset('frontend/images/prize-desc-1.png') }}" alt="" />
              </div>
            </div>
            <div class="col-5 p-3 border border-white rounded-4">
              <p class="fs-prize-title text-white vivo_bold text-uppercase mb-0">6 Pemenang</p>
              <p class="text-white vivo_light lh-1 ">dari 6 kategori</p>
              <img class="mb-3 mb-3 d-lg-block d-none mx-auto" src="{{ asset('frontend/images/vivo-device.png') }}" alt="" class="img-fluid" width="50%" />
              <img class="mb-3 mb-3 d-block d-sm-none" src="{{ asset('frontend/images/vivo-device.png') }}" alt="" class="img-fluid" width="100%" />
              <img class="img-fluid" src="{{ asset('frontend/images/prize-desc-2.png') }}" alt="" />
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
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-4">
              <h2 class="text-white vivo_heavy text-uppercase">Periode</h2>
            </div>
          </div>

          <div class="row justify-content-center text-white">
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <h5 class="my-4 text-white vivo_bold fs-period-date">23 Sept 2024</h5>
                    <p class="vivo_extraLight fs-period-desc">Pendaftaran kompetisi fotografi vivo imagine dimulai</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <h5 class="my-4 text-white vivo_bold fs-period-date">23 Nov 2024</h5>
                    <p class="vivo_extraLight fs-period-desc">Pendaftaran kompetisi fotografi vivo imagine ditutup</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <h5 class="my-4 text-white vivo_bold fs-period-date">30 Nov 2024</h5>
                    <p class="vivo_extraLight fs-period-desc">Pengumuman 7 pemenang untuk menghadiri hari penghargaan </p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <h5 class="my-4 text-white vivo_bold fs-period-date">06 Des 2024</h5>
                    <p class="vivo_extraLight fs-period-desc">Hari penghargaan pemenang kompetisi fotografi vivo imagine</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4 p-col-mobile-desktop mt-4">
              <div class="card h-100 bg-period">
                <div class="inner">&nbsp;</div>
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                    <h5 class="my-4 text-white vivo_bold fs-period-date">08-31 Des 2024 </h5>
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
            <div class="row justify-content-center text-center mb-4">
              <div class="col-lg-8 col-xxl-7">
                 <h2 class="text-white vivo_heavy text-uppercase">Mekanisme</h2>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-4 p-col-mobile">
                <div class="text-center position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                   <img src="{{ asset('frontend/images/mechanism1.png') }}" alt="" class="img-fluid img-mechanism" />
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
                   <img src="{{ asset('frontend/images/mechanism2.png') }}" alt="" class="img-fluid img-mechanism"  />
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
                   <img src="{{ asset('frontend/images/mechanism3.png') }}" alt=""class="img-fluid img-mechanism" />
                  </div>
                  <p class="lead text-white mt-4 fs-desc-mechanism px-lg-3 mb-5 mb-lg-0 vivo_extraLight">Grand prize Special Jury Award dan 6 pemenang dari 6 kategori akan di umumkan pada 30 November 2024</p>
                </div>
              </div>
            </div>

            <div class="row justify-content-center text-center mb-4 mt-5">
              <div class="col-lg-10 col-xxl-7">
              <div class="d-grid gap-2">
                <button class="btn p-3 rounded-3 text-black vivo_heavy btn-register" type="button">REGISTER SEKARANG</button>
              </div>

              </div>
            </div>

          </div>
        </section>

      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <footer class="bg-white pt-4 pb-2">
        <div class="container">
          <div class="row">
            <div class="text-400 text-center">
              <p class="vivo_regular text-black">Copyright © PT vivo Mobile Indonesia. All right reserved.
              </p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </footer>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('frontend/js/lasles/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lasles/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lasles/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>

  </body>

</html>