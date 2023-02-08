<label class="form-group has-float-label mb-2 {{isset($class) ? $class : ''}}">
    <select class="form-control select2-single" data-width="100%" name="{{$name}}"
            id="{{$id ?? $name}}" {{$action ?? ''}}>
        @if(isset($option) && $option)
            @foreach($option as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
            @endforeach
        @endif
        {{$customOption ?? ''}}
    </select>

    <span> {{ __('label.'.$label ?? $name) }}
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


