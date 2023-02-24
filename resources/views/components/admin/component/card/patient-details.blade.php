<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :data="$patient"
            :name="'full_name'"
        />
    </div>
    <div class="col-md-6">
        <x-admin.layout.info
            :data="$patient"
            :name="'phone'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <x-admin.layout.info
            :value="$patient->genderExplain"
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