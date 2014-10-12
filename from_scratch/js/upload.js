Dropzone.autoDiscover = false;
var options = {
  url: 'searchContent.php?type=search',
  paramName: "file",
  clickable: true,
  acceptedFiles: 'image/*',
  addRemoveLinks: true,
  parallelUploads: 1,
  autoProcessQueue: false,
  createImageThumbnails: true,
  maxFiles: 1,
  maxFilesize: 1024,
  maxThumbnailFilesize: 10,
  thumbnailWidth: '250',
  thumbnailHeight: '250',
  dictRemoveFile: 'Delete',
  dictCancelUpload: 'Cancel',
  dictCancelUploadConfirmation: 'Are you sure want to cancel this upload ?',
  dictInvalidFileType: 'Currently we are not supporting these format!!!',
  dictFileTooBig: 'Sorry, you can\'t upload file(s) more than 1GB',
  dictResponseError: 'Sorry, for the inconvenience, some error occurred in server!!! <br> Upload after some time',
  dictMaxFilesExceeded: 'Sorry, you can\'t upload more than 2 files!!!',
  init: function() {
    this.on("uploadprogress", function(file, progress, byteSent) {
      //console.log(progress, byteSent);
    });

    this.on("success", function(file, responseText) {
     $("#dropzoneArea").parent().find('div').hide();
     $("#result").text("results");// console.log(file, responseText);
      var parsedData = $.parseJSON(responseText);
      console.log(parsedData);
    });

    this.on("addedfile",function(){
      $("#search").prop("disabled",false);
    });
    $("#search").click(function(){
       myDropzone.processQueue();
       $(this).parent().html('<img class="loader" src="../from_scratch/images/loading1.gif"></img>');
    
    });

    //this.on("removedfile", function(file) {
    //   if (files[file.name] != undefined) {
    // deleteList.push(files[file.name].iPath);
    // delete files[file.name];
    //   }
    //   if (0 == myDropzone.files.length) {
    // $('.cib_file_upload_holder').hide();
    // $('.cib_grid_holder').show();
    //   }
    // });
    // this.on("addedfile", function(file) {
    //   var filesize = (file.size / (1024 * 1024)).toFixed(1);
    //   $(file.previewElement).find('.filesize').html('<br>' + filesize + ' MB');
    //   disabledSave = setInterval(checkState, 1000);
    //   $('.cib_grid_holder').hide();
    //   $('.cib_file_upload_holder').show();
    //   addedFileInput = $(file.previewElement.querySelectorAll("[data-dz-name]"));
    //   var strLength = addedFileInput.val().length;
    //   addedFileInput.focus();
    //   addedFileInput[0].setSelectionRange(strLength, strLength);
    //   if (!file.type.match(/image.*/)) {
    // // This is not an image, so Dropzone doesn't create a thumbnail.
    // // Set a default thumbnail:
    // /* myDropzone.emit("thumbnail", file, thumbImage); */
    //   }
    // });
  }
};
var myDropzone = new Dropzone("#dropzoneArea", options);
