@php
    // Limit only to 2
    $navs = (!blank($navTab) && count($navTab) > 2)
                ? array_slice($navTab, 0, 2)
                : $navTab;
@endphp

<div class="app-menu">
    <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
        @foreach ($navs as $key => $nav)
            <li class="nav-item w-50 text-center">
                <a
                    class="nav-link {{$key == 0 ? 'active' : ''}}"
                    id="{{$nav}}-tab"
                    data-toggle="tab"
                    href="#{{$nav}}-tab-content"
                    role="tab"
                    aria-selected="true"
                >
                    {{ ucfirst($nav) }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="p-4 h-100">
        <div class="tab-content h-100">
            @foreach ($navs as $key => $nav)
                <div class="tab-pane fade show {{$key == 0 ? 'active' : ''}} h-100" id="{{$nav}}-tab-content" role="tabpanel" aria-labelledby="{{$nav}}-tab">
                    <div class="scroll">
                        @if (! is_null($filter) && $nav == 'search')
                            <x-admin.layout.search-menu
                                :filter="$filter"
                                :extraFilter="$extraFilter ?? null"
                                :tabEnabled="$enableTab"
                            />
                        @else
                            {{ $tabContent ?? '' }}
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a class="app-menu-button d-inline-block d-xl-none" href="#">
        <i class="simple-icon-options"></i>
    </a>
</div>
