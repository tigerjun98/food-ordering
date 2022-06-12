@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\OrderDetail::Filter(),
        'title'     => 'order_management',

    ])
        @slot('moreAction')
            <button class="dropdown-item" onclick="refreshModal('{{route('admin.order.edit', $option['id'])}}','first')">
                <i class="iconsminds-folder-add-- mr-1"></i>
                {{ __('common.create') }}
            </button>
        @endslot
    @endcomponent

    <script src="//www.tracking.my/track-button.js"></script>
    <script>
        function linkTrack(num) {
            TrackButton.track({
                tracking_no: num
            });
        }
    </script>
@endsection
