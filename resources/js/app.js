/**
 * ------------------------------------------------------------------------------------
 * PROJECT SETUP
 * ------------------------------------------------------------------------------------
 */

// imports
import './bootstrap.js';
import 'jquery-ui/dist/jquery-ui';
import { Dropzone } from 'dropzone';

import AOS from 'aos';
AOS.init();


// ajax csrf setup
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// set global variables
const errorMessage = $('#dzErrorMessage');
const fnErrorMessage = $('#fnErrorMessage');
const mailErrorMessage = $('#mailErrorMessage');
const phoneErrorMessage = $('#phoneErrorMessage');
const addrErrorMessage = $('#addrErrorMessage');
const ageErrorMessage = $('#ageErrorMessage');
const imgDescErrorMessage = $('#imgDescErrorMessage');
const imgSeriesErrorMessage = $('#imgSeriesErrorMessage');
const imgErrorMessage = $('#imgErrorMessage');
const checkErrorMessage = $('#checkErrorMessage');


const placeHolder = $('#dzPlaceholder');

/**
 * ------------------------------------------------------------------------------------
 * DROPZONE SETUP
 * ------------------------------------------------------------------------------------
 */

Dropzone.autoDiscover = false;

/**
 * Dropzone initial setup
 */
const myDropzone = new Dropzone('#dzDropzone', {
    url: '/upload',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 5,
    thumbnailWidth: 800,
    thumbnailHeight: 500,
    allowedFileExtensions: ['.jpg', '.jpeg', '.png'],
    previewTemplate: $('#dzImageTemplate').html(),
    previewsContainer: '#dzPreviews',
    acceptedFiles: 'image/*',
    maxFilesize: 20,
});

/**
 * If files dragged into dropzone
 */
myDropzone.on('addedfile', function(file) {

    // hide placeholder and error messages
    imgErrorMessage.hide();
    placeHolder.hide();
    
    // Generate a temporary identifier for each file (data-id)
    file.tempId = 'temp_' + file.name + '_' + file.size + '_' + file.lastModified;
    file.previewElement.setAttribute('data-id', file.tempId);

    // add additional upload areas
    updateAdditionalAreas();
});

/**
 * If dropzone has validation errors
 */
myDropzone.on('error', function(file, response) {
    errorMessage.show().text(response.message);
    this.removeFile(file);

    // add additional upload areas
    updateAdditionalAreas();
});

/**
 * On sending images to request
 */
myDropzone.on('sendingmultiple', function(file, xhr, formData) {
    const loadingDiv = $('#dzLoadingOverlay').html();

    // show loading div
    // $('#dzImageUploadForm').append(loadingDiv);

    // attach csrf token
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append("fullname", $('#fullname').val());
    formData.append("email", $('#email').val());
    formData.append("phone", $('#phone').val());
    formData.append("address", $('#address').val());
    formData.append("device", $('#device').val());
    formData.append("age", $('#age').val());
    formData.append("category", $('#category').val());
    formData.append("desc", $('#img_desc').val());
    formData.append("referral_code", $('#referral_code').val());
    formData.append("vivo_id", $('#vivo_id').val());
    // console.log(formData);

});

/**
 * Adjust additional upload areas
 */
function updateAdditionalAreas() {
    let additionalTemplate = $('#dzAdditionalTemplate').html();
    let filesCount = myDropzone.files.length;
    let additionalAreas = 0;

    // remove all additional areas first
    $('.dz-additional-area').remove();

    // count how many additional areas needed
    additionalAreas = 5 - filesCount;

    // render the needed additional areas
    for (let i = 0; i < additionalAreas; i++) {
        $(myDropzone.previewsContainer).append(additionalTemplate);
    }
}

$(document).on('click', '#addMore', function(event) {
    updateAdditionalAreas();
})

/**
 * If an additional area is clicked
 */
$(document).on('click', '.dz-additional-area', function() {
    if (myDropzone.hiddenFileInput) {

        // open the file browser
        myDropzone.hiddenFileInput.click();
    }
});

/**
 * Remove image function
 */
$(document).on('click', '.dz-remove-button', function(event) {
    event.preventDefault();
    event.stopPropagation();

    // find the corresponding dropzone object
    const filePreview = $(this).closest('.dz-image-preview');
    const tempId = filePreview.data('id');
    const fileToRemove = myDropzone.files.find(function(file) {
        return file.tempId === tempId;
    });

    if (fileToRemove) {

        // remove the file
        myDropzone.removeFile(fileToRemove);

        // delay the execution of the layout adjustment
        setTimeout(() => {

            // if there are no more files, show the upload prompt again
            if (myDropzone.files.length === 0) {

                placeHolder.show();
                $('.dz-additional-area').remove();

            } else { 

                // update the additional areas in case the count needs adjusting
                updateAdditionalAreas(); 
            }
        }, 10);
    }

    // hide error messages
    imgErrorMessage.hide();
});

/**
 * ------------------------------------------------------------------------------------
 * SUBMIT IMAGES
 * ------------------------------------------------------------------------------------
 */

/**
 * On successful upload
 */
myDropzone.on('successmultiple', function(response) {
    const successMessage = $('#dzSuccessMessage').html();

    // remove files from dropzone & hide form
    myDropzone.removeAllFiles();
    $('#dzImageUploadForm').fadeOut(500)

    // hide loading div & show success message
    setTimeout(function() {
        $('.dz-loading-div').fadeOut();
        $(successMessage).insertBefore('#dzImageUploadForm').slideDown();
    }, 500);
});

/**
 * Submit images upload
 */
$('#dzSubmitButton').on('click', function(event) {
    event.preventDefault();
    errorMessage.hide();
    imgErrorMessage.hide();
    fnErrorMessage.hide();
    mailErrorMessage.hide();
    phoneErrorMessage.hide();
    addrErrorMessage.hide();
    ageErrorMessage.hide();
    imgDescErrorMessage.hide();

    const validateEmail = (email) => {
      return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
    };

    let error = 0;

     // show error messages if fullname is empty
    let fullname = document.forms["dzImageUploadForm"]["fullname"].value;
    if(fullname == null || fullname == "") {
        error = error+1;
        fnErrorMessage.show().text('Required');
    }

    // show error messages if email is empty or wrong format
    let email = document.forms["dzImageUploadForm"]["email"].value;
    if(email == null || email == "") {
        error = error+1;
        mailErrorMessage.show().text('Required');
    } else if (!validateEmail(email)) {
        error = error+1;
        mailErrorMessage.show().text('Wrong format');
    }

    // show error messages if phone is empty
    let phone = document.forms["dzImageUploadForm"]["phone"].value;
    if(phone == null || phone == "") {
        error = error+1;
        phoneErrorMessage.show().text('Required');

    }

    // show error messages if address is empty
    let address = document.forms["dzImageUploadForm"]["address"].value;
    if(address == null || address == "") {
        error = error+1;
        addrErrorMessage.show().text('Required');
    }

    // show error messages if age is empty
    let age = document.forms["dzImageUploadForm"]["age"].value;
    if(age == null || age == "") {
        error = error+1;
        ageErrorMessage.show().text('Required');
    }

    // show error messages if Image Description is empty
    let desc = document.forms["dzImageUploadForm"]["img_desc"].value;
    if(desc == null || desc == " ") {
        error = error+1;
        imgDescErrorMessage.show().text('Required');
    }

    // show error messages if CheckBox is empty
    let check = document.querySelector('#checkTermAndCondition').checked;
    console.log(check);
    if(!check) {
        error = error+1;
        checkErrorMessage.show().text('Required');
    }

    let cat = document.forms["dzImageUploadForm"]["category"].value;
    if(cat == 6) {
        console.log(myDropzone.files.length );
        // show error messages if not have enough images
        if (myDropzone.files.length < 3) {
            error = error+1;
            errorMessage.show().text('You have to upload at least 3 image.');
        }
    }

    // show error messages if not have enough images
    if (myDropzone.files.length === 0) {
        error = error+1;
        imgErrorMessage.show().text('You have to upload at least 1 image.');
    }

    if(error < 1) {
        // process the queue
        myDropzone.processQueue();
    }
});
 