<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :label="trans('label.contact_name')"
            :value="$patient->emergency_contact_name"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :label="trans('label.contact_no')"
            :value="$patient->emergency_contact_no"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :label="trans('label.relationship')"
            :value="$patient->emergency_contact_relationship"
        />
    </div>
</div>
