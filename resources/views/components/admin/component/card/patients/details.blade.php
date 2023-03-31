<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :name="'full_name'"
            :value="$patient->full_name_with_group"
        />
    </div>
    <div class="col-md-6">
        <x-admin.layout.info
            :data="$patient"
            :name="'nric'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :data="$patient"
            :name="'phone'"
        />
    </div>
    <div class="col-md-6">
        <x-admin.layout.info
            :data="$patient"
            :name="'email'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :value="$patient->gender_explain"
            :name="'gender'"
        />
    </div>
    <div class="col-md-6">
        <x-admin.layout.info
            :value="$patient->occupation"
            :name="'occupation'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :value="$patient->nationality_explain"
            :name="'nationality'"
        />
    </div>
    <div class="col-md-6">
        <x-admin.layout.info
            :value="$patient->dob_with_age"
            :label="trans('dob')"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$patient"
            :name="'full_address'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$patient"
            :name="'remark_allergic'"
        />
    </div>
</div>
