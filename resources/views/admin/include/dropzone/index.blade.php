<div class="dropzone" id="receiptDropzone">
    @if(isset($data->product_images))
        @foreach($data->product_images as $key => $item)
            @component('admin.components.dropzone.preview', [
               'item'    => $item,
            ])
            @endcomponent
        @endforeach
    @endif
</div>
<div class="form-row position-relative" id="uploadImg">
    <div class="col-md-12 mb-1">
        <p class="mb-1 mt-1">Max size : 10MB</p>
        <p>Support : .png | .jpg | .jpeg</p>
    </div>
</div>

<script>
    var myReceipt = new Dropzone("#receiptDropzone",{
        url: "{{route('admin.product.uploadImage', $id)}}",
        paramName: "file", // The name that will be used to transfer the file
        // maxFilesize: 8,
        // maxFiles: 1,
        timeout: 30000,
        acceptedFiles: ".jpeg,.jpg,.png",
        thumbnailWidth: 160,
        previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove dz-remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>',
        transformFile: function(file, done) {
            const imageCompressor = new ImageCompressor();
            imageCompressor.compress(file, {
                // I assume the output image won't have the meta data anymore
                checkOrientation: true,
                quality: 0.3,
                convertSize: 0,
            })
                .then((result) => {
                    // console.log(result);
                    // Handle the compressed image file.
                    done(result)
                })
                .catch((err) => {
                    // Handle the error
                    throw err
                })
        }
    });

    myReceipt.on("error", function(file, message) {
        if(file.accepted == false){
            $("#app-alert").showAlert({
                message: 'Invalid file type', delay: 6000,
            });
        }
        else{
            $("#app-alert").showAlert({
                message
            });
        }
        myReceipt.removeFile(response);
    });

    myReceipt.on("sending", function(file, xhr, formData) {
        formData.append("_token", "{{ csrf_token() }}");
    });

    var images = [];
    myReceipt.on("success", function(response) {
        // myReceipt.removeFile(response);
        var fileName = response.xhr.response;
        var src = '{{ asset("storage/receipts/:id") }}';
        src = src.replace(':id',fileName);
        $(".dz-preview:last .dz-remove").attr('onclick','deleteDropzoneImage(`'+fileName+'`)');
    });

   async function deleteDropzoneImage(filename){
        try {
            let result = await $("#updateTable").sendRequest({
                url: "{{route('admin.product.deleteDropzoneImage', $id)}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    filename
                },
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
