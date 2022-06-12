<label class="form-group has-float-label {{isset($style) ? $style : ''}}">
    <input class="form-control {{isset($class) ? $class : ''}}"
           type="{{isset($type) ? $type : 'text'}}"
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
            {{isset($disabled) ? 'disabled' : '' }}
            {{isset($onchange) ? 'onchange='.$onchange.'(this)' : '' }}
    />
    <span>
        @if(isset($label))
            {{ __('common.'.$label) }}
        @endif

        <span class="text-danger">{{isset($required) ? null : '*' }}</span>
    </span>
    @if(isset($small))
        <small class="text-semi-muted" id="{{$smallID ?? ''}}">{{$small ?? ''}}</small>
    @endif
</label>


