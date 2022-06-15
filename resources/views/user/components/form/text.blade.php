<div class="info-title info-account">
<fieldset class="input-box">
    @if(isset($label))
        @if($label != '')
            <p class="title-infor-account">{{__('common.'.$label)}}
                @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
            </p>
        @endif
    @else
        <p class="title-infor-account">{{__('common.'.$name)}}
            @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
        </p>
    @endif
    <input type="{{isset($type) ? $type : 'text'}}"
           id="{{$id ?? $name}}"
           name="{{$name}}"
           @if(isset($value) && $value)
           value="{{$value}}"
           @elseif(isset($data) && $data)
           value="{{$data[$name]}}"
           @endif

           placeholder="{{$placeholder ?? ''}}"

        {{$action ?? '' }}
        {{isset($disabled) ? 'disabled' : '' }}
        {{isset($readonly) ? 'readonly' : '' }}
        {{isset($required) ? '' : 'required' }}
    />
    @if(isset($small))
        <small class="text-semi-muted">{{$small ?? ''}}</small>
    @endif
</fieldset>
</div>
