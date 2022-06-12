@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\User::Filter(),
        'title'     => 'user_management',

    ])
        @slot('moreAction')
            <button class="dropdown-item" onclick="refreshModal('{{route('admin.user.edit', $option['id'])}}','first')">
                <i class="iconsminds-folder-add-- mr-1"></i>
                {{ __('common.create') }}
            </button>
        @endslot
    @endcomponent
@endsection
