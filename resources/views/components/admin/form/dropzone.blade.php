@php
$id = $id ?? uniqid();
@endphp
<div class="dropzone" id="dropzone-{{$id ?? ''}}">
    <div class="dz-message" data-dz-message><span>{{ trans('common.drop_file_to_upload') }}</span></div>
    {{$data ?? ''}}
</div>

<div class="form-row position-relative">
    <div class="col-md-12 mb-1 mt-2">
        <p class="mb-1 text-semi-muted text-small">{{$small ?? ''}}</p>
        <p class="mb-1 text-muted text-small">Max size : 5MB</p>
        <p class="text-muted text-small">Support : .png | .jpg | .jpeg</p>
    </div>
</div>

<script type="module">
    var myDropzone{{$id ?? ''}} = $('#dropzone-{{$id ?? ''}}').initialiseDropzone({
        url: "{{$submitUrl ?? ''}}",
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 5000,
        maxFiles: {{ $maxFile ?? 100 }},
        timeout: 30000,
        acceptedFiles: ".jpeg,.jpg,.png",
        thumbnailWidth: 160,
        // previewTemplate: '<div class="dz-preview dz-file-preview mb-3"><div class="d-flex flex-row "><div class="p-0 w-30 position-relative"><div class="dz-error-mark"><span><i></i></span></div><div class="dz-success-mark"><span><i></i></span></div><div class="preview-container"><img data-dz-thumbnail class="img-thumbnail border-0" /><i class="simple-icon-doc preview-icon" ></i></div></div><div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative"><div><span data-dz-name></span></div><div class="text-primary text-extra-small" data-dz-size /><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div><a href="#/" class="remove dz-remove" data-dz-remove><i class="glyph-icon simple-icon-trash"></i></a></div>',
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

    myDropzone{{$id ?? ''}}.on("error", function(file, response) {
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
        myDropzone{{$id ?? ''}}.removeFile(file);
    });

    const getRefId = () => {
        let elem = document.querySelector("[name='id']");
        return elem ? elem.value : ''
    }

    myDropzone{{$id ?? ''}}.on("sending", function(file, xhr, formData) {
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("ref_id", getRefId());
        @if(isset($sendingData))
        @foreach($sendingData as $name => $value)
        formData.append("{{ $name }}", '{{ $value }}');
        @endforeach
        @endif
    });

    var images = [];
    myDropzone{{$id ?? ''}}.on("success", function(response) {
        const obj = JSON.parse(response.xhr.response);
        let refId = obj.data.id;
        // let prevFileName = fileName.replace(".", "_");
        // $('#'+prevFileName).remove()
        // let newFileName = obj.data.new;
        {{--var src = '{{ asset("storage/receipts/:id") }}';--}}
        {{--src = src.replace(':id',fileName);--}}
        $(".dz-preview:last .dz-remove").attr('onclick','deleteDropzoneImage{{$id ?? ''}}(`'+refId+'`)');

        if (typeof refreshImg === "function") {
            refreshImg()
        }
    });
</script>

<script type="text/javascript">
    const deleteDropzoneImage{{$id ?? ''}} = async(refId) => {
        let result = await $(this).sendRequest({
            url: "{{ $deleteUrl ?? '' }}".replace(':id', refId),
        });

        let name = refId.replace('.', '_');
        $("#"+name).remove();
        if (typeof refreshImg === "function") {
            refreshImg()
        }
    }
</script>
