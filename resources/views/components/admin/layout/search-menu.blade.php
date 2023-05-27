<x-admin.layout.right-bar
    :navs="['do_search']"
>
    @slot('do_search')
        <div class="modal-header mb-5 pt-0">
            <h4 class="mt-1 text-capitalize">Search</h4>
        </div>

        <x-admin.layout.right-bar.search
            :filter="$filter"
            :extraFilter="$extraFilter ?? ''"
        />
    @endslot
</x-admin.layout.right-bar>



