@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\Log::Filter(),
        'title'     => 'logs_management',
    ])
    @endcomponent
@endsection
