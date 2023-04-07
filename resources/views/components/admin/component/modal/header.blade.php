<div class="title-wrapper mb-3">
    <h2 class="text-capitalize">{{ $lang ? __('common.'.$lang) : $title }}</h2>
    <button type="button" class="close" aria-label="Close"
            onclick="$(this).closeModal()"
    >
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@if(isset($navs) && count($navs) > 0)
    <x-admin.layout.tabs.header
      :navs="$navs"
    />
@endif
