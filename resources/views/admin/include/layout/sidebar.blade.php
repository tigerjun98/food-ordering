@php
    $route = Route::current()->getName();
    $items = [
        ['name'=> 'dashboard', 'route'=> route('admin.home'), 'icon'=>'monitor-analytics'],
        ['name'=> 'patients', 'route'=> route('admin.user.index'), 'icon'=>'conference'],
        ['name'=> 'consultations', 'route'=> route('admin.consultation.index'), 'icon'=>'stethoscope'],
//        ['name'=> 'admins', 'route'=> 'account.', 'icon'=>'user', 'permission'=> 'admin_management'],
//
        ['name'=> 'settings', 'link'=> 'setting', 'icon'=>'gears',

            'subMenu' => [
                ['name'=> 'medicines', 'route'=> route('admin.medicine.index'), 'icon'=>'iconsminds-medicine-3'],
                ['name'=> 'specialists', 'route'=> route('admin.option.index', 'type=specialist'), 'icon'=>'iconsminds-microscope'],
                ['name'=> 'syndromes', 'route'=> route('admin.option.index', 'type=syndrome'), 'icon'=>'iconsminds-flask'],
                ['name'=> 'diagnoses', 'route'=> route('admin.option.index', 'type=diagnose'), 'icon'=>'iconsminds-pulse'],
            ]
        ]

    ];
@endphp

<div class="menu cc">
    <div class="main-menu" id="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                @foreach($items as $key => $item)
                    @php
                       $redirect = isset($item['route']) ? $item['route'] : '#';
                       $link = isset($item['link']) ? ( '#'.$item['link'] ) : $redirect;

                       $currentUrl = get_string_between(url()->current(), '/admin', '?');
                       $itemUrl = isset($item['route']) ? get_string_between($item['route'], '/admin') : '';
                       $isActive = str_contains(url()->full(), $itemUrl);

                       if(isset($item['subMenu']) && count($item['subMenu']) > 0){
                            $isActive = false;
                            foreach($item['subMenu'] as $key2 => $menu){
                                $subItemUrl = get_string_between($menu['route'], '/admin');
                                $isSubActive = str_contains(url()->full(), $subItemUrl);
                                $items[$key]['subMenu'][$key2]['active'] = $isSubActive;
                                if(!$isActive) $isActive = $isSubActive;
                            }
                       }

                    @endphp

                    @if(!isset($item['permission']))
                        <li class="main_nav {{ $isActive ? 'active' : '' }}">
                            <a href="{{ $link }}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ trans('common.'.$item['name']) }}</span>
                            </a>
                        </li>

                    @elseif(\Illuminate\Support\Facades\Gate::allows($item['permission']))
                        <li class="main_nav">
                            <a href="{{ $item['route'] }}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ trans('common.'.$item['name']) }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll" id="sub-menu">
            @foreach($items as $key => $item)
                @if(isset($item['subMenu']))
                    <ul class="list-unstyled" data-link="{{ $item['link'] }}">
                        @foreach($item['subMenu'] as $key => $menu)
                            <li class="{{ $menu['active'] ? 'active' : '' }}">
                                <a href="{{ $menu['route'] }}">
                                    <i class="{{ $menu['icon'] }}"></i>
                                    <span class="d-inline-block">{{ $menu['name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach

        </div>
    </div>
</div>
