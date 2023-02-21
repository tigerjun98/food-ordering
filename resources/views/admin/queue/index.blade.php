@extends('admin.layout')

@section('content')
    <div id="main_row" class="row app-row">
        <div class="col-12">
            <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Queue management</h1>

                <div class="top-right-button-container">
                    <button onclick="location.href='{{ url()->previous() }}';"
                            type="button" class="btn btn-outline-primary btn-lg top-right-button mr-1 text-capitalize">
                        <i class="iconsminds-left-1 mr-1"></i>
                        {{ __('common.back') }}
                    </button>
                </div>
            </div>

            <div class="mb-4" id="headerSearch">
                <div class="separator mb-4 mt-2"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-3">{{ trans('common.waiting_list') }}</h2>
                    <ul id="queueListing-waiting" class="pl-0">
                        @foreach($waiting as $data)
                            <li class="mb-2 queue-list" data-id="{{ $data->id }}" id="queueBox-{{ $data->id }}">
                                <x-admin.component.card.queue :queue="$data" />
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    <h2 class="mb-3">{{ trans('common.pending_list') }}</h2>
                    <ul id="items2" class="pl-0">
                        <li class="card" data-id="4">
                            <div class="card-body">
                                Item 4
                            </div>
                        </li>
                        <li class="card" data-id="5">
                            <div class="card-body">
                                Item 5
                            </div>
                        </li>
                        <li class="card" data-id="6">
                            <div class="card-body">
                                Item 6
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="app-menu">
        <div class="p-4 h-100">
            <div class="scroll">
                <div class="modal-header mb-5">
                    <h4 class="mt-1 text-capitalize">{{ __('label.search') }}</h4>
                </div>

            </div>
        </div>

        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-options"></i>
        </a>
    </div>

    <script type="text/javascript" src="{{ Vite::backendJs('queue-function.js') }}"></script>
    <script type="module" src="{{ Vite::backendJs('queue-init.js') }}"></script>
@stop
