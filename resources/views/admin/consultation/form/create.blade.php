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
                    <input type="hidden" name="user_id" value="{{ $patient->id }}">
                    <div class="row mb-4">
                        <div class="col-lg-6 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-5">{{ trans('common.consultation') }}</h3>
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

                                    <x-admin.form.textarea :name="'symptom'" :rows="6"/>


                                    <div class="separator"></div>


                                    <x-admin.form.textarea :name="'advise'"/>
                                    <x-admin.form.textarea :name="'internal_remark'"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="" id="prescriptionsWrapper"></div>

                            <x-admin.component.button
                                :onclick="'addPrescriptions()'"
                                :class="'btn btn-primary btn-block mb-1'" :lang="'add_prescription'"
                            />

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <x-admin.component.button
                                        :type="'submit'"
                                        :class="'btn btn-primary btn-block mb-1'" :lang="'submit'"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                @endslot
            </x-admin.form>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function() {
            addPrescriptions()
        })

        const countDailyDose = (id) => {
            let totalDailyDose = parseInt($(`#timePerDay${id}`).val()) * parseInt($(`#timePerDose${id}`).val())
            $(`#totalDailyDoseVal${id}`).val(totalDailyDose)
        }

        const countTotalMetric = (id) => {
            let sum = 0;
            const refs = document.getElementsByClassName(`metric-val-${id}`);
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                let thisVal = $(el).val() > 0 ? $(el).val() : 0
                sum += parseInt(thisVal)
            });

            $(`#metricTotalVal${id}`).val(sum);
        }

        const setMetricUnit = (id, val = null) => {
            if (!val) {
                val = $(`#category-${id}`).val()
            }

            let metrics = '{{ implode(',', \App\Models\Prescription::getMetricList()) }}';
            const refs = document.getElementsByClassName(`metric-unit-${id}`);
            let metric = metrics.split(',')[val - 1];
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).text(metric)
            });
            $(`#metricUnit${id}`).val(metric)
        }

        const changeCategory = (e, id) => {
            const refs = document.getElementsByClassName(`ref-category-${id}`);
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).addClass('hide')
            });

            countTotalMetric(id) // reset total amount

            let arr = [1, 2, 3], val = Number($(e).val());
            if (arr.includes(val)) {
                $(`#medicineWrapper${id}`).removeClass('hide')
                $(`#doseWrapper${id}`).removeClass('hide')
                $(`#prescriptionCombination${id}`).empty()
                addCombination(id)
                setMetricUnit(id, val)

            } else {
                $(`#remarkWrapper${id}`).removeClass('hide')
            }
        }

        const removeMixMedicine = (id) => {
            $(`#prescriptionCombination${id} .medicine:last-child`).remove();
        }

        const addCombination = (id) => {
            let html = `@include('admin.consultation.form.include.prescription-combination')`;
            html = html.replaceAll('*009b*', id)
            $(`#prescriptionCombination${id}`).append(html)
            initializeMedicineSelect2()
            setMetricUnit(id)
        }

        const removePrescriptions = (id) => {
            $(`#prescriptionWrapper${id}`).remove()
        }

        const addPrescriptions = () => {
            let uniqid = Date.now();
            let html = `@include('admin.consultation.form.include.prescription')`;
            html = html.replaceAll('*009b*', uniqid)
            $('#prescriptionsWrapper').append(html)
        }

        const initializeMedicineSelect2 = () => {
            $('.medicine_opt').select2({
                minimumInputLength: 1,
                theme: "bootstrap",
                dir: "ltr",
                placeholder: "",
                maximumSelectionSize: 6,
                containerCssClass: ":all:",
                tags: true,
                tokenSeparators: [',', ' '],
                allowClear: true,
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


