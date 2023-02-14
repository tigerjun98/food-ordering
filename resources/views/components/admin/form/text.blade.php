@php

    $isDate = isset($type) && $type == 'date';
    $isPhone = isset($type) && $type == 'phone';

    $defaultClass= ' form-control ';
    $defaultClass.= $isDate ? ' datepicker ' : '';
    $defaultClass.= $isPhone ? ' intl-tel-input ' : '';

    $attributes['class'] = isset($class) ? $class.$defaultClass : $defaultClass;
    $attributes['name'] = $name;
    $attributes['type'] = isset($type) && !$isDate ? $type : 'text';
    $attributes['id'] = isset($id) ? $id : $name;

    $label = isset($lang) ? __('label.'.$lang) : ( isset($label) ? $label : __('label.'.$name) );
    $label = str_replace('[]', '', $label);

    if( !isset($value) && isset($data->{$name}) ){
        $value = $data->{$name};
        if($isDate){
            $value = date('Y-m-d', strtotime($value));
        }

        if($isPhone){
            $value = '+'.$value;
        }
    }

    if(isset($value)){
         $attributes['value'] = $value;
    }

    unset($attributes['icon-end']);
    unset($attributes['extraLabel']);
    unset($attributes['data']);
    unset($attributes['required']);

    $attrString = "";
    foreach($attributes as $attrKey => $attrValue){
      $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

@if(isset($col))<div class="col-{{ $col }}">@endif
<label class="form-group has-float-label tooltip-center-bottom mb-3">

    @if(isset($iconEnd))
        <div class="input-group">
    @endif

            <input {!! $attrString !!} {{$action ?? '' }}
                {{ isset($required) && $required ? 'required' : ''  }}
            />

    @if(isset($iconEnd))
            <span class="input-group-text input-group-append input-group-addon" id="icon-end-{{ $attributes['id'] }}">
                {!! $iconEnd !!}
            </span>
        </div>
    @endif


    <span>{{ $label }}
        <span class="text-danger">{{isset($required) && !$required ? '' : '*' }}</span>
    </span>

    @if(isset($remark))
        <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>

@if(isset($col))</div>@endif

<script type="module">
    document.getElementById('{{ $attributes['id'] }}').addEventListener('input', function (evt) {
        let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });
    });

    @if($isPhone)
        const iti{{$attributes['id']}} = $('#{{$attributes['id']}}').intlTelInputForm({
            name: '{{ $attributes['name'] }}'
        })
    @endif

    @if($isDate)
        $(document).ready(function(){
            $("#{{ $attributes['id'] }}").datepicker({
                autoclose: true,
                format: "yyyy-mm-dd",
                rtl: false,
                orientation: "bottom auto",
                templates: {
                    leftArrow: '<i class="simple-icon-arrow-left"></i>',
                    rightArrow: '<i class="simple-icon-arrow-right"></i>'
                }
            });
        });
    @endif
</script>
