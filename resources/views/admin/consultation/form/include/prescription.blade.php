@php
    $id = isset($data) && $data ? $data->id : '*009b*';
@endphp
<div class="card mb-4" id="prescriptionWrapper{{$id}}">
    <div class="card-body">
        <div class="overflow-hidden">
            <h3 class="mt-1 float-left">{{ trans('common.prescription') }}</h3>
            <div class="float-right">
                <x-admin.component.button
                    :onclick="'removePrescriptions('.$id.')'"
                    :class="'btn-outline-danger btn-sm mr-2'"
                    :lang="'remove'"
                />
            </div>
        </div>

        <div class="separator mb-3 mt-3"></div>

        <div class="row">
            {{--            <x-admin.form.select--}}
            {{--                :col="'md-12'"--}}
            {{--                :name="'category[{{$id}}]'"--}}
            {{--                :onchange="'changeCategory(this, {{$id}})'"--}}
            {{--                id="'category-{{$id}}'"--}}
            {{--                :options="\App\Models\Prescription::getCategoryList()"--}}
            {{--                :label="'category'"--}}
            {{--            />--}}

            <div class="col-12">
                <label class="form-group has-float-label tooltip-center-bottom mb-3">
                    <select
                        name="category[{{$id}}]"
                        onchange="changeCategory(this, '{{$id}}')"
                        class="form-control category-filter" id="category-{{$id}}"
                    >
                        <option></option>
                        @foreach(\App\Models\Prescription::getCategoryList() as $key => $cate)
                            <option value="{{ $key }}"
                                    @if(isset($data) && $data->category == $key)selected="selected"@endif>{{ $cate }}</option>
                        @endforeach
                    </select>
                    <span>{{ trans('label.prescription_category') }}
                        <span class="text-danger">*</span>
                    </span>
                </label>
            </div>
        </div>

        @php

            $showOnlyRemark = isset($data) && !count($data->combinations) > 0 ;
            $hideAll = !isset($data);
        @endphp

        <div id="remarkWrapper{{$id}}" class="@if( !$showOnlyRemark || $hideAll ) hide @endif ref-category-{{$id}}">
            <label class="form-group has-float-label tooltip-center-bottom mb-3">
                <textarea class="form-control" rows="5" id="remark{{$id}}" name="remark[{{$id}}]">{{ $data->remark ?? ''}}</textarea>
                <span>{{ trans('label.remark') }}<span class="text-danger">*</span></span>
            </label>
        </div>


        <input type="hidden" value="{{ $data->metric ?? '' }}" name="metric[{{$id}}]" id="metricUnit{{$id}}">
        <div id="medicineWrapper{{$id}}" class="@if( $showOnlyRemark || $hideAll ) hide @endif ref-category-{{$id}}">
            <div class="prescription-combination" id="prescriptionCombination{{$id}}">
                @if(isset($data) && $data)
                    @foreach($data->combinations as $key => $combination)
                        @include('admin.consultation.form.include.prescription-combination', ['data' => $combination])
                    @endforeach
                @endif
            </div>

            <div class="mt-2 border-top">
                <div class="row mt-3">
                    <div class="col-md-8">
                        <x-admin.component.button
                            :onclick="'removeMixMedicine('.$id.')'"
                            :class="'btn-outline-danger btn-sm mr-2'" :lang="'remove'"
                        />
                        <x-admin.component.button
                            :onclick="'addCombination('.$id.')'"
                            :class="'btn-primary btn-sm'" :lang="'add_combination'"
                        />
                    </div>
                    <div class="col-md-4">
                        <label class="form-group has-float-label tooltip-center-bottom mb-3">
                            <div class="input-group">
                                <input type="number"
                                       value="{{ $data->combination_amount ?? 0 }}"
                                       name="combination_amount[{{$id}}]"
                                       class="form-control"
                                       id="metricTotalVal{{$id}}" readonly>
                                <span
                                    class="input-group-text input-group-append input-group-addon metric-unit-{{$id}}">{{ $data->metric_explain ?? '' }}</span>
                            </div>
                            <span>{{ trans('label.total') }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="doseWrapper{{$id}}" class="@if( $showOnlyRemark || $hideAll ) hide @endif ref-category-{{$id}}">
            <div class="separator mb-4"></div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <input type="number" name="time_per_day[{{$id}}]"
                               class="form-control"
                               id="timePerDay{{$id}}"
                               value="{{ $data->time_per_day ?? 0 }}"
                               onkeydown="countDailyDose('{{$id}}')"
                               onchange="countDailyDose('{{$id}}')"
                        >
                        <span>{{ trans('label.time_per_day') }}<span class="text-danger">*</span></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <div class="input-group">
                            <input type="number"
                                   value="{{ $data->dose_per_time ?? 0 }}"
                                   name="dose_per_time[{{$id}}]"
                                   class="form-control"
                                   id="timePerDose{{$id}}"
                                   onkeydown="countDailyDose('{{$id}}')"
                                   onchange="countDailyDose('{{$id}}')"
                            >
                            <span
                                class="input-group-text input-group-append input-group-addon metric-unit-{{$id}}">{{ $data->metric_explain ?? '' }}</span>
                        </div>
                        <span>{{ trans('label.time_per_dose') }}<span class="text-danger">*</span></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <div class="input-group">
                            <input type="number"
                                   value="{{ $data->dose_daily ?? 0 }}"
                                   name="dose_daily[{{$id}}]"
                                   class="form-control"
                                   id="totalDailyDoseVal{{$id}}"
                                   readonly
                            >
                            <span
                                class="input-group-text input-group-append input-group-addon metric-unit-{{$id}}">{{ $data->metric_explain ?? '' }}</span>
                        </div>
                        <span>{{ trans('label.daily_dose') }}</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6></h6>
                    @foreach(\App\Models\Prescription::getDirectionList() as $key => $label)
                        <div class="custom-control custom-radio">
                            <input type="radio"
                                   name="direction[{{$id}}]"
                                   id="direction-{{$key}}-{{$id}}"
                                   value="{{ $key }}"
                                   class="custom-control-input"
                                   @if(isset($data) && $data->direction == $key) checked @endif
                            />
                            <label class="custom-control-label"
                                   for="direction-{{$key}}-{{$id}}">{{ $label }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

