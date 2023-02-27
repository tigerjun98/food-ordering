<x-admin.component.modal
    :title="'Consultation details'"
    :nav="$tabs"
    :modalBodyClass="'fixed-height'"
>
    @slot('medicine')
        <x-admin.component.card.consultation.medicine-details
            :prescriptions="$consultation->prescriptions"
        />
    @endslot

    @slot('details')
        <x-admin.component.card.consultation.details
            :consultation="$consultation"
        />
    @endslot

    @slot('patient')
        <x-admin.component.card.patient-details
            :patient="$consultation->patient"
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
