@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Patient Management'"
                       :filter="$filter"
    >

        @slot('action')

            @if(auth()->user()->can( 'patient.create' ) )
                <x-admin.component.button
                    :openModal="'{ header: `CREATE`, url: `'.route('admin.user.create').'` }'"
                    :class="'btn-primary btn-lg top-right-button mr-1'"
                    :lang="'create'"
                    :icon="'iconsminds-folder-add-- mr-1'"
                    :tooltip="'create'"
                />
            @endif

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
