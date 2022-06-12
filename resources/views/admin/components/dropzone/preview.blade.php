<?php $name = str_replace(".", "_", $item); ?>
<div class="dz-preview mb-3 dz-processing dz-image-preview dz-success dz-complete" id="{{$name}}">
    <div class="d-flex flex-row ">
        <div class="p-0 w-30 position-relative">
            <div class="dz-error-mark"><span><i></i></span></div>
            <div class="dz-success-mark"><span><i></i></span></div>
            <div class="preview-container">
                <img data-dz-thumbnail=""
                     class="img-thumbnail border-0" alt="9270-min.jpg"
                     src="{{asset("storage/".$path."/".$item)}}"><i class="simple-icon-doc preview-icon"></i></div>
        </div>
        <div class="pl-3 pt-2 pr-2 pb-1 w-70 dz-details position-relative">
            <div><span data-dz-name="">{{$item}}</span></div>
        </div>
    </div>
    <a href="#" class="remove dz-remove" onclick="deleteDropzoneImage{{$id ?? ''}}('{{$item}}')">
        <i class="glyph-icon simple-icon-trash"></i></a>
</div>
