<x-admin.component.modal
    :title="'Consultation details'"
    :navs="$tabs"
    :modalBodyClass="'fixed-height'"
>
    @slot('attachment')
        <x-admin.component.card.consultation.gallery
            :attachments="$consultation->attachments"
        />
    @endslot

    @slot('medicine')
        <div style="margin-top: -20px;">
            <x-admin.component.status-bar
                :class="'col-12 pl-4 mb-3'"
                :type="'info'"
                :message="$consultation->patient->full_name_with_group"
            />
        </div>

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
