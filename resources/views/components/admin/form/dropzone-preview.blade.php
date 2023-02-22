<div class="dz-preview mb-1 dz-processing dz-image-preview dz-success dz-complete" id="{{ $refId ?? '' }}">
    <div class="d-flex flex-row ">
        <div class="p-0 w-30 position-relative">
            <div class="dz-error-mark"><span><i></i></span></div>
            <div class="dz-success-mark"><span><i></i></span></div>
            <div class="preview-container">
                <img data-dz-thumbnail=""
                     class="img-thumbnail border-0" alt="9270-min.jpg"
                     src="{{ $src ?? '' }}"><i class="simple-icon-doc preview-icon"></i></div>
        </div>
        <div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative">
            <div><span data-dz-name="">{{ $refId }}</span></div>
            <a href="{{ $src ?? '' }}" target="_blank" class="open_image">View</a>
        </div>
    </div>
    <a href="javascript:deleteDropzoneImage{{$id ?? ''}}('{{ $refId ?? '' }}')" class="remove dz-remove">
        <i class="glyph-icon simple-icon-trash"></i>
    </a>

</div>
<style>
    .open_image{
        position: relative;
        color: #0050b4;
        padding: 0;
        text-decoration: underline;
        font-weight: 500;
    }
</style>
