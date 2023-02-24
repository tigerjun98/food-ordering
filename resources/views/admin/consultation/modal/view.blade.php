<x-admin.component.modal
    :title="'Consultation details'"
    :nav="$tabs"
>
    @slot('medicine')
        <x-admin.component.card.consultation-details
            :consultation="$consultation"
        />
    @endslot

    @slot('patient')
        <x-admin.component.card.patient-details
            :patient="$consultation->patient"
        />
    @endslot

</x-admin.component.modal>
