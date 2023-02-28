@php
    $settingChildren = [
        'consultation' => [
            'medicines'     => ['route'=> route('admin.medicine.index'), 'icon'=>'iconsminds-medicine-3', 'permission' => 'setting-consultation.medicine'],
            'specialists'   => ['route'=> route('admin.option.show', 'specialist'), 'icon'=>'iconsminds-microscope', 'permission' => 'setting-consultation.specialist'],
            'syndromes'     => ['route'=> route('admin.option.show', 'syndrome'), 'icon'=>'iconsminds-flask', 'permission' => 'setting-consultation.syndrome'],
            'diagnoses'     => ['route'=> route('admin.option.show', 'diagnose'), 'icon'=>'iconsminds-pulse', 'permission' => 'setting-consultation.diagnose'],
        ],
        'admin' => [
            'account'       => ['route'=> route('admin.account.index'), 'icon'=>'iconsminds-medicine-3'],
            'roles'         => ['route'=> route('admin.role.index'), 'icon'=>'iconsminds-medicine-3'],
        ]
    ];

    $navs = [
//        'dashboard'         => ['route'=> route('admin.home'), 'icon'=>'iconsminds-monitor-analytics'],
        'patients'          => ['route'=> route('admin.user.index'), 'icon'=>'iconsminds-conference', 'permission' => 'patient.index'],
        'consultations'     => ['route'=> route('admin.consultation.index'), 'icon'=>'iconsminds-stethoscope', 'permission' => 'consultation.index'],
        'queues'            => ['route'=> route('admin.queue.show', \App\Models\Queue::RECEPTIONIST), 'icon'=>'iconsminds-loading-2', 'permission' => 'queue.show'],
        'settings'          => ['icon' => 'iconsminds-gears', 'children' => $settingChildren]
    ];

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
     if( !isset($data['permission']) || ( isset($data['permission']) &&  auth()->user()->hasPermissionTo( $data['permission'] ) ) ){
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
                    @if( hasPermission($nav) )
                        <li class="main_nav {{ isActive($nav['route'] ?? '', $nav['children'] ?? []) ? 'active' : '' }}">
                            <a href="{{ $nav['route'] ?? '#'.$name }}">
                                <i class="{{ $nav['icon'] }}"></i>
                                <span>{{ trans('common.'.$name) }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll" id="sub-menu">
            @foreach($navs as $name => $nav)
                @if(isset($nav['children']))
                    <ul class="list-unstyled" data-link="{{ $name }}">
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
