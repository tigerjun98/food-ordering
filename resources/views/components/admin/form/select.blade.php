@php
    $defaultClass= ' form-control select2-single ';
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

<script type="module">

</script>
@if(isset($onchange) && $onchange)
    <script>
        $("#{{$id ?? $name}}").change(function() {
            $("#{{ $attributes['id'] }}").updateOption({
                id: '{{$onchange}}',
                @if(isset($onchangeValue) && $onchangeValue)
                val: '{{$onchangeValue}}'
                @endif
            });
        });
    </script>
@endif

<script type="module">
    $('#{{ $attributes['id'] }}').change(function (){
        let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });
    });

    $('#{{ $attributes['id'] }}').val('{{ $value ?? '' }}').trigger('change');

    @if(isset($ajax))
        $('#{{ $attributes['id'] }}').select2({
            minimumInputLength: 1,
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:",
            tags: true,
            tokenSeparators: [','],
            createTag: function (params) {
                var term = $.trim(params.term);
                if (term === '') {
                    return null;
                }

                return {
                    id: term,
                    text: term,
                    newTag: true // add additional parameters
                }
            },
            ajax: {
                url: "{{ $ajax }}",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    return query;
                }, processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        }),
                        pagination: {
                            more: data.next_page_url != null && data.next_page_url.length > 0
                        }
                    };
                },
            cache: true
        }
    });
    @endif
</script>

