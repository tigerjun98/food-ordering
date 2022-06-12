<div class="billing-select mb-25">
    @if(isset($label) && $label)
        <label>{{__('common.'.$label)}}
            @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
        </label>
    @endif
    <select class="select-active" name="{{$name}}" id="{{$id ?? $name}}" {{$action ?? ''}}>
        @if(isset($option) && $option)
            @foreach($option as $key => $item)
                <option value="{{$key}}">{{$item}}</option>
            @endforeach
        @endif
        {{$customOption ?? ''}}
    </select>
    @if(isset($small))
        <small class="text-semi-muted" id="{{$smallID ?? ''}}">{{$small ?? ''}}</small>
    @endif
</div>
@if(isset($onchange) && $onchange)
    <script defer>
        $( document ).ready(function() {
            $("#{{$id ?? $name}}").change(function() {
                $("#{{$id ?? $name}}").updateOption({
                    id: '{{$onchange}}',
                    @if(isset($onchangeValue) && $onchangeValue)
                    val: '{{$onchangeValue}}'
                    @endif
                });
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
    <script>
        $(document).ready(function(){
            $('#{{$id ?? $name}}').val('').trigger('change');
        });
    </script>
@endif

