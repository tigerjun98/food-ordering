@php
    $value = !isset($value)
        ? ( isset($data) && isset($name) && isset($data->{$name}) ? $data->{$name} : '' )
        : $value;
@endphp
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-20 w-xs-100 font-weight-semibold cc">{{ isset($label) ? $label : trans('label.'.$name)}}</p>
    <p class="mb-0 w-80 w-xs-100">{{ $value }}</p>
</div>
