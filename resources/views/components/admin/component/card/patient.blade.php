<div class="card">
    <div class="card-body">
        <h5 class="mb-4">{{ trans('common.patient_details') }}</h5>
        <div class="row">
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
        <div class="row">
            <div class="col-md-12">
                <x-admin.layout.info
                    :data="$data"
                    :name="'remark_allergic'"
                />
            </div>
        </div>
    </div>
</div>
