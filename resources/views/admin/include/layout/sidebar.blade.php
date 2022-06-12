<?php $route = Route::current()->getName() ?>
<div class="menu cc">
    <div class="main-menu" id="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <?php
                $items = [
                        ['name'=> 'dashboard', 'routeName'=> 'index', 'icon'=>'monitor-analytics','permission'=> 'dashboard'],
                        ['name'=> 'users', 'routeName'=> 'user.', 'icon'=>'conference', 'permission'=> 'user_management'],
                        ['name'=> 'admins', 'routeName'=> 'account.', 'icon'=>'user', 'permission'=> 'admin_management'],
                        ['name'=> 'orders', 'routeName'=> 'order.', 'icon'=>'check', 'permission'=> 'order_management'],
                        ['name'=> 'products', 'routeName'=> 'product.', 'icon'=>'box-close', 'permission'=> 'product_management'],
                        ['name'=> 'commissions', 'routeName'=> 'commission.', 'icon'=>'gears', 'permission'=> 'commission_management'],
                        ['name'=> 'promotions', 'routeName'=> 'promotion.', 'icon'=>'gift-box', 'permission'=> 'promotion_management'],
                        ['name'=> 'settings', 'routeName'=> 'setting.', 'icon'=>'gears', 'permission'=> 'setting_management']
                    ]
                ?>

                @foreach($items as $key => $item)
                    @if(!isset($item['permission']))
                        <li class="main_nav {{$route == 'admin.'.$item['routeName'].'' ? 'active' : ''}}">
                            <a href="{{route('admin.'.$item['routeName'].'')}}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ __('common.'.$item['name'].'') }}</span>
                            </a>
                        </li>
                    @elseif(\Illuminate\Support\Facades\Gate::allows($item['permission']))
                        <li class="main_nav {{$route == 'admin.'.$item['routeName'].'' ? 'active' : ''}}">
                            <a href="{{route('admin.'.$item['routeName'].'')}}">
                                <i class="iconsminds-{{$item['icon']}}"></i>
                                <span>{{ __('common.'.$item['name'].'') }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach

                <li class="main_nav {{$route == 'admin.sales.' ? 'active' : ''}}">
                    <a href="{{route('admin.sales.')}}">
                        <i class="iconsminds-calculator"></i>
                        <span>{{ __('common.sales') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll" id="sub-menu">

        </div>
    </div>
</div>
