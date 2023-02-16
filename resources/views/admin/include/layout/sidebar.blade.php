@php
    $route = Route::current()->getName();
    $items = [
        ['name'=> 'dashboard', 'route'=> 'home', 'icon'=>'monitor-analytics'],
        ['name'=> 'patients', 'route'=> 'user.index', 'icon'=>'conference'],
        ['name'=> 'consultations', 'route'=> 'consultation.index', 'icon'=>'stethoscope'],
        ['name'=> 'admins', 'route'=> 'account.', 'icon'=>'user', 'permission'=> 'admin_management'],

        ['name'=> 'settings', 'link'=> 'setting', 'icon'=>'gears',

            'subMenu' => [
                'name'=> 'medicines', 'route'=> 'medicine.index', 'icon'=>'iconsminds-medicine-3'
            ]
        ]

    ];
@endphp

<div class="menu cc">
    <div class="main-menu" id="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <script type="module">

                    const activeCurrentNavbar = () => {
                        let route = '{{ $route }}'.replaceAll('admin.', '')
                        route = document.getElementsByClassName(route);
                        Array.prototype.forEach.call(route, function (el) { // loop classes
                            $(el).addClass('active')
                        });
                    }

                    activeCurrentNavbar()

                </script>

                @foreach($items as $key => $item)

                    @if(!isset($item['permission']))

                        @php
                            $redirect = isset($item['route']) ? route('admin.'.$item['route'].'') : '#';
                            $link = isset($item['link']) ? ( '#'.$item['link'] ) : $redirect;

                            $class = $item['route'] ?? '';
                            $class.= isset($item['link']) ? '' : '';

                            if(isset($item['link'])){
                                foreach($item['subMenu'] as $menu){
                                    $class.= ' '.$item['subMenu']['route'].' ';
                                }
                            }

                        @endphp

                        <li class="main_nav {{ $class }}">
                            <a href="{{ $link }}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ __('common.'.$item['name']) }}</span>
                            </a>
                        </li>

                    @elseif(\Illuminate\Support\Facades\Gate::allows($item['permission']))
                        <li class="main_nav">
                            <a href="{{ route('admin.'.$item['route'].'') }}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ __('common.'.$item['name'].'') }}</span>
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
                            <li class="{{ $item['subMenu']['route'] ?? '' }}">
                                <a href="{{ route('admin.'.$item['subMenu']['route'].'') }}">
                                    <i class="{{ $item['subMenu']['icon'] }}"></i>
                                    <span class="d-inline-block">{{ $item['subMenu']['name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach

        </div>
    </div>
</div>
