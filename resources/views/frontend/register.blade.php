@extends('layouts.frontend')

@section('title', 'Beranda')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
        @vite(['resources/js/app.js'])
        <link href="{{ asset('frontend/css/homepage.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    @endpush

@section('hero')
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
@endsection

@section('content')

      <!-- ============================================-->
      <!-- <section> Category  ============================-->

      <section class="bg-100 py-7 section-has-bg" style="background-image: url({{ asset('frontend/images/bg-section-3.png') }});">
        <div class="container-lg mb-5">
          <div class="row justify-content-center">
            <div class="col-12 col-md-5 mb-5">
              <p class="text-white vivo_heavy text-uppercase fs-term-condition" data-aos="fade-right" data-aos-duration="1500">SYARAT & KETENTUAN</p>
                <ul class="text-white" data-aos="fade-up" data-aos-duration="1500">
                    <li style="color: #126479" class="mb-3"><span class="text-white">Peserta dapat mengikuti kompetisi ini lebih dari 1 kategori.</span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white"><i>Submit</i> minimal 1 foto atau maksimal 5 foto untuk tiap kategori; <i>Portrait Photography, Nature Photography, Street Photography, Night Photography, dan Still Life Photography.</i></span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white"><i>Submit</i> minimal 3 foto atau maksimal 5 foto khusus untuk kategori Photo series.</span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white">Tidak diizinkan melakukan <i>Digital Imaging</i> berlebih, untuk <i>Retouching</i> gambar dasar diperbolehkan.</span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white"><i>Submit High Resolution files</i> (HD minimal 1280x720 pixels).</span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white">Berikan deskripsi maksimal 250 karakter untuk keseluruhan foto.</span></li>
                    <li style="color: #126479" class="mb-3"><span class="text-white">Gunakan watermark vivo.</li>
                </ul>
            </div>
            <div class="col-12 col-md-7 mb-3">
              <p class="text-white vivo_heavy text-uppercase mb-3 fs-title-registrasi_form" data-aos="fade-down" data-aos-duration="1500">REGISTRASI SEKARANG</p>
              <div class="invalid-feedback fw-bold mb-3" id="dzErrorMessage"></div>

                <form id="dzImageUploadForm" action="/upload" method="post" enctype="multipart/form-data">

                    <div class="row text-white">
                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="fullname">
                                Nama Lengkap
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="fullname" id="fullname"
                                placeholder="Nama Lengkap">
                            <label class="invalid-feedback fw-bold mb-3" id="fnErrorMessage"></label>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="device">
                                Device
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-control" name="device" id="device">
                                <option value="1" selected>Vivo</option>
                                <option value="2">Non Vivo</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="email">
                                Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Email">
                            <label class="invalid-feedback fw-bold mb-3" id="mailErrorMessage"></label>
                        </div>

                        <div class="mb-3 col-md-6 mb-0 pb-0">
                            <label  class="vivo_bold" for="age">
                                Usia
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="age"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="age"
                                placeholder="Usia">
                            <label class="invalid-feedback fw-bold mb-3" id="ageErrorMessage"></label>

                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="phone">
                                WhatsApp
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text w-20">+62</span>
                                <input type="text" class="form-control" name="phone"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="phone"
                                    placeholder="No. WhatsApp">
                            </div>
                            <label class="invalid-feedback fw-bold mb-3" id="phoneErrorMessage"></label>
                        </div>

                        <div class="mb-3 col-md-6 mb-0 pb-0">
                            <label class="vivo_bold" for="referral_code">
                               Referral Code
                            </label>
                            <input type="text" class="form-control" name="referral_code" id="referral_code"
                                        placeholder="Referral Code">
                        </div>

                        <div class="mb-3 col-md-6 mb-0 pb-0">
                            <label class="vivo_bold" for="address">
                                Alamat
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="address" id="address"placeholder="Alamat sesuai domisili" />
                            <label class="invalid-feedback fw-bold mb-3" id="addrErrorMessage"></label>
                        </div>


                        <div class="mb-3 col-md-6 mb-0 pb-0">
                            <label class="vivo_bold" for="vivo_id">
                               Vivo ID Number
                            </label>
                            <input type="text" class="form-control indosat_body" name="vivo_id" id="vivo_id"
                                        placeholder="Masukkan Vivo ID">
                        </div>

                        <p class="text-white vivo_heavy text-uppercase mb-3 mt-5 fs-title-registrasi_form">UPLOAD</p>

                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="category">
                               Category
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-control" name="category" id="category">
                                    <option value="1" selected>Portrait Photography</option>
                                    <option value="2">Street Photography</option>
                                    <option value="3">Nature Photography</option>
                                    <option value="4">Night Photography</option>
                                    <option value="5">Still Life Photography</option>
                                    <option value="6">Series Photography</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-12 mb-0 pb-0">
                            <label class="indosat_bold_body" for="img_desc">
                                Deskripsi
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control indosat_body" name="img_desc" id="img_desc" rows="4" cols="50" maxlength="250" placeholder="Maksimal 250 karakter"> </textarea>
                            <label for="counter-input" class="label">Karakter <span id="counter-display" class="tag is-success">0</span>/250
                            <label class="invalid-feedback fw-bold mb-3" id="imgDescErrorMessage"></label>
                        </div>

                         <div class="mb-3 col-md-12 mb-0 pb-0">
                            <div class="form-group mb-3">
                                <div class="main-drag-area form-control p-0 border-0" id="dzDropzone">
                                    <div class="dz-message rounded-3 text-muted bg-blue-gradient-90 p-3 mb-2" id="dzPlaceholder" style="cursor: pointer;">
                                        <span class="text-black vivo_bold">Upload Photo</span>
                                        <svg class="dz-photo-icon opacity-75" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                        </svg>
                                        
                                    </div>
                                    <ul class="dz-previews-container p-0" id="dzPreviews"></ul>
                                </div>
                            </div>
                            <div class="invalid-feedback fw-bold mb-3" id="imgErrorMessage"></div>
                            <div class="invalid-feedback fw-bold mb-3" id="imgSeriesErrorMessage"></div>
                        </div>

                        <div class="mb-3 col-md-12 mb-0 pb-0">
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="checkTermAndCondition" name="checkTermAndCondition" checked>
                            <label class="form-check-label vivo_regular" for="checkTermAndCondition">Saya setuju dengan syarat dan ketentuan yang ditetapkan dalam perjanjian pengguna.</label>
                            <label class="invalid-feedback fw-bold mb-3" id="checkErrorMessage"></label>
                          </div>
                        </div>

                         <button class="btn p-3 rounded-3 text-black vivo_heavy btn-register" id="dzSubmitButton">SUBMIT</button>

                    </div>
                </form>

            </div>
          </div>
        </div>

      </section>


    <!-- Templates -->
    <script id="dzImageTemplate" type="text/template">
        <li class="data-details mb-2 rounded-2" data-id="">
            <div class="dz-metadata">
                <div class="filename" data-dz-name></div>
                <div class="filesize" data-dz-size></div>
            </div>
            <svg data-v-71847a66="" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle dz-remove-button" style="cursor: pointer;"><circle data-v-71847a66="" cx="12" cy="12" r="10"></circle><line data-v-71847a66="" x1="15" y1="9" x2="9" y2="15"></line><line data-v-71847a66="" x1="9" y1="9" x2="15" y2="15" ></line></svg>  
        </li>
    </script>    
    <script id="dzAdditionalTemplate" type="text/template">
        <div class="dz-additional-area text-muted position-relative form-control d-flex bg-blue-gradient-90 mb-2 rounded-2 border-0 p-3" style="cursor: pointer;">
            <span class="text-black vivo_bold">Upload Photo</span>
            <svg class="dz-photo-icon opacity-75" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
            </svg>
        </div>
    </script>
    <script id="dzLoadingOverlay" type="text/template">
        <div class="dz-loading-div">
            <div class="position-absolute w-100 h-100 start-0 top-0 d-flex align-items-center justify-content-center bg-white rounded-3 z-3">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </script>
    <script id="dzSuccessMessage" type="text/template">
        <div class="alert alert-success d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" />
            </svg>
            <span class="ms-2">Images successfully uploaded.</span>
        </div>
    </script>

@endsection


@push('js-plugin')
@endpush

@push('script')
<script type="text/javascript">
    (() => {
  const counter = (() => {
    const input = document.getElementById('img_desc'),
      display = document.getElementById('counter-display'),
      changeEvent = (evt) => display.innerHTML = evt.target.value.length,
      getInput = () => input.value,
      countEvent = () => input.addEventListener('keyup', changeEvent),
      init = () => countEvent();

    return {
      init: init
    }

  })();

  counter.init();

})();
</script>
@endpush
