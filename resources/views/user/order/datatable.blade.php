@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Orders'"
                       :filter="$filter"
    >
        @slot('action')

            <x-admin.component.button
                :action="'back'"
                :class="'btn-outline-primary btn-lg top-right-button mr-1'"
            />
        @endslot
    </x-admin.datatable>
@stop
