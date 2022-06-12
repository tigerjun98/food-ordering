@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\Promotion::Filter(),
        'title'     => 'promotion_management',

    ])
        @slot('moreAction')
            <button class="dropdown-item" onclick="refreshModal('{{route('admin.promotion.edit', $option['id'])}}','first')">
                <i class="iconsminds-folder-add-- mr-1"></i>
                {{ __('common.create') }}
            </button>
        @endslot
    @endcomponent
@endsection
