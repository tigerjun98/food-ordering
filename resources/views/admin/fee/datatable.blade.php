@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'Price Management'"
                       :filter="$filter"
    ></x-admin.datatable>
@stop
