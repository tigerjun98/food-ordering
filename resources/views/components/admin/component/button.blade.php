@php
    $attrString = '';

    $defaultClass = ' btn text-capitalize ';
    if(isset($openModal)){
        $attributes['onclick'] = '$(this).openModal('.$openModal.')';
        unset($attributes['openModal']);
    }

    if(isset($redirect)){
        $attributes['onclick'] = "location.href='$redirect'";
        unset($attributes['redirect']);
    }

    unset($attributes['lang']);
    unset($attributes['icon']);

    $attributes['class'] = isset($class) ? $defaultClass.$class : $defaultClass;
    $attributes['type'] = isset($type) ? $type : 'button';
    foreach($attributes as $attrKey => $attrValue){
        $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

<button {!! $attrString !!}

@if(isset($tooltip))
    @if(is_array($tooltip))
        <?php
            $position = $tooltip[1];
            $title = $tooltip[0];
        ?>
    @endif

    data-toggle="tooltip"
    data-placement="{{ $position ?? 'top' }}"
    title="{{ $title ?? $tooltip }}"
    data-original-title="{{ $title ?? $tooltip }}"
@endif
>

    @if(isset($icon))
        <i class="{{ $icon }}"></i>
    @endif

    @if(isset($lang))
        {{ __('button.'.($lang ?? 'default')) }}
    @elseif(isset($text))
        {{ $text }}
    @endif

    {{ $body ?? '' }}
</button>
