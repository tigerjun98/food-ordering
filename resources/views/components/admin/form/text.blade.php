@php
    $attributes['class'] = isset($class) ? $class.' form-control' : 'form-control';
    $attributes['name'] = $name;
    $attributes['type'] = isset($type) ? $type : 'text';
    $attributes['id'] = isset($id) ? $id : $name;
    $attributes['value'] = isset($value) ? $value : (isset($data) && isset($data->{$name}) ? $data->{$name} : '' );
    $attrString = "";
    unset($attributes['extraLabel']);
    unset($attributes['data']);
    unset($attributes['required']);
    foreach($attributes as $attrKey => $attrValue){
       $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

<label class="form-group has-float-label mb-2 @if(isset($remark)) mb-4 @endif">
    <input {!! $attrString !!} {{$action ?? '' }}
        {{ isset($required) && $required ? 'required' : ''  }}
    />

    <span>
        @if(isset($label))
            {{ __('common.'.$label) }}
        @elseif(isset($name))
            {{ __('common.'.$name) }}
        @endif
            {{ isset($extraLabel) ? $extraLabel : '' }}
        @if(!isset($required))<span class="text-danger">*</span>@endif
    </span>

    @if(isset($remark))
        <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>
