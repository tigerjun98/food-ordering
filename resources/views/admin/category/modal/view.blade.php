<x-admin.component.modal
    :title="'User details'"
    :navs="['details']"
    :modalBodyClass="'fixed-height'"
>
    @slot('details')
        <x-admin.component.card.user.details
            :data="$data"
        />
    @endslot

    @slot('footer')
        <x-admin.component.button
            :class="'btn-outline-primary'"
            :lang="'close'"
            :onclick="'$(this).closeModal({closeLatestModal: true})'"
        />
    @endslot

</x-admin.component.modal>
