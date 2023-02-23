@extends('admin.layout')

@section('content')
    <div id="main_row" class="row app-row">
        <div class="col-12">
             <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Queue management</h1>
                <div class="top-right-button-container">
                    <button onclick="location.href='{{ url()->previous() }}';"
                            type="button"
                            class="btn btn-outline-primary btn-lg top-right-button mr-1 text-capitalize"
                    >
                        <i class="iconsminds-left-1 mr-1"></i>
                        {{ __('common.back') }}
                    </button>
                </div>
            </div>

            <div class="mb-4" id="headerSearch">
                <div class="separator mb-4 mt-2"></div>
            </div>

            <div class="" id="queueListingWrapper">
                <x-admin.page.queue.receptionist :queues="$queues" />
            </div>
        </div>
    </div>

    <x-admin.layout.search-menu
        :filter="\App\Models\Queue::Filter()"
    >
        @slot('extraFilter')
            <div class="mt-2">
                <x-admin.form.select
                    :name="'doctor_id'"
                    :ajax="route('admin.get-doctor-opt')"
                    :required="false"
                    :onchange="'refreshDataTable()'"
                ></x-admin.form.select>
            </div>

        @endslot
    </x-admin.layout.search-menu>

    <script type="text/javascript" src="{{ asset('js/backend/pages/queue/sortable.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/backend/pages/queue/function.js') }}"></script>
{{--    <script type="text/javascript" src="{{ Vite::backendJs('queue/sortable.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ Vite::backendJs('queue/function.js') }}"></script>--}}
{{--    <script type="module" src="{{ Vite::backendJs('queue/init.js') }}"></script>--}}
@stop
