<x-admin.layout.pages.header
    :navs="$navs"
    :title="$title"
/>

@if(isset($navs) && count($navs) > 0)
    <x-admin.layout.tabs.body
        :navs="$navs"
    >
        @foreach($navs as $nav)
            @slot($nav)
                {{ ${$nav} ?? '' }}
            @endslot
        @endforeach
    </x-admin.layout.tabs.body>
@else
    {{ $body ?? '' }}
@endif
