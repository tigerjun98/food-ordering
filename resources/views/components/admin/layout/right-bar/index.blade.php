<div class="app-menu">

    @if(count($navs) > 1)
        <x-admin.layout.tabs.header
            :rightBar="true"
            :navs="$navs"
        />
    @endif

    <div class="p-4 h-100">
        <x-admin.layout.tabs.body
            :navs="$navs"
        >
            @foreach($navs as $nav)
                @slot($nav)
                    {{ ${$nav} ?? '' }}
                @endslot
            @endforeach
        </x-admin.layout.tabs.body>
    </div>
</div>
