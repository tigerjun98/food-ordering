@php

    $defaultClass= ' form-control ';
    $attributes['class'] = isset($class) ? $class.$defaultClass : $defaultClass;
    $attributes['name'] = $name;
    $attributes['rows'] = $rows ?? 2;
    $attributes['id'] = isset($id) ? $id : $name;

    $label = isset($lang) ? $lang : ( isset($label) ? $label : $name );
    $label = str_replace('[]', '', $label);

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

    <span>{{ $label }}
        <span class="text-danger">{{isset($required) && !$required ? '' : '*' }}</span>
    </span>

    @if(isset($remark))
        <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>

<script type="module">
    document.getElementById('{{ $attributes['id'] }}').addEventListener('input', function (evt) {
        let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });
    });
</script>
