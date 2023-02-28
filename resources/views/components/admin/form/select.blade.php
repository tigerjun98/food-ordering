@php
    $defaultClass= ' form-control ';
    if(!isset($ajax) || isset($js))
        $defaultClass .= ' select2-single ';

    $attributes['class'] = isset($class) ? $class.$defaultClass : $defaultClass;
    $attributes['name'] = $name;
    $attributes['id'] = isset($id) ? $id : $name;
    $attributes['id'] = str_replace('[]', '', $attributes['id']);

    $label = isset($lang) ? __('label.'.$lang) : ( isset($label) ? $label : __('label.'.$name) );
    $label = str_replace('[]', '', $label);

    if( !isset($value) && isset($data->{$name}) ){
        $value = $data->{$name};
    }

    unset($attributes['options']);
    unset($attributes['value']);
    unset($attributes['extraLabel']);
    unset($attributes['data']);
    unset($attributes['required']);
    unset($attributes['ajax']);

    $attrString = "";
    foreach($attributes as $attrKey => $attrValue){
        $attrString .= "{$attrKey}=\"{$attrValue}\"";
    }
@endphp

@if(isset($col))<div class="col-{{ $col }}">@endif
<label class="form-group has-float-label tooltip-center-bottom mb-3">
    <select data-width="100%" {!! $attrString !!} {{$action ?? '' }}
        {{ isset($required) && $required ? 'required' : ''  }}
    >
        <option label="&nbsp;">&nbsp</option>
        @if(isset($options))
            @foreach($options as $key => $item)
                <option value="{{$key}}" >{{$item}}</option>
            @endforeach
        @endif
        {{$customOption ?? ''}}
    </select>

    <span>{{ $label }}
        <span class="text-danger">{{isset($required) && !$required ? '' : '*' }}</span>
    </span>


@if(isset($remark))
        <small class="text-semi-muted mb-2" id="{{ $remarkId ?? '' }}">{{ $remark ?? '' }}</small>
    @endif
</label>
@if(isset($col))</div>@endif

{{--@if(isset($onchange) && $onchange)--}}
{{--    <script>--}}
{{--        $("#{{$id ?? $name}}").change(function() {--}}
{{--            $("#{{ $attributes['id'] }}").updateOption({--}}
{{--                id: '{{$onchange}}',--}}
{{--                @if(isset($onchangeValue) && $onchangeValue)--}}
{{--                val: '{{$onchangeValue}}'--}}
{{--                @endif--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endif--}}

<script type="module">

    $('#{{ $attributes['id'] }}').change(function (){
        let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });
    });

    @if(!isset($customOption) )
        @if(!isset($multiple))
            $('#{{ $attributes['id'] }}').val('{{ $value ?? '' }}').trigger('change');
        @endif
    @endif


    @if(isset($ajax))
        $('#{{ $attributes['id'] }}').initialiseDynamicSelect2({url: '{{ $ajax }}'});
    @endif

    {{ $js ?? '' }}

</script>

