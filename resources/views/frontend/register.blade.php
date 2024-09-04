<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dropzone Sortable</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
</head>
<body>

    <!-- Upload section -->
    <section class="py-5">
        <div class="container py-5">
            <header class="mb-5">
                <h1 class="display-5 fw-bold mb-4">Laraaavel Dropzone image upload with Sortable</h1>
                <p class="lead text-muted mb-0">Upload at least one, but maximum five images, by drag and drop them into the area below, then you can change their display order by dragging.</p>
            </header>

                <p class="zoomable">
  
    </p>

            <form id="dzImageUploadForm" action="/upload" method="post" enctype="multipart/form-data">
              
                        <div class="row" style="background-size: cover;">

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="fullname">
                                    Nama Lengkap
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control indosat_body" name="fullname" id="fullname"
                                    placeholder="Nama Lengkap">
                                <label class="invalid-feedback fw-bold mb-3" id="fnErrorMessage"></label>

                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="email">
                                    Email Address
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="email" id="email"
                                    placeholder="Email Address">
                                <label class="invalid-feedback fw-bold mb-3" id="mailErrorMessage"></label>

                            </div>

                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="phone">
                                    No. Whatsapp
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="phone"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="phone"
                                            placeholder="08xxx">
                                            <label class="invalid-feedback fw-bold mb-3" id="phoneErrorMessage"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="referral_code">
                                   Referal Code
            
                                </label>
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="referral_code" id="referral_code"
                                            placeholder="Masukkan referal code">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="address">
                                    Alamat sesuai domisili
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="address" id="address"placeholder="Address" />
                                        <label class="invalid-feedback fw-bold mb-3" id="addrErrorMessage"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="device">
                                   Device
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="device" id="device">
                                        <option value="1" selected>Vivo</option>
                                        <option value="2">Non Vivo</option>
                                </select>

                            </div>

                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="age">
                                    Usia
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="age"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="age"
                                            placeholder="Usia">
                                        <label class="invalid-feedback fw-bold mb-3" id="ageErrorMessage"></label>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 col-md-12 mb-0 pb-0">
                                <label class="indosat_bold_body" for="vivo_id">
                                   Vivo ID Number
                     
                                </label>
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-0">
                                        <input type="text" class="form-control indosat_body" name="vivo_id" id="vivo_id"
                                            placeholder="Masukkan Vivo ID">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="category">
                                   Category
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="category" id="category">
                                        <option value="1" selected>Portrait Photography</option>
                                        <option value="2">Street Photography</option>
                                        <option value="3">Nature Photography</option>
                                        <option value="4">Night Photography</option>
                                        <option value="5">Still Life Photography</option>
                                        <option value="6">Series Photography</option>
                                </select>

                            </div>



                        </div>
                <div class="position-relative">
                    <div class="form-group mb-3">
                        <div class="main-drag-area form-control p-0" id="dzDropzone">
                            <div class="dz-message rounded-3 text-muted opacity-75" id="dzPlaceholder">
                                <svg class="opacity-50" width="50px" height="50px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M41.636 8.404l1.017 7.237 17.579 4.71a5 5 0 0 1 3.587 5.914l-.051.21-6.73 25.114A5.002 5.002 0 0 1 53 55.233V56a5 5 0 0 1-4.783 4.995L48 61H16a5 5 0 0 1-4.995-4.783L11 56V44.013l-1.69.239a5 5 0 0 1-5.612-4.042l-.034-.214L.045 14.25a5 5 0 0 1 4.041-5.612l.215-.035 31.688-4.454a5 5 0 0 1 5.647 4.256zm-20.49 39.373l-.14.131L13 55.914V56a3 3 0 0 0 2.824 2.995L16 59h21.42L25.149 47.812a3 3 0 0 0-4.004-.035zm16.501-9.903l-.139.136-9.417 9.778L40.387 59H48a3 3 0 0 0 2.995-2.824L51 56v-9.561l-9.3-8.556a3 3 0 0 0-4.053-.009zM53 34.614V53.19a3.003 3.003 0 0 0 2.054-1.944l.052-.174 2.475-9.235L53 34.614zM48 27H31.991c-.283.031-.571.032-.862 0H16a3 3 0 0 0-2.995 2.824L13 30v23.084l6.592-6.59a5 5 0 0 1 6.722-.318l.182.159.117.105 9.455-9.817a5 5 0 0 1 6.802-.374l.184.162L51 43.721V30a3 3 0 0 0-2.824-2.995L48 27zm-37 5.548l-5.363 7.118.007.052a3 3 0 0 0 3.388 2.553L11 41.994v-9.446zM25.18 15.954l-.05.169-2.38 8.876h5.336a4 4 0 1 1 6.955 0L48 25.001a5 5 0 0 1 4.995 4.783L53 30v.88l5.284 8.331 3.552-13.253a3 3 0 0 0-1.953-3.624l-.169-.05L28.804 14a3 3 0 0 0-3.623 1.953zM21 31a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM36.443 6.11l-.175.019-31.69 4.453a3 3 0 0 0-2.572 3.214l.02.175 3.217 22.894 5.833-7.74a5.002 5.002 0 0 1 4.707-4.12L16 25h4.68l2.519-9.395a5 5 0 0 1 5.913-3.587l.21.051 11.232 3.01-.898-6.397a3 3 0 0 0-3.213-2.573zm-6.811 16.395a2 2 0 0 0 1.64 2.496h.593a2 2 0 1 0-2.233-2.496zM10 13a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                                </svg>
                                <span>Drag your images here to upload</span>
                            </div>
                            <ul class="dz-previews-container" id="dzPreviews"></ul>
                        </div>
                    </div>
                    <div class="invalid-feedback fw-bold mb-3" id="dzErrorMessage"></div>
                </div>


                <div class="mb-3 col-md-12 mb-0 pb-0">
                    <label class="indosat_bold_body" for="img_desc">
                        Deskripsi Image
                        <span class="text-danger">*</span>
                    </label>
                    <div class="row">
                        <div class="col-12 col-md-10 mb-0">
                            <textarea class="form-control indosat_body" name="img_desc" id="img_desc" rows="4" cols="50"> </textarea>
                            <label class="invalid-feedback fw-bold mb-3" id="imgDescErrorMessage"></label>
                        </div>
                    </div>
                </div>

                
                <button class="btn btn-lg btn-primary fs-6 py-3 px-4 mt-2" id="dzSubmitButton">Submit Data</button>
            </form>
        </div>
    </section>

    <!-- Display section -->
    <section class="bg-white display-none py-5" id="uploadedImagesSection">
        <div class="container py-5">
            <header class="mb-5">
                <h1 class="display-5 fw-bold mb-4">Uploaded images in order</h1>
                <p class="lead text-muted mb-0">Below you can see the previously uploaded images, in your manually sorted ascending display order.</p>
            </header>
            <div id="previewsContainer"></div>
        </div>
    </section>

    <!-- Templates -->
    <script id="dzImageTemplate" type="text/template">
        <li class="data-details" data-id="">
            <div class="dz-metadata">
                <div class="filename" data-dz-name></div>
                <div class="filesize" data-dz-size></div>
            </div>
            <svg data-v-71847a66="" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle data-v-71847a66="" cx="12" cy="12" r="10"></circle><line data-v-71847a66="" x1="15" y1="9" x2="9" y2="15"></line><line data-v-71847a66="" x1="9" y1="9" x2="15" y2="15"></line></svg>  
        </li>
    </script>    
    <script id="dzAdditionalTemplate" type="text/template">
        <div class="dz-additional-area text-muted position-relative form-control d-flex align-items-center justify-content-center">
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

</body>



</html>