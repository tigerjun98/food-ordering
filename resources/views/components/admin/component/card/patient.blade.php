<div class="card">
    <div class="card-body">
        <h3 class="mb-5">{{ trans('common.patient_details') }}</h3>

        <x-admin.component.card.patient-details
            :patient="$patient"
        />

        <div class="modal-footer d-flex align-items-center mt-4 pb-0">
            <x-admin.component.button
                :openModal="'{ header: `Edit`, url: `'.route('admin.user.edit', $patient->id).'` }'"
                :class="'btn-primary'" :text="'Edit'"/>
        </div>

    </div>
</div>
<script>
    function refreshDataTable(){
        getPatientCard()
    }
</script>
