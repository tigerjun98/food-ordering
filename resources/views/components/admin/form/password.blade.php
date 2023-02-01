@php
    $attributes['class'] = isset($class) ? $class.' form-control' : 'form-control';
    $attributes['name'] = $name ?? 'password';
    $attributes['type'] = 'password';
    $attributes['id'] = isset($id) ? $id : $attributes['name'];
    $attrString = "";
    unset($attributes['extraLabel']);
    unset($attributes['data']);
    unset($attributes['required']);
    foreach($attributes as $attrKey => $attrValue){
       $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

<label class="form-group has-float-label mb-2">
    <input {!! $attrString !!} {{$action ?? '' }}
        {{ isset($required) && $required ? 'required' : ''  }}
    />

    <span>
        @if(isset($label))
            {{ __('common.'.$label) }}
        @else
            {{ __('common.'.$attributes['name']) }}
        @endif
            {{ isset($extraLabel) ? $extraLabel : '' }}
        @if(!isset($required))<span class="text-danger">*</span>@endif
    </span>

    @if(isset($remark))
        <small class="text-semi-muted" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>
