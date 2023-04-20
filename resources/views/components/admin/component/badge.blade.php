@if(isset($text) && $text)
    <span class="badge badge-pill badge-{{ isset($light) && $light ? 'outline-': '' }}{{ $theme ?? 'primary' }} {{ $class ?? 'mr-1 mt-2' }}">
        {{ $text ?? '' }}
    </span>
@endif

