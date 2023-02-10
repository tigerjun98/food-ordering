@extends('admin.layout')

@section('content')
    <div id="main_row" class="row app-row">
        <div class="col-12">
            <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Consultation</h1>

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

            <div class="mb-4">
                <x-admin.component.card.patient :data="$patient"/>
            </div>

            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <x-admin.form :route="route('admin.consultation.store')">
                            @slot('body')
                                <h5 class="mb-4">Basic</h5>
                                <div class="row">
                                    <x-admin.form.text
                                        :data="$consultation"
                                        :col="'md-6'"
                                        :name="'password'"
                                        :required="false"
                                    />
                                    <x-admin.form.text
                                        :data="$consultation"
                                        :col="'md-6'"
                                        :name="'password_confirmation'"
                                        :required="false"
                                    />
                                </div>

                                <x-admin.form.textarea :name="'symptom'" :rows="6" />
                                <x-admin.form.textarea :name="'advise'" />
                                <x-admin.form.textarea :name="'remark'"
                                                       :label="trans('label.internal_remark')"
                                />
                            @endslot
                        </x-admin.form>
                    </div>
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

                <form id="js-datatable-filter-form" class="js-datatable-filter-form text-capitalize">

                    <div style="position:fixed; bottom: 0; width: 100%;">
                        <div class="separator mt-5 mb-3"></div>
                        <div class="d-flex mt-1 mb-4">
{{--                            <button type="button" class="btn btn-primary mb-1 text-capitalize" onclick="refreshDataTable()">{{ __('common.filter') }}</button>--}}
{{--                            <button type="button" class="btn btn-light-primary mb-1 text-capitalize" onclick="location.href='{{route(Route::currentRouteName())}}';">{{ __('common.reset') }}</button>--}}
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-options"></i>
        </a>
    </div>

@stop


