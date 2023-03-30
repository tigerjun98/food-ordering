<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :data="$consultation"
        :name="'ref_id'"
    />
</div>

<div class="row mb-2">
    <x-admin.layout.info
        :col="'md-12'"
        :label="trans('label.consulted_at')"
        :value="dateFormat($consultation->consulted_at, 'd F, Y')"
    />
</div>

@php
    $badges = ['specialists_explain', 'syndromes_explain', 'diagnoses_explain']
@endphp
@foreach($badges as $badge)
    @php
        $arr = '';
        foreach ($consultation->{$badge} as $item){
            $arr.= '<span class="mb-1 badge badge-pill badge-outline-info mr-1">'.$item.'</span>';
        }
    @endphp
    <div class="row mb-2">
        <x-admin.layout.info
            :col="'md-12'"
            :value="$arr"
            :label="str_replace('_explain', '', $badge)"
        >
            @slot('value') {!! $arr !!} @endslot
        </x-admin.layout.info>
    </div>
@endforeach

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
