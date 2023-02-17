@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Consultation Management'"
                       :filter="$filter"
    >
        @slot('action')
{{--            <button class="dropdown-item" onclick="refreshModal('{{route('admin.transaction.deposit.create')}}','first')">--}}
{{--                <i class="iconsminds-folder-add-- mr-1"></i>--}}
{{--                {{ __('common.create') }}--}}
{{--            </button>--}}

{{--            <x-admin.component.button--}}
{{--                :redirect="'{ header: `CREATE`, url: `'.route('admin.medicine.create', '').'` }'"--}}
{{--                :class="'btn-outline-primary btn-lg top-right-button mr-1'"--}}
{{--                :lang="'create'"--}}
{{--                :icon="'iconsminds-folder-add-- mr-1'"--}}
{{--            />--}}
        @endslot


{{--        @slot('moreAction')--}}
{{--            <x-admin.component.button--}}
{{--                :icon="'iconsminds-folder-add-- mr-1'"--}}
{{--                :lang="'create'"--}}
{{--                :openModal="'{ header: `CREATE`, url: `'.route('admin.user.create').'` }'"--}}
{{--                :class="'dropdown-item'"--}}
{{--            />--}}
{{--        @endslot--}}

    </x-admin.datatable>
@stop
