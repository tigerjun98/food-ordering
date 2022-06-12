<label class="form-group has-float-label">
    <select multiple name="{{$name}}[]" class="form-control select2-multiple" id="{{$id ?? 'select2'.$name}}"
            multiple="multiple"
            data-width="100%">
        @if(isset($option) && $option)
            @foreach($option as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
            @endforeach
        @endif
        {{$customOption ?? ''}}
    </select>

    <span>{{ __('common.'.$label) }}
        <span class="text-danger">{{isset($required) ? null : '*' }}</span>
    </span>
    @if(isset($small))
        <small class="text-semi-muted" id="{{$smallID ?? ''}}">{{$small ?? ''}}</small>
    @endif
</label>

@if(isset($data) && $data)
    <script>
        $(document).ready(function(){
            $("#{{$id ?? 'select2'.$name}}").val([{{$data->$name}}]).trigger("change");
        });
    </script>
@elseif(isset($value) && $value)
    <script>
        $(document).ready(function(){
            $('#{{$id ?? 'select2'.$name}}').val([{!!$value!!}]).trigger('change');
        });
    </script>
@else

@endif


