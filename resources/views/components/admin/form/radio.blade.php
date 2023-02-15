@php
    if( !isset($value) && isset($data->{$name}) ){
        $value = $data->{$name};
    }
   $id = isset($id) ? $name.'-'.$id : $name.'-'.$key;
@endphp
@if(isset($options))
    @foreach($options as $key => $label)
        <div class="custom-control custom-radio">
            <input  type="radio"
                    name="{{ $name }}"
                    id="{{ $id }}"
                    value="{{ $key }}"
                    class="custom-control-input"
                    @if(isset($value) && $value == $optValue) checked @endif
            />
            <label class="custom-control-label"
                   for="{{ $id }}">{{ $label }}
            </label>
        </div>

    @endforeach
@endif
