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

<label class="form-group has-float-label mb-2 {{ $class ?? '' }}">
    <select {!! $attrString !!} {{$action ?? '' }}
        {{ isset($required) && $required ? 'required' : ''  }}
        {{ $disabled ?? 'disabled' }}
        {{ $readonly ?? 'readonly' }}
    >
    @if(isset($default))
        @foreach($default as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
        @endforeach
    @elseif(isset($options))
        @foreach($options as $key => $item)
            <option value="{{$key}}" >{{$item}}</option>
        @endforeach
    @endif
        {{$customOption ?? ''}}
    </select>

    <span>{{ __('common.'.$label ?? $name) }}
        <span class="text-danger">{{isset($required) ? null : '*' }}</span>
    </span>
    @if(isset($small))
        <small class="text-semi-muted" id="{{$smallID ?? ''}}">{{$small ?? ''}}</small>
    @endif
</label>

@if(isset($onchange) && $onchange)
    <script>
        $("#{{$id ?? $name}}").change(function() {
            $("#{{$id ?? $name}}").updateOption({
                id: '{{$onchange}}',
                @if(isset($onchangeValue) && $onchangeValue)
                val: '{{$onchangeValue}}'
                @endif
            });
        });
    </script>
@endif

@if(isset($data) && $data)
    <script>
        $(document).ready(function(){
            $('#{{$id ?? $name}}').val('{{$data->$name}}').trigger('change');
        });
    </script>
@elseif(isset($value) && $value)
    <script>
        $(document).ready(function(){
            $('#{{$id ?? $name}}').val('{{$value}}').trigger('change');
        });
    </script>
@else

@endif


