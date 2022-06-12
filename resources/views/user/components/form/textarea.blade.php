@if(isset($label) && $label)
    <label>
    {{__('common.'.$label)}}
    @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
    </label>
@endif
<textarea id="{{$id ?? $name}}"
          name="{{$name}}"
          placeholder="{{$placeholder ?? ''}}">@if(isset($value) && $value)value="{{$value}}"@elseif(isset($data) && $data)value="{{$data[$name]}}"@endif</textarea>
