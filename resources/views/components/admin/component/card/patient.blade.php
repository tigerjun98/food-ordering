<div class="card">
    <div class="card-body">
        <h3 class="mb-5">{{ trans('common.patient_details') }}</h3>
        <div class="row mb-2">
            <div class="col-md-6">
                <x-admin.layout.info
                    :data="$data"
                    :name="'full_name'"
                />
            </div>
            <div class="col-md-6">
                <x-admin.layout.info
                    :data="$data"
                    :name="'phone'"
                />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <x-admin.layout.info
                    :value="$data->genderExplain"
                    :name="'gender'"
                />
            </div>
            <div class="col-md-6">
                <x-admin.layout.info
                    :value="$data->nric_format"
                    :name="'nric'"
                />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <x-admin.layout.info
                    :data="$data"
                    :name="'full_address'"
                />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-12">
                <x-admin.layout.info
                    :data="$data"
                    :name="'remark_allergic'"
                />
            </div>
        </div>

        <div class="modal-footer d-flex align-items-center mt-4 pb-0">
            <x-admin.component.button
                :openModal="'{ header: `Edit`, url: `'.route('admin.user.edit', $data->id).'` }'"
                :class="'btn-primary'" :text="'Edit'"/>
        </div>

    </div>
</div>
<script>
    function refreshDataTable(){
        location.reload()
    }
</script>
