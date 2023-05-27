@php
    $value = !isset($value)
        ? ( isset($data) && isset($name) && isset($data->{$name}) ? $data->{$name} : '' )
        : $value;

    $label = isset($label) ? $label : $name;
@endphp

@if(isset($col)) <div class="col-{{ $col }}"> @endif
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-20 w-xs-100 font-weight-semibold cc mr-1">{{ $label }}</p>
        <div class="mb-0 w-80 w-xs-100">{{ $value }}</div>
    </div>
@if(isset($col)) </div> @endif
