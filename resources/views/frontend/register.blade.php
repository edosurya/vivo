@extends('layouts.frontend')

@section('title', 'Photography Awards')
@section('meta_title', 'vivo IMAGINE')
@section('meta_description','vivo IMAGINE')

    @push('css-plugin')
        @vite(['resources/js/app.js'])
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
      <!-- <section> Category  ============================-->

      <section class="bg-100 py-7 section-has-bg" style="background-image: url({{ asset('frontend/images/webp/bg-section-category.webp') }});" id="form">
        <div class="container-lg mb-5">
          <div class="row justify-content-center">
            <div class="col-12 col-md-5 mb-5">
              <p class="text-white vivo_heavy text-uppercase fs-term-condition" >SYARAT & KETENTUAN</p>
                <ul class="text-white">
                    <li style="color: #126479" class="mb-2"><span class="text-white">Peserta dapat mengikuti kompetisi ini lebih dari 1 kategori.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit</i> minimal 1 foto atau maksimal 5 foto untuk tiap kategori; <i>Portrait Photography, Nature Photography, Street Photography, Night Photography, dan Still Life Photography.</i></span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit</i> minimal 3 foto atau maksimal 5 foto khusus untuk kategori <i>Photo series.</i></span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Tidak diizinkan melakukan <i>Digital Imaging</i> berlebih, untuk <i>Retouching</i> gambar dasar diperbolehkan.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white"><i>Submit High Resolution files</i> (HD minimal 1280x720 pixels).</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Berikan deskripsi maksimal 250 karakter untuk keseluruhan foto.</span></li>
                    <li style="color: #126479" class="mb-2"><span class="text-white">Gunakan watermark vivo.</li>
                </ul>
            </div>
            <div class="col-12 col-md-7 mb-3">
              <p class="text-white vivo_heavy text-uppercase mb-3 fs-title-registrasi_form" >REGISTRASI SEKARANG</p>
              
                <div class="alert alert-danger invalid-feedback fw-bold mb-4" id="dzErrorMessage" role="alert">
                </div>

                <form id="dzImageUploadForm" action="/upload" method="post" enctype="multipart/form-data" class="position-relative">

                    <div class="row text-white" id="theForm">
                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="fullname">
                                Nama
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
                               vivo ID Number
                            </label>
                            <input type="text" class="form-control indosat_body" name="vivo_id" id="vivo_id"
                                        placeholder="Masukkan Vivo ID">
                        </div>

                        <p class="text-white vivo_heavy text-uppercase mb-3 mt-5 fs-title-registrasi_form">UPLOAD</p>

                        <div class="mb-3 col-md-6">
                            <label class="vivo_bold" for="category">
                               Kategory
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
                            <textarea class="form-control indosat_body" name="img_desc" id="img_desc" rows="4" cols="50" maxlength="250" placeholder="Maksimal 250 karakter"></textarea>
                            <label for="counter-input" class="label">Karakter <span id="counter-display" class="tag is-success">0</span>/250
                            <label class="invalid-feedback fw-bold mb-3" id="imgDescErrorMessage"></label>
                        </div>

                         <div class="mb-3 col-md-12 mb-0 pb-0">
                            <div class="form-group mb-3">
                                <div class="mb-3"><h6 class="text-white vivo_light"><i>Upload photo max 20Mb* </i></h6></div>
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

                        <div class="mb-3 col-md-12 mb-0 pb-0 d-grid">
                            <button class="btn p-3 rounded-3 text-black vivo_heavy btn-register" id="dzSubmitButton">SUBMIT</button>
                        </div>
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
            <svg  style="cursor: pointer;" width="36px" height="36px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="dz-remove-button" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96967C9.73741 8.67678 9.26253 8.67678 8.96964 8.96967C8.67675 9.26256 8.67675 9.73744 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2626 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9697L13.0606 12L15.0303 10.0303C15.3232 9.73746 15.3232 9.26258 15.0303 8.96969C14.7374 8.6768 14.2625 8.6768 13.9696 8.96969L12 10.9394L10.0303 8.96967Z" fill="#2e2e2e"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0574 1.25H11.9426C9.63424 1.24999 7.82519 1.24998 6.41371 1.43975C4.96897 1.63399 3.82895 2.03933 2.93414 2.93414C2.03933 3.82895 1.63399 4.96897 1.43975 6.41371C1.24998 7.82519 1.24999 9.63422 1.25 11.9426V12.0574C1.24999 14.3658 1.24998 16.1748 1.43975 17.5863C1.63399 19.031 2.03933 20.1711 2.93414 21.0659C3.82895 21.9607 4.96897 22.366 6.41371 22.5603C7.82519 22.75 9.63423 22.75 11.9426 22.75H12.0574C14.3658 22.75 16.1748 22.75 17.5863 22.5603C19.031 22.366 20.1711 21.9607 21.0659 21.0659C21.9607 20.1711 22.366 19.031 22.5603 17.5863C22.75 16.1748 22.75 14.3658 22.75 12.0574V11.9426C22.75 9.63423 22.75 7.82519 22.5603 6.41371C22.366 4.96897 21.9607 3.82895 21.0659 2.93414C20.1711 2.03933 19.031 1.63399 17.5863 1.43975C16.1748 1.24998 14.3658 1.24999 12.0574 1.25ZM3.9948 3.9948C4.56445 3.42514 5.33517 3.09825 6.61358 2.92637C7.91356 2.75159 9.62177 2.75 12 2.75C14.3782 2.75 16.0864 2.75159 17.3864 2.92637C18.6648 3.09825 19.4355 3.42514 20.0052 3.9948C20.5749 4.56445 20.9018 5.33517 21.0736 6.61358C21.2484 7.91356 21.25 9.62177 21.25 12C21.25 14.3782 21.2484 16.0864 21.0736 17.3864C20.9018 18.6648 20.5749 19.4355 20.0052 20.0052C19.4355 20.5749 18.6648 20.9018 17.3864 21.0736C16.0864 21.2484 14.3782 21.25 12 21.25C9.62177 21.25 7.91356 21.2484 6.61358 21.0736C5.33517 20.9018 4.56445 20.5749 3.9948 20.0052C3.42514 19.4355 3.09825 18.6648 2.92637 17.3864C2.75159 16.0864 2.75 14.3782 2.75 12C2.75 9.62177 2.75159 7.91356 2.92637 6.61358C3.09825 5.33517 3.42514 4.56445 3.9948 3.9948Z" fill="#2e2e2e"></path> </g></svg> 
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
            <div class="position-absolute w-100 h-100 start-0 top-0 d-flex align-items-center justify-content-center rounded-3 z-3">
                <div class="spinner-border text-white" role="status">
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
            <span class="ms-2">Data berhasil disimpan.</span>
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
