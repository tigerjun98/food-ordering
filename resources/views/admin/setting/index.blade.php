@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\Setting::Filter(),
        'title'     => 'setting_management',
    ])
    @endcomponent
@endsection
