@php
    $defaultClass= ' form-control ';
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

{{--        @if(!isset($multiple) && !isset($customOption) && $value)--}}
{{--            <option value="{{ $value }}" selected="selected">{{ \App\Entity\Enums\CountryEnum::getCountryList(false)[$value] }}</option>--}}
{{--        @endif--}}

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
    // https://github.com/lipis/flag-icons

    const formatCountry = (country) => {
        if (!country.id) { return country.text; }
        var $country = $(
            `<span class="mr-2 fi fi-${country.id.toLowerCase()}"></span>
            <span class="flag-text">${country.text}</span>`
        );
        return $country;
    }

    $('#{{ $attributes['id'] }}').change(function (){
        let parent = $('#{{ $attributes['id'] }}').closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });
    });

    $('#{{ $attributes['id'] }}').select2({
        theme: "bootstrap",
        dir: "ltr",
        placeholder: "Select a country",
        maximumSelectionSize: 6,
        containerCssClass: ":all:",
        templateResult: formatCountry,
        data: @json(\App\Entity\Enums\CountryEnum::getCountryList()),
        dropdownParent: $('#'+$(this).getModalId({latest: true}))
    });

    @if(!isset($multiple) && !isset($customOption))
    $('#{{ $attributes['id'] }}').val('{{ $value ?? '' }}').trigger('change');
    @endif

</script>

