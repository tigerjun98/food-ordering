@php

    $defaultClass= ' form-control ';
    $attributes['class'] = isset($class) ? $class.$defaultClass : $defaultClass;
    $attributes['name'] = $name;
    $attributes['rows'] = $rows ?? 2;
    $attributes['id'] = isset($id) ? $id : $name;

    if( !isset($value) && isset($data->{$name}) ){
        $value = $data->{$name};
    }

    if(isset($value)){
         $attributes['value'] = $value;
    }

    unset($attributes['value']);
    unset($attributes['extraLabel']);
    unset($attributes['data']);
    unset($attributes['required']);

    $attrString = "";
    foreach($attributes as $attrKey => $attrValue){
      $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

<label class="form-group has-float-label tooltip-center-bottom mb-3">
    <textarea {!! $attrString !!}
        {{ isset($required) && $required ? 'required' : ''  }}
    >{{ $value ?? '' }}</textarea>

    <span>{{ isset($lang) ? __('common.'.$lang) : ( isset($label) ? $label : __('common.'.$name) ) }}
        <span class="text-danger">{{isset($required) && !$required ? '' : '*' }}</span>
    </span>

    @if(isset($remark))
        <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>

