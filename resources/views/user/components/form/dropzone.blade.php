<div class="dropzone custom" id="receiptDropzone{{$id ?? ''}}">{{$data ?? ''}}</div>
<div class="form-row" id="uploadImg">
    <div class="col-md-12 mb-1 mt-2">
        <p class="mb-1 text-semi-muted text-small">{{$small ?? ''}}</p>
        <p class="mb-1 text-muted text-small">Max size : 10MB</p>
        <p class="text-muted text-small">Support : .png | .jpg | .jpeg</p>
    </div>
</div>
<span> @if(isset($label))
        {{ __('common.'.$label) }}
    @elseif(isset($name))
        {{ __('common.'.$name) }}
    @endif
        <span class="text-danger">{{isset($required) ? null : '*' }}</span>
    </span>


<script>

    $( document ).ready(function() {
        var myReceipt{{$id ?? ''}} = new Dropzone("#receiptDropzone{{$id ?? ''}}",{
            url: "{{$submitUrl ?? ''}}",
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10,
            maxFiles: {{$maxFile ?? 100}},
            timeout: 30000,
            acceptedFiles: ".jpeg,.jpg,.png",
            thumbnailWidth: 160,
            previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove dz-remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>',
            // transformFile: function(file, done) {
            //     const imageCompressor = new ImageCompressor();
            //     imageCompressor.compress(file, {
            //         // I assume the output image won't have the meta data anymore
            //         checkOrientation: true,
            //         quality: 0.3,
            //         convertSize: 0,
            //     })
            //         .then((result) => {
            //             // console.log(result);
            //             // Handle the compressed image file.
            //             done(result)
            //         })
            //         .catch((err) => {
            //             // Handle the error
            //             throw err
            //         })
            // }
        });

        myReceipt{{$id ?? ''}}.on("error", function(file, response) {
            $("#receiptDropzone{{$id ?? ''}}{{$id ?? ''}}").showLoading({
                show: false,
            });
            if(file.accepted == false){
                $("#app-alert").showAlert({
                    message: response, delay: 6000, status: 'danger'
                });
            }
            else{
                $("#app-alert").showAlert({
                    response, delay: 6000, status: 'danger'
                });
            }
            myReceipt{{$id ?? ''}}.removeFile(file);
        });

        myReceipt{{$id ?? ''}}.on("sending", function(file, xhr, formData) {
            $("#receiptDropzone{{$id ?? ''}}{{$id ?? ''}}").showLoading({
                show: true,
            });
            formData.append("_token", "{{ csrf_token() }}");
        });

        var images = [];
        myReceipt{{$id ?? ''}}.on("success", function(response) {
            $("#receiptDropzone{{$id ?? ''}}{{$id ?? ''}}").showLoading({
                show: false,
            });
            const obj = JSON.parse(response.xhr.response);
            let fileName = obj.data.prev;
            if(fileName){
                let prevFileName = fileName.replace(".", "_");
                $('#'+prevFileName).remove()
            }

            let newFileName = obj.data.new;
            {{--var src = '{{ asset("storage/receipts/:id") }}';--}}
            {{--src = src.replace(':id',fileName);--}}
            $(".dz-preview:last .dz-remove").attr('onclick','deleteDropzoneImage(`'+newFileName+'`)');
        });

    });


    async function deleteDropzoneImage{{$id ?? ''}}(filename){
        try {
            let result = await $("#updateTable").sendRequest({
                url: "{{ $deleteUrl ?? '' }}",
                data: {filename},
                alertSuccess: true
            });

            let name = filename.replace('.', '_');
            $("#"+name).remove();

        } catch(err) {
            $('#'+id).val('');
            console.log(err, 'admin.order.form');
        }
    }
</script>
<style>
    .dropzone {
        min-height: 115px !important;
        border: 1px solid rgb(32 27 64) !important;
        background: #ffffff08 !important;
        padding: 10px 10px !important;
        border-radius: 0.1rem !important;
        color: #3a3a3a !important;
        height: auto;
    }

    .dropzone .img-thumbnail {
        height: 100% !important;
        width: 100% !important;
        object-fit: cover !important; }

    .dropzone.dz-clickable .dz-message,
    .dropzone.dz-clickable .dz-message * {
        position: relative;
        transform: translateY(-50%);
        top: 50% !important;
        margin: 0; }

    .dropzone.dz-clickable .dz-message span {
        top: 50px !important; }

    .dropzone .dz-preview.dz-image-preview,
    .dropzone .dz-preview.dz-file-preview {
        width: 150px;
        height: 150px;
        min-height: unset;
        border: 1px solid #d7d7d7 !important;
        border-radius: 0.1rem !important;
        background: white !important;
        color: #3a3a3a !important;
        overflow: hidden;
    }
    .dropzone .dz-preview.dz-image-preview .preview-container,
    .dropzone .dz-preview.dz-file-preview .preview-container {
        transition: initial !important;
        animation: initial !important;
        margin-left: 0;
        margin-top: 0;
        position: relative;
        width: 150px;
        height: 149px; }
    .dropzone .dz-preview.dz-image-preview .preview-container i,
    .dropzone .dz-preview.dz-file-preview .preview-container i {
        color: #0050B4;
        font-size: 20px;
        position: absolute;
        left: 50%;
        top: 29px;
        transform: translateX(-50%) translateY(-50%) !important;
        height: 22px; }
    .dropzone .dz-preview.dz-image-preview strong,
    .dropzone .dz-preview.dz-file-preview strong {
        font-weight: normal; }
    .dropzone .dz-preview.dz-image-preview .remove,
    .dropzone .dz-preview.dz-file-preview .remove {
        position: absolute;
        right: 5px;
        top: 5px;
        color: #0050B4 !important; }
    .dropzone .dz-preview.dz-image-preview .dz-details,
    .dropzone .dz-preview.dz-file-preview .dz-details {
        position: static;
        display: block;
        opacity: 1;
        text-align: left;
        min-width: unset;
        z-index: initial;
        color: #3a3a3a !important; }
    .dropzone .dz-preview.dz-image-preview .dz-error-mark,
    .dropzone .dz-preview.dz-file-preview .dz-error-mark {
        color: #fff !important;
        top: 15px;
        left: 25px;
        margin-left: 0;
        margin-top: 0; }
    .dropzone .dz-preview.dz-image-preview .dz-error-mark span,
    .dropzone .dz-preview.dz-file-preview .dz-error-mark span {
        display: inline-block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 28 28'%3E%3Cpath style='fill:%2#0050B4;' d='M4.1,23.9A13.51,13.51,0,0,1,0,14,13.52,13.52,0,0,1,4.1,4.1,13.52,13.52,0,0,1,14,0a13.52,13.52,0,0,1,9.9,4.1A13.52,13.52,0,0,1,28,14a13.51,13.51,0,0,1-4.1,9.9A13.52,13.52,0,0,1,14,28,13.52,13.52,0,0,1,4.1,23.9Z'/%3E%3Cpath style='fill:%23FFFFFF;' d='M13.13,19.35V6.17a.88.88,0,1,1,1.75,0V19.35Z'/%3E%3Crect style='fill:%23FFFFFF;' x='13.13' y='21.07' width='1.75' height='1.64'/%3E%3C/svg%3E");
        width: 28px;
        height: 28px; }
    .dropzone .dz-preview.dz-image-preview .dz-success-mark,
    .dropzone .dz-preview.dz-file-preview .dz-success-mark {
        color: #fff;
        top: 15px;
        left: 25px;
        margin-left: 0;
        margin-top: 0; }
    .dropzone .dz-preview.dz-image-preview .dz-success-mark span,
    .dropzone .dz-preview.dz-file-preview .dz-success-mark span {
        display: inline-block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 28 28'%3E%3Cpath style='fill:%2#0050B4;' d='M4.1,23.9A13.51,13.51,0,0,1,0,14,13.52,13.52,0,0,1,4.1,4.1,13.52,13.52,0,0,1,14,0a13.52,13.52,0,0,1,9.9,4.1A13.52,13.52,0,0,1,28,14a13.51,13.51,0,0,1-4.1,9.9A13.52,13.52,0,0,1,14,28,13.52,13.52,0,0,1,4.1,23.9Z'/%3E%3Cpath style='fill:%23FFFFFF;' d='M20.14,8.81A.77.77,0,0,1,21.2,9a.81.81,0,0,1,.25.61.83.83,0,0,1-.25.62L12.48,19l-.11.1a.82.82,0,0,1-1.23,0L6.79,14.74l-.11-.16a.49.49,0,0,1-.08-.18,1.06,1.06,0,0,1,0-.19.61.61,0,0,1,0-.19,1.16,1.16,0,0,1,0-.18,1.26,1.26,0,0,1,.08-.18,1,1,0,0,1,.11-.15.87.87,0,0,1,1.26,0l3.69,3.7L19.94,9A.72.72,0,0,1,20.14,8.81Z'/%3E%3C/svg%3E");
        width: 28px;
        height: 28px; }
    .dropzone .dz-preview.dz-image-preview .dz-progress,
    .dropzone .dz-preview.dz-file-preview .dz-progress {
        width: 84%;
        margin-left: 0;
        margin-top: 0;
        right: 0;
        height: 5px !important;
        left: 15px; }
    .dropzone .dz-preview.dz-image-preview .dz-progress .dz-upload,
    .dropzone .dz-preview.dz-file-preview .dz-progress .dz-upload {
        width: 100%;
        background: #0050B4 !important; }
    .dropzone .dz-preview.dz-image-preview .dz-error-message,
    .dropzone .dz-preview.dz-file-preview .dz-error-message {
        border-radius: 15px;
        background: #c43d4b !important;
        top: 60px; }
    .dropzone .dz-preview.dz-image-preview .dz-error-message:after,
    .dropzone .dz-preview.dz-file-preview .dz-error-message:after {
        border-bottom: 6px solid #c43d4b !important; }
    .dropzone .dz-preview.dz-image-preview [data-dz-name],
    .dropzone .dz-preview.dz-file-preview [data-dz-name] {
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 50%;
        display: inline-block;
        overflow: hidden;
        display: none;
    }

    .dropzone .dz-preview.dz-file-preview .img-thumbnail {
        display: none;
    }

    .dropzone .dz-error.dz-preview.dz-file-preview .preview-icon {
        display: none; }

    .dropzone .dz-error.dz-preview.dz-file-preview .dz-error-mark,
    .dropzone .dz-error.dz-preview.dz-file-preview .dz-success-mark {
        color: #0050B4 !important; }

    .dropzone .dz-preview.dz-image-preview .preview-icon {
        display: none; }

    @-webkit-keyframes pulse-inner {
        0% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); }
        10% {
            -webkit-transform: scale(0.8, 1);
            -moz-transform: scale(0.8, 1);
            -ms-transform: scale(0.8, 1);
            -o-transform: scale(0.8, 1);
            transform: scale(0.8, 1); }
        20% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); } }

    @-moz-keyframes pulse-inner {
        0% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); }
        10% {
            -webkit-transform: scale(0.8, 1);
            -moz-transform: scale(0.8, 1);
            -ms-transform: scale(0.8, 1);
            -o-transform: scale(0.8, 1);
            transform: scale(0.8, 1); }
        20% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); } }

    @keyframes pulse-inner {
        0% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); }
        10% {
            -webkit-transform: scale(0.8, 1);
            -moz-transform: scale(0.8, 1);
            -ms-transform: scale(0.8, 1);
            -o-transform: scale(0.8, 1);
            transform: scale(0.8, 1); }
        20% {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1); } }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
        -webkit-animation: pulse-inner 3s ease infinite;
        -moz-animation: pulse-inner 3s ease infinite;
        -ms-animation: pulse-inner 3s ease infinite;
        -o-animation: pulse-inner 3s ease infinite;
        animation: pulse-inner 3s ease infinite; }

    .dropzone.dz-clickable .dz-default.dz-message{
        text-align: center;
        width: 100%;
        top: 50% !important;
        transform: translate(-50%, -50%);
        color: #fff;
        font-weight: 400;
        position: relative;
    }

    .dropzone .dz-preview.dz-image-preview .remove, .dropzone .dz-preview.dz-file-preview .remove {
        position: absolute;
        right: 5px;
        top: 9px;
        color: #fff !important;
        background: #dc3545;
        padding: 9px;
        border-radius: 12%;
    }
</style>

