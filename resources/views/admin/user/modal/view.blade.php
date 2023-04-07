<x-admin.component.modal
    :title="'Patient details'"
    :navs="['details', 'emergency']"
    :modalBodyClass="'fixed-height'"
>
    @slot('emergency')
        <x-admin.component.card.patients.emergency
            :patient="$patient"
        />
    @endslot

    @slot('details')
        <x-admin.component.card.patients.details
            :patient="$patient"
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
