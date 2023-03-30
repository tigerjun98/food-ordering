@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Admin Management'"
                       :filter="$filter"
    >
        @slot('action')

            <x-admin.component.button
                :action="'back'"
                :class="'btn-outline-primary btn-lg top-right-button mr-1'"
            />

            <x-admin.component.button
                :openModal="'{ header: `CREATE`, url: `'.route('admin.account.create').'` }'"
                :class="'btn-primary btn-lg top-right-button mr-1'"
                :lang="'create'"
                :icon="'iconsminds-folder-add-- mr-1'"
            />
        @endslot

    </x-admin.datatable>
@stop
