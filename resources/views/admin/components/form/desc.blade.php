<label>{{ __('common.'.$label) }}</label>
<textarea class="ckeditor form-control" id="{{$name}}">{{$data->$name ?? ''}}</textarea>
@if(isset($data->product_desc_en) || isset($data->{$name}))
    <input type="hidden" value="{{$data->product_desc_en ?? $data->{$name} }}" name="{{$name}}" id="desc_{{$name}}">
@else
    <input type="hidden" name="{{$name}}" id="desc_{{$name}}">
@endif
@if(isset($small))
    <small>{{$small ?? ''}}</small>
@endif
<div class="mb-5"></div>

<script defer>
    CKEDITOR.config.allowedContent = true;
    CKEDITOR.replace('{{$name}}', {
        filebrowserUploadUrl: "{{route($uploadAssetLink, ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    }).on( 'change', function( evt ) {
        $('#desc_{{$name}}').val(evt.editor.getData())
    });
</script>
