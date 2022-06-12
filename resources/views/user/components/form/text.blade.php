<div class="billing-info mb-25">
    @if(isset($label) && $label)
        <label>{{__('common.'.$label)}}
            @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
        </label>
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
        {{isset($required) ? '' : 'required' }}
    />
    @if(isset($small))
        <small class="text-semi-muted">{{$small ?? ''}}</small>
    @endif
</div>
