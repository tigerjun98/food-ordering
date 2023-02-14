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

            <x-admin.form :route="route('admin.consultation.store')">
                @slot('body')
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-5">Basic</h3>
                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'specialist')"
                                            :multiple="'multiple'"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'specialists[]'"
                                        />
                                    </div>

                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'syndrome')"
                                            :multiple="'multiple'"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'syndromes[]'"
                                        />
                                    </div>

                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'diagnose')"
                                            :multiple="'multiple'"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'diagnoses[]'"
                                        />
                                    </div>

                                    <x-admin.form.textarea :name="'symptom'" :rows="6" />


                                    <div class="separator"></div>


                                    <x-admin.form.textarea :name="'advise'" />
                                    <x-admin.form.textarea :name="'remark'"
                                                           :label="trans('label.internal_remark')"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="overflow-hidden">
                                        <h3 class="mb-5 float-left">Medicine</h3>
                                        <x-admin.component.button
                                            :class="'btn-outline-primary float-right'" :text="'Add'"
                                        />
                                    </div>

                                    <div class="row">
                                        <x-admin.form.select
                                            :options="[]"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'prescription_category[]'"
                                        />
                                    </div>

                                    <div class="" id="mixMedicine"></div>

                                    <script>
                                        const appendMixMedicine = () => {
                                            $('#mixMedicine').append(`@include('admin.consultation.form.include.medicine')`)
                                            initializeSelect2()
                                        }

                                        const initializeSelect2 = () => {
                                            $('.medicine_opt').select2({
                                                minimumInputLength: 1,
                                                theme: "bootstrap",
                                                dir: "ltr",
                                                placeholder: "",
                                                maximumSelectionSize: 6,
                                                containerCssClass: ":all:",
                                                tags: true,
                                                tokenSeparators: [',', ' '],
                                                createTag: function (params) {
                                                    var term = $.trim(params.term);
                                                    if (term === '') {
                                                        return null;
                                                    }

                                                    return {
                                                        id: term,
                                                        text: term,
                                                        newTag: true // add additional parameters
                                                    }
                                                },
                                                ajax: {
                                                    url: "{{ route('admin.consultation.get-medicine-opt') }}",
                                                    dataType: 'json',
                                                    delay: 250,
                                                    data: function (params) {
                                                        var query = {
                                                            search: params.term,
                                                            page: params.page || 1
                                                        }
                                                        return query;
                                                    }, processResults: function (data, params) {
                                                        params.page = params.page || 1;
                                                        return {
                                                            results: $.map(data.data, function (item) {
                                                                return {
                                                                    text: item.name,
                                                                    id: item.id
                                                                }
                                                            }),
                                                            pagination: {
                                                                more: data.next_page_url != null && data.next_page_url.length > 0
                                                            }
                                                        };
                                                    },
                                                    cache: true
                                                }
                                            });
                                        }
                                    </script>

                                    <div class="modal-footer d-flex align-items-center mt-2">
                                        <x-admin.component.button
                                            :class="'btn-outline-danger btn-xs'" :text="'Remove'"
                                        />
                                        <x-admin.component.button
                                            :onclick="'appendMixMedicine()'"
                                            :class="'btn-primary btn-xs'" :text="'Mix'"
                                        />
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endslot
            </x-admin.form>
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


