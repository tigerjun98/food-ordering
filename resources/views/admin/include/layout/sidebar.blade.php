@php
    if(auth()->guard()->name == 'admin'){
        $navs = [
            'user'          => ['route'=> route('admin.user.index'), 'icon'=>'iconsminds-conference'],
            'merchant'      => ['route'=> route('admin.merchant.index'), 'icon'=>'iconsminds-shop'],
            'category'      => ['route'=> route('admin.category.index'), 'icon'=>'iconsminds-hamburger'],
        ];

    } elseif(auth()->guard()->name == 'merchant'){
        $navs = [
            'menu-item'     => ['route'=> route('merchant.menu-item.index'), 'icon'=>'iconsminds-box-close'],
            'orders'        => ['route'=> route('merchant.order.index'), 'icon'=>'iconsminds-scooter'],
        ];

    } else{
        $navs = [
            'merchant'      => ['route'=> route('merchant.index'), 'icon'=>'iconsminds-shop'],
            'orders'        => ['route'=> route('order.index'), 'icon'=>'iconsminds-scooter'],
            'category'      => ['route'=> route('category.index'), 'icon'=>'iconsminds-hamburger'],
        ];
    }


     function isChildActive($parents = []): bool
     {
        foreach ($parents as $parent){
          foreach ($parent as $child){
              if(isActive($child['route'])){
                return true;
            }
          }
        }
        return false;
    }

     function isActive($url, $nav = []): bool
    {
        if(!$url) return isChildActive($nav);
        $itemUrl = get_string_between($url, '/admin');
        return str_contains(url()->full(), $itemUrl);
    }

    function hasPermission($data): bool
    {
        if( !isset($data['permission']) || ( isset($data['permission']) &&  auth()->user()->can( $data['permission'] ) ) ){
            return true;
        }
        return false;
    }

@endphp

<div class="menu cc">
    <div class="main-menu" id="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                @foreach($navs as $name => $nav)
                    <li class="main_nav {{ isActive($nav['route'] ?? '', $nav['children'] ?? []) ? 'active' : '' }}">
                        <a href="{{ $nav['route'] ?? '#'.$name }}">
                            <i class="{{ $nav['icon'] }}"></i>
                            <span>{{ trans('common.'.$name) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll" id="sub-menu">
            @foreach($navs as $name => $nav)
                @if(isset($nav['children']))
                    <ul class="list-unstyled" data-link="{{ $name }}" id="innerLevelMenuParent-{{ $name }}">
                        @foreach($nav['children'] as $childrenName => $children)
                            <x-admin.component.module.nav.dropdown-link
                                :name="$childrenName"
                                :children="$children"
                            />
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </div>
    </div>
</div>
