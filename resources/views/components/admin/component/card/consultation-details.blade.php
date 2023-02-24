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

<div class="">
    @php
       $arr = '<span class="badge badge-pill badge-outline-secondary mr-1">Haha</span>';
       foreach ($consultation->specialists_explain as $item){
           $arr.= '<span class="badge badge-pill badge-outline-secondary mr-1">'.$item.'</span>';
       }
    @endphp
    {!! $arr !!}


</div>
<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :value="$arr"
        :name="'specialists'"
    />
</div>


<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :data="$consultation"
        :name="'symptom'"
    />
</div>

<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :data="$consultation"
        :name="'symptom'"
    />
</div>

<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :data="$consultation"
        :name="'advise'"
        :label="trans('label.doctor_advise')"
    />
</div>

<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :data="$consultation"
        :name="'internal_remark'"
    />
</div>
