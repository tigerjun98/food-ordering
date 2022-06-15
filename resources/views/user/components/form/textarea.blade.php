<fieldset class="message">
    @if(isset($label) && $label)
        <p class="title-infor-account">{{__('common.'.$label)}}
            @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
        </p>
    @else
        <p class="title-infor-account">{{__('common.'.$name)}}
            @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
        </p>
    @endif
    <textarea id="{{$id ?? $name}}"
              name="{{$name}}"
              placeholder="{{$placeholder ?? ''}}">@if(isset($value) && $value)value="{{$value}}"@elseif(isset($data) && $data)value="{{$data[$name]}}"@endif</textarea>

</fieldset>
