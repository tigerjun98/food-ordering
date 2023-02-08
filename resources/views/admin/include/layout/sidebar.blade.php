<?php $route = Route::current()->getName() ?>
<div class="menu cc">
    <div class="main-menu" id="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <?php
                $items = [
                        ['name'=> 'dashboard', 'routeName'=> 'home', 'icon'=>'monitor-analytics'],
                        ['name'=> 'patients', 'routeName'=> 'user.index', 'icon'=>'conference'],
                        ['name'=> 'medicines', 'routeName'=> 'medicine.index', 'icon'=>'conference'],
                        ['name'=> 'consultations', 'routeName'=> 'consultation.index', 'icon'=>'conference'],
                        ['name'=> 'admins', 'routeName'=> 'account.', 'icon'=>'user', 'permission'=> 'admin_management'],
                        ['name'=> 'deposit', 'routeName'=> 'transaction.deposit.', 'icon'=>'check', 'permission'=> 'deposit_management'],
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
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll" id="sub-menu">

        </div>
    </div>
</div>
