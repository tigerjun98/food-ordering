<ul
    class="nav nav-tabs {{ isset($rightBar) && $rightBar ? 'ml-0 mr-0 mb-1 card-header-tabs' : 'separator-tabs mb-0' }}"
    role="tablist"
>
    @foreach($navs as $key => $item)
        <li class="nav-item {{ isset($rightBar) && $rightBar ? 'w-50 text-center' : '' }}">
            <a class="nav-link {{$key == 0 ? 'active' : ''}}"
               id="{{$item}}-tab"
               data-toggle="tab"
               href="#{{$item}}-tab-content"
               role="tab"
               aria-selected="true"
            >
                {{ __('label.'.$item) }}
            </a>
        </li>
    @endforeach
</ul>
