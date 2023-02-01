@php
    $attrString = '';

    $defaultClass = ' btn btn-shadow ';
    if(isset($openModal)){
        $attributes['onclick'] = '$(this).openModal('.$openModal.')';
        unset($attributes['openModal']);
    }

    if(isset($redirect)){
        $attributes['onclick'] = "location.href='$redirect'";
        unset($attributes['redirect']);
    }

    $attributes['class'] = isset($class) ? $defaultClass.$class : $defaultClass;
    $attributes['type'] = isset($type) ? $type : 'button';
    foreach($attributes as $attrKey => $attrValue){
        $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

<button {!! $attrString !!} >

    @if(isset($lang))
        {{ __('button.'.($text ?? 'default')) }}
    @elseif(isset($text))
        {{ $text }}
    @endif

</button>
