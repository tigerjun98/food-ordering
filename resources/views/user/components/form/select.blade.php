<div class="info-title info-account">
    <fieldset class="input-box">
        @if(isset($label) && $label)
            <p class="title-infor-account">{{__('common.'.$label)}}
                @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
            </p>
        @else
            <p class="title-infor-account">{{__('common.'.$name)}}
                @if(!isset($required))<abbr class="required" title="required">*</abbr>@endif
            </p>
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
    </fieldset>
</div>
@if(isset($onchange) && $onchange)
    <script defer>
        $( document ).ready(function() {
            $("#{{$id ?? $name}}").change(function() {
                $("#{{$id ?? $name}}").updateOption({
                    id: '{{$onchange}}',
                    returnFormat: $("#address").prop('type')
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

<style>
    .info-account select{
        background: #FFFFFF08;
        border: 1px solid #241c39;
        height: 49px;
        box-shadow: none;
        font-size: 16px;
        line-height: 28px;
        border-radius: 4px;
        padding: 6px 15px 7px 19px;
        width: 100%;
        outline: none;
    }
</style>

