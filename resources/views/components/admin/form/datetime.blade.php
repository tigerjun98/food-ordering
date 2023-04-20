@php

    $isDate = isset($type) && $type == 'date';
    $defaultClass= ' form-control datetimepicker-input ';

    $attributes['class'] = isset($class) ? $class.$defaultClass : $defaultClass;
    $attributes['name'] = $name;
    $attributes['type'] = 'text';
    $attributes['id'] = isset($id) ? $id : $name;
    $attributes['autocomplete'] = 'off';

    $label = isset($lang) ? __('label.'.$lang) : ( isset($label) ? $label : __('label.'.$name) );
    $label = str_replace('[]', '', $label);

    if( !isset($value) && isset($data->{$name}) ){
        $value = $data->{$name};
        $value = date('Y-m-d h:i A', strtotime($value));
    }

    if(isset($value)){
         $attributes['value'] = $value;
    }

    if(isset($disabled) && !$disabled){
        unset($attributes['disabled']);
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
    <label class="form-group has-float-label tooltip-center-bottom mb-3" id="date-container-{{ $attributes['id'] }}">
        <div class="input-group datetime" data-target-input="nearest">
            <input {!! $attrString !!} {{$action ?? '' }}
                {{ isset($required) && $required ? 'required' : ''  }}
            />

            <span
                data-toggle="datetimepicker"
                data-target="#{{$attributes['id']}}"
                class="input-group-text input-group-append input-group-addon" id="icon-end-{{ $attributes['id'] }}">
                <i class="iconsminds-calendar-4"></i>
            </span>
        </div>
        <span>{{ $label }}
        <span class="text-danger">{{isset($required) && !$required ? '' : '*' }}</span>
    </span>

        @if(isset($remark))
            <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
        @endif
    </label>

    @if(isset($col))</div>@endif

<style>
    .bootstrap-datetimepicker-widget {
        width: initial !important;
    }
</style>
<script type="module">

    "focusin input".split(" ").forEach(function(e){
        document.getElementById('{{ $attributes['id'] }}').addEventListener(e, function (evt) {
            let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
            $(parent).find('div.error-msg').each(function(i, obj) {
                $(obj).remove()
            });
        });
    });


    $(document).ready(function(){
        $('#{{ $attributes['id'] }}').datetimepicker({
            keepOpen: true,
            format: 'YYYY-MM-DD h:mm A',
            icons: {
                time: "simple-icon-speedometer",
                date: "simple-icon-calendar",
                up: "simple-icon-arrow-up",
                down: "simple-icon-arrow-down",
                previous: 'simple-icon-arrow-left',
                next: 'simple-icon-arrow-right',
            }
        });
        {{--}).datepicker("setDate", new Date());--}}
    });
</script>
