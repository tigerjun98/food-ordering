@extends('admin.layout')

@section('content')
    <div id="main_row" class="row app-row">
        <div class="col-12">
            <div class="mb-0">
                <h1 class="pr-3 text-capitalize">{{ $consultation ? '#'.$consultation->ref_id : trans('common.consultation') }}</h1>
                <div class="top-right-button-container">
                    <button onclick="location.href='{{ url()->previous() }}';"
                            type="button" class="btn btn-outline-primary btn-lg top-right-button mr-1 text-capitalize">
                        <i class="iconsminds-left-1 mr-1"></i>
                        {{ __('common.back') }}
                    </button>
                </div>
            </div>

            <div class="mb-3" id="headerSearch">
                <div class="separator mb-4 mt-2"></div>
            </div>

            <div class="mb-3" id="patientCard">
                <x-admin.component.card.patient :patient="$patient"/>
            </div>

            <x-admin.form :route="route('admin.consultation.store')">
                @slot('body')
                    <input type="hidden" name="id" value="{{ $consultation->id ?? new_id() }}">
                    <input type="hidden" name="user_id" value="{{ $patient->id }}">

                    <div class="row mb-4">
                        <div class="col-lg-6 mb-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="mb-5">{{ trans('common.consultation') }}</h3>
                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'specialist')"
                                            :multiple="'multiple'"
                                            :col="'md-12'"
                                            :name="'specialists[]'"
                                            :lang="'specialists'"
                                            :required="false"
                                        >
                                            @slot('customOption')
                                                @if($consultation)
                                                    @foreach($consultation->specialists_explain as $key => $item)
                                                        <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                                                    @endforeach
                                                @endif
                                            @endslot

                                        </x-admin.form.select>
                                    </div>

                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'syndrome')"
                                            :multiple="'multiple'"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'syndromes[]'"
                                            :lang="'syndromes'"
                                            :required="false"
                                        >
                                            @if($consultation)
                                                @slot('customOption')
                                                    @foreach($consultation->syndromes_explain as $key => $item)
                                                        <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                                                    @endforeach
                                                @endslot
                                            @endif
                                        </x-admin.form.select>
                                    </div>

                                    <div class="row">
                                        <x-admin.form.select
                                            :ajax="route('admin.consultation.get-opt', 'diagnose')"
                                            :multiple="'multiple'"
                                            :data="$consultation"
                                            :col="'md-12'"
                                            :name="'diagnoses[]'"
                                            :lang="'diagnoses'"
                                            :required="false"
                                        >
                                            @if($consultation)
                                                @slot('customOption')
                                                    @foreach($consultation->diagnoses_explain as $key => $item)
                                                        <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                                                    @endforeach
                                                @endslot
                                            @endif
                                        </x-admin.form.select>
                                    </div>

                                    <x-admin.form.textarea
                                        :data="$consultation"
                                        :name="'symptom'"
                                        :rows="10"
                                    />

                                    <div class="separator"></div>

                                    <x-admin.form.textarea
                                        :data="$consultation"
                                        :name="'advise'"
                                        :rows="5"
                                        :lang="'doctor_advise'"
                                        :required="false"
                                    />
                                    <x-admin.form.textarea
                                        :data="$consultation"
                                        :name="'internal_remark'"
                                        :rows="5"
                                        :required="false"
                                    />
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="mb-3">{{ trans('common.attachments') }}</h3>
                                    <input type="hidden" class="dropzone-sending-data" name="type" value="{{ $patient->id }}">
                                    <x-admin.form.dropzone
                                        :id="$consultation ? $consultation->id : null"
                                        :submitUrl="route('admin.attachment.store')"
                                        :deleteUrl="route('admin.attachment.destroy', ':id')"
                                        :sendingData="['type' => 'consultations']"
                                    >
                                        @if($consultation)
                                            @slot('data')
                                                @foreach($consultation->attachments as $key => $attachment)
                                                    <x-admin.form.dropzone-preview
                                                        :id="$consultation->id"
                                                        :refId="$attachment->id"
                                                        :src="$attachment->url"
                                                    />
                                                @endforeach
                                            @endslot
                                        @endif
                                    </x-admin.form.dropzone>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="" id="prescriptionsWrapper">
                                @if($consultation)
                                    @foreach($consultation->prescriptions as $key => $prescription)
                                        @include('admin.consultation.form.include.prescription', ['data' => $prescription])
                                    @endforeach
                                @endif
                            </div>

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

        const getPatientCard = () => {
            $('#patientCard').setHtml({
                url: '{{ route('admin.consultation.get-patient-card', $patient->id) }}'
            })
        }
        // const ps = new PerfectScrollbar('.scroll');

        // function initialiseScrollbar(){
        //     var ps = new PerfectScrollbar('.scroll');
        //     // ps.update();
        // }

        $(document).ready(function() {
            @if(!$consultation)
                addPrescriptions();
            @else
                @foreach($consultation->prescriptions as $key => $prescription)
                console.log({{ $prescription->id }})
                    initializeMedicineSelect2({{ $prescription->id }})
                @endforeach
            @endif
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


            const metrics = @json( \App\Models\Prescription::getMetricList() );
            const refs = document.getElementsByClassName(`metric-unit-${id}`);
            const metric = metrics[val]
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).text(metric)
            });
            $(`#metricUnit${id}`).val(val)
        }

        const changeCategory = (e, id) => {
            const refs = document.getElementsByClassName(`ref-category-${id}`);
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).addClass('hide')
            });

            $(`#remark${id}`).val('')
            countTotalMetric(id) // reset total amount

            let arr = JSON.parse('{{ json_encode(array_keys(\App\Models\Medicine::getCategoryList())) }}');
            let val = Number($(e).val());
            if (arr.includes(val)) {
                $(`#medicineWrapper${id}`).removeClass('hide')
                $(`#doseWrapper${id}`).removeClass('hide')
                $(`#prescriptionCombination${id}`).empty()
                addCombination(id)
                setMetricUnit(id, val)

            } else {
                $(`#metricUnit${id}`).val(null)
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
            initializeMedicineSelect2(id)
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

        const initializeMedicineSelect2 = (id) => {

            // let a = document.querySelector(".medicine_opt").closest(".near.ancestor")
            $('.medicine_opt').select2({
                // minimumInputLength: 1,
                theme: "bootstrap",
                dir: "ltr",
                placeholder: "",
                maximumSelectionSize: 6,
                containerCssClass: ":all:",
                tags: true,
                tokenSeparators: [','],
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
                    // url: "{{ route('admin.consultation.get-medicine-opt') }}",
                    dataType: 'json',
                    delay: 250,
                    url: function (params) {
                        var cateVal = $(this).closest("div.card-body").find(".category-filter").val();
                        return `{{ route('admin.consultation.get-medicine-opt') }}?search=${params.term}&page=${params.page || 1}&category=${cateVal}`;
                    },
                    // data: function (params) {
                    //     var query = {
                    //         category: 3,
                    //         search: params.term,
                    //         page: params.page || 1
                    //     }
                    //     return query;
                    // },
                    processResults: function (data, params) {
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
                <div class="border-bottom pb-2">
                    <h4 class="mt-1 text-capitalize">{{ __('common.patient_history') }}</h4>
                </div>

                <div>
                    <div class="" id="patientHistoryList"></div>
                    <div class="ajax-load text-center hide">
                        <div class="spinner"></div>
                        <br>Loading...
                    </div>
                    <div class="load-max text-center hide">
                        <p>No more data!</p>
                    </div>
                </div>

                <script type="module">
                    let page = 1;
                    let loading = false;
                    const ps = $('#patientHistoryList').initialiseScrollbar()
                    const loadPatientHistoryList = async () => {

                        if(page == 'stop') return true;

                        $('.ajax-load').removeClass('hide')
                        let res = await $(this).sendRequest({
                            method: 'GET',
                            url: `{{ route('admin.consultation.get-patient-history', $patient->id) }}?page=${page}`
                        });

                        if(res.html === ""){
                            page = 'stop'
                            $('.load-max').removeClass('hide')
                        } else{
                            page++
                        }

                        $("#patientHistoryList").append(res.html);
                        $('.ajax-load').addClass('hide')
                        ps.update();
                    }

                    document.querySelector('#patientHistoryList').addEventListener('ps-y-reach-end', () => {
                        loadPatientHistoryList()
                    });

                    loadPatientHistoryList()
                </script>

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


