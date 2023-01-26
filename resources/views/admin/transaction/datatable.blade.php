@extends('admin.layout')

@section('content')
    <x-admin.datatable :dataTable="$dataTable"
                       :title="'transaction'"
                       :filter="$filter" />
@stop
