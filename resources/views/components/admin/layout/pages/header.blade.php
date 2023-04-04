<div class="mb-5">
    <h1 class="pr-3 text-capitalize">{{ $title ?? '' }}</h1>
    <div class="top-right-button-container">
        <x-admin.component.button
            :redirect="url()->previous()"
            :class="'btn-outline-primary btn-lg top-right-button'"
            :icon="'iconsminds-left-1'"
            :text="trans('button.back')"
        />
    </div>

    @if(isset($navs))
        <x-admin.layout.tabs.header
            :navs="$navs"
        />
    @endif
</div>


