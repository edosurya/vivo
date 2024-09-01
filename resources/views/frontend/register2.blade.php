@extends('layouts.frontend')


    @push('css-plugin')
        <link rel="stylesheet" href="{{ asset('admin/assets/libs/toastr/toastr.min.css') }}" />
        <link href="{{ asset('admin/assets/css/validation.css') }}" rel="stylesheet" type="text/css" />

    @endpush

@section('content')
    <section style="padding-top:45px !important">
        <div class="container">
            <div class="row d-flex g-5 align-items-center justify-content-around">
                <div class="col-md-12 col-lg-8 px-1 mx-auto" style="background-size: cover;">
                    <form id="reservationForm" enctype="multipart/form-data" method="post"
                        action="{{ route('register.store') }}">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="row" style="background-size: cover;">

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="fullname">
                                    Nama Lengkap
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control indosat_body" name="fullname" id="firstname"
                                    placeholder="Nama Lengkap">

                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="email">
                                    Email Address
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control indosat_body" name="email" id="email"
                                    placeholder="Email Address">
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
                                        <textarea class="form-control indosat_body" name="address" rows="4" cols="50"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="device">
                                   Device
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="device" id="device">
                                        <option value="" selected>Vivo</option>
                                        <option value="">Non Vivo</option>
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
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 col-md-12">
                                <label class="indosat_bold_body" for="category">
                                   Category
                                    <span class="text-danger">*</span>
                                </label>

                                <select class="form-control indosat_body" name="category" id="category">
                                        <option value="1" selected>Category 1</option>
                                        <option value="2">Category 2</option>
                                </select>

                            </div>


                            <img id="preview-image" width="300px">
                        <div class="mb-3">
                            <label class="form-label" for="input-image">Select Image:</label>
                            <input type="file" name="image" id="input-image" multiple class="form-control @error('images') is-invalid @enderror">
                            @error('images')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div id="select_file">
                            <div class="form-group">
                                <label>Upload Image</label>
                            </div>
                            <div class="form-group">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Select file...</span>
                                    <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload" type="file" name="files" accept="image/x-png, image/gif, image/jpeg" >
                            </span>
                                <br>
                                <br>
                                <!-- The global progress bar -->
                                <div id="progress" class="progress">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                                <!-- The container for the uploaded files -->
                                <div id="files" class="files"></div>
                                <input type="text" name="uploaded_file_name" id="uploaded_file_name" hidden>
                                <br>
                            </div>
                        </div>


                            @if (config('services.is_captcha'))
                                <div class="mb-3 col-md-12">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            @endif
                            <div class="my-3 col-md-12">
                                <button id="btn-reservation" type="submit"
                                    class="button-secondary indosat_bold py-3 px-5 rounded-full me-2 text-white"
                                    role="button"
                                    style="font-size:24px;background:url({{ asset('frontend/images/used/bg-speaker-other.png') }}) center no-repeat;background-size:cover;margin-bottom:10px !important">@lang('frontend.button.submit')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js-plugin')

    <!-- These are the necessary files for the image uploader -->


@endpush
@push('script')


        <script type="text/javascript">

        $(function () {
            $(document).ready(function () {
                var message = $('.success__msg');
                $('#UploadfileID').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        console.log('File has uploaded');
                        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
                        message.text("File Uploaded successfully.");
                        setTimeout(function () {
                            message.fadeOut();
                        }, 2000);
                        form.find('input:not([type="submit"]), textarea').val('');
                        var percentage = '0';
                    }
                });
            });
        });

        // $('#input-image').change(function(){    
        //     let reader = new FileReader();
           
        //     reader.onload = (e) => { 
        //         $('#preview-image').attr('src', e.target.result); 
        //     }   
            
        //     reader.readAsDataURL(this.files[0]); 
             
        // });
            
        $('#fileupload').fileupload(e){
               e.preventDefault();
               let formData = new FormData(this);
          
               $.ajax({
                    type:'POST',
                    url: "{{ route('image.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    done: function (e, data) {
                        console.log(data);
                    }
                    success: (response) => {
                        this.reset();
                        console.log('Image has been uploaded successfully');
                    },
                    error: function(response){
                        $('#image-upload').find(".print-error-msg").find("ul").html('');
                        $('#image-upload').find(".print-error-msg").css('display','block');
                        $.each( response.responseJSON.errors, function( key, value ) {
                            $('#image-upload').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                        });
                    }
               });
        });
              
    </script>
@endpush