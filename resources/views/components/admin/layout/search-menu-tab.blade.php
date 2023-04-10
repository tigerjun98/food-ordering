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
                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="#"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class=" mb-0 truncate">{{$nav}}</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">14:20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
