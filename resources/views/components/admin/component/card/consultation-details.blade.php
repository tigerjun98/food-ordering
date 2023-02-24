{{--<div class="row mb-2">--}}
{{--    <div class="col-md-6">--}}
{{--        <x-admin.layout.info--}}
{{--            :data="$consultation"--}}
{{--            :name="'full_name'"--}}
{{--        />--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <x-admin.layout.info--}}
{{--            :data="$patient"--}}
{{--            :name="'phone'"--}}
{{--        />--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="row mb-2">--}}
{{--    <div class="col-md-6">--}}
{{--        <x-admin.layout.info--}}
{{--            :value="$patient->genderExplain"--}}
{{--            :name="'gender'"--}}
{{--        />--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <x-admin.layout.info--}}
{{--            :value="$patient->occupation"--}}
{{--            :name="'occupation'"--}}
{{--        />--}}
{{--    </div>--}}
{{--</div>--}}

<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$consultation"
            :name="'symptom'"
        />
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$consultation"
            :name="'advise'"
            :lang="'doctor_advise'"
        />
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$consultation"
            :name="'internal_remark'"
        />
    </div>
</div>
