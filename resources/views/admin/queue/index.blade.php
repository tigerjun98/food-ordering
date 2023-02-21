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
                    <h3>{{ trans('common.waiting_list') }}</h3>
                    <ul id="queueListing-waiting" class="pl-0">
                        @foreach($waiting as $data)
                            <li class="card mb-2 queue-list" data-id="{{ $data->id }}" id="queueBox-{{ $data->id }}">

                                <div class="position-absolute card-top-buttons">
                                    <button class="btn btn-header-light icon-button text-danger">
                                        <i class="simple-icon-trash"></i>
                                    </button>
                                </div>

                                <div class="card-body">

                                    <div class="justify-content-between">
                                        <div class="">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">{{ $data->patient->full_name }}</p>
                                                <p class="text-muted mb-0 text-small">
                                                    {{ get_time_ago( strtotime($data->created_at) ) }}
                                                </p>
                                            </a>
                                            @if($data->doctor)
                                                <div class="">
                                                    <span class="badge badge-pill badge-outline-secondary mr-1 mt-2">{{ $data->doctor->name_en ?? '' }}</span>
                                                </div>
                                            @endif
                                            <p class="mt-3 mb-0 text-small text-semi-muted">
                                                {{ $data->remark }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-2 border-top pt-3 footer">
                                        <x-admin.component.button
                                            :onclick="'servePatient('.$data->id.')'"
                                            :lang="'serve'"
                                            :class="'btn-primary'"
                                        />
                                        <x-admin.component.button
                                            :redirect="route('admin.consultation.edit', $data->user_id)"
                                            :lang="'consult'"
                                            :class="'btn-primary'"
                                        />
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    <h3>{{ trans('common.pending_list') }}</h3>
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
