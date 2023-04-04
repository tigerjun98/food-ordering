<x-admin.form
    :route="$route"
    :script="$script ?? ''"
>
    @slot('body')
        <div class="pl-0 align-self-center min-width-zero mb-3 pb-3 border-bottom">
            <div class="min-width-zero">
                <p class="list-item-heading mb-1 truncate">{{ $title ?? '' }}</p>
                <p class="mb-0 text-muted text-small">{{ $desc ?? '' }}</p>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ auth()->id() }}">
        {{ $body ?? '' }}
    @endslot

    @slot('footer')
        <x-admin.component.button
            :class="'btn-primary'"
            :lang="'submit'"
            :type="'submit'"
        />
    @endslot
</x-admin.form>
