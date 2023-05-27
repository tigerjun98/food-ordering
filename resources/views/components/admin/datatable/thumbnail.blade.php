<div class="position-relative">
    <div
        data-bg="{{ $src }}"
        class="lazy list-thumbnail border-0 ml-2"
    >
    @if(isset($title))
        <span
            class="badge badge-pill badge-theme-3 position-absolute badge-top-right"
        >
        {{ $title }}</span>
    @endif
    </div>
</div>
