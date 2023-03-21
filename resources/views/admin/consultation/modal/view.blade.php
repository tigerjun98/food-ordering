<x-admin.component.modal
    :title="'Consultation details'"
    :nav="$tabs"
    :modalBodyClass="'fixed-height'"
>
    @slot('attachment')
        <x-admin.component.card.consultation.gallery
            :attachments="$consultation->attachments"
        />
    @endslot

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
        @if($consultation->patient)
            <x-admin.component.card.patient-details
                :patient="$consultation->patient"
            />
        @else
            <x-admin.component.status-bar
                :class="'col-12 pl-4'"
                :type="'info'"
                :message="'Patient not found!'"
            />
        @endif

    @endslot

    @slot('footer')
        <x-admin.component.button
            :class="'btn-primary'"
            :lang="'print'"
            :onclick="'$(this).openModal({url: `'.route('admin.consultation.print.option', $consultation->id).'`})'"
        />
        <x-admin.component.button
            :class="'btn-outline-primary'"
            :lang="'close'"
            :onclick="'$(this).closeModal({closeLatestModal: true})'"
        />
    @endslot

</x-admin.component.modal>
