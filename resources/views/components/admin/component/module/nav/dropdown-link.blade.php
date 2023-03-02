<li id="inner-{{$name}}">
    <a
        href="#" data-toggle="collapse" data-target="#collapse{{$name}}"
       aria-expanded="true" aria-controls="collapse{{$name}}"
       class="rotate-arrow-icon opacity-50"
    >
        <i class="simple-icon-arrow-down"></i>
        <span class="d-inline-block">{{ $name ?? '' }}</span>
    </a>
    <div id="collapse{{$name}}" class="collapse show">
        <ul class="list-unstyled inner-level-menu" id="innerLevelMenu-{{$name}}">
            @foreach($children as $childrenName => $child)
                @if( hasPermission($child) )
                    <li class="{{ isActive($child['route'] ?? '') ? 'active' : '' }} inner-level-menu-child">
                        <a href="{{$child['route']}}">
                            <i class="{{ $child['icon'] }}"></i>
                            <span class="d-inline-block">{{ trans('common.'.$childrenName) }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</li>
<script>
    // hide if child not exists
    if( $("#innerLevelMenu-{{$name}}").children('.inner-level-menu-child').length === 0 ){
        $('#inner-{{$name}}').hide();
    }
</script>
