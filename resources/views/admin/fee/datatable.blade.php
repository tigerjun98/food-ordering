@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Fee Management'"
                       :filter="$filter"
    ></x-admin.datatable>
@stop
