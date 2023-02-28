@php

@endphp
<li>
    <a
        href="#" data-toggle="collapse" data-target="#collapse{{$name}}"
       aria-expanded="true" aria-controls="collapse{{$name}}"
       class="rotate-arrow-icon opacity-50"
    >
        <i class="simple-icon-arrow-down"></i>
        <span class="d-inline-block">{{ $name ?? '' }}</span>
    </a>
    <div id="collapse{{$name}}" class="collapse show">
        <ul class="list-unstyled inner-level-menu">
            @foreach($children as $childrenName => $child)
                <li class="{{ isActive($child['route'] ?? '') ? 'active' : '' }}">
                    <a href="{{$child['route']}}">
                        <i class="{{ $child['icon'] }}"></i>
                        <span class="d-inline-block">{{ trans('common.'.$childrenName) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</li>

