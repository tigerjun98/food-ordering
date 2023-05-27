<x-admin.component.modal
    :title="'User details'"
    :navs="['details', 'items', 'rating']"
    :modalBodyClass="'fixed-height'"
>
    @slot('rating')
        <x-user.pages.order.rating
            :data="$data"
        />
    @endslot

    @slot('items')
        <x-user.pages.order.items
            :data="$data->orderItems"
        />
    @endslot

    @slot('details')
        <x-user.pages.order.address-details
            :data="$data->address"
        />

        <div class="row mb-2">
            <div class="col-md-12">
                <x-admin.layout.info
                    :data="$data"
                    :label="'status'"
                    :name="'status_explain'"
                />
            </div>
        </div>
    @endslot

    @slot('footer')
        <x-admin.component.button
            :class="'btn-outline-primary'"
            :lang="'close'"
            :onclick="'$(this).closeModal({closeLatestModal: true})'"
        />
    @endslot

</x-admin.component.modal>
