
<script src="<?php echo base_url("assets");?>/js/jquery-ui.js"></script>
<script src="<?php echo base_url("assets");?>/js/jquery.fileupload.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Multiple Image Upload
            </header>
            <div class="panel-body">
                <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select files...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="fileupload" type="file" name="files[]" multiple>
                </span>
                <br>
                <br>
                <!-- The global progress bar -->
                <div id="progress" class="progress">
                    <div class="progress-bar progress-bar-success"></div>
                </div>
                <!-- The container for the uploaded files -->
                <div id="files" class="files"></div>
            </div>
        </section>
    </div>
</div>

<script>
    /*jslint unparam: true */
    /*global window, $ */
    $(function() {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = "<?php echo base_url("upload.php");?>";
        var photoalbum="<?php echo $photoalbum;?>";
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function(e, data) {
                $.each(data.result.files, function(index, file) {
                    console.log(file);
                    $.get("<?php echo site_url("site/multipleimageuploadjson");?>",{name:file.name,image:file.name,photoalbum:photoalbum},function( ) {
                        $("#files").append("File "+file.name+" uploaded.</br>");
                    });
                });
            },
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>