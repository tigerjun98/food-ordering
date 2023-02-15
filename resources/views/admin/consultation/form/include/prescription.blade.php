<div class="card mb-4" id="prescriptionWrapper*009b*">
    <div class="card-body">
        <div class="overflow-hidden">
            <h3 class="mt-1 float-left">{{ trans('common.prescription') }}</h3>
            <div class="float-right">
                <x-admin.component.button
                    :onclick="'removePrescriptions(*009b*)'"
                    :class="'btn-outline-danger btn-sm mr-2'"
                    :lang="'remove'"
                />
            </div>
        </div>

        <div class="separator mb-3 mt-3"></div>

        <div class="row">
            <div class="col-12">
                <label class="form-group has-float-label tooltip-center-bottom mb-3">
                    <select
                        name="category[*009b*]"
                        onchange="changeCategory(this, '*009b*')"
                        class="form-control" id="category-*009b*"
                    >
                        <option></option>
                        @foreach(\App\Models\Prescription::getCategoryList() as $key => $cate)
                            <option value="{{ $key }}">{{ $cate }}</option>
                        @endforeach
                    </select>
                    <span>Medicine
                        <span class="text-danger">*</span>
                    </span>
                </label>
            </div>
        </div>

        <div id="remarkWrapper*009b*" class="hide ref-category-*009b*">
            <x-admin.form.textarea :rows="5" :name="'remark[*009b*]'"/>
        </div>

        <div id="medicineWrapper*009b*" class="hide ref-category-*009b*">
            <div class="" id="prescriptionCombination*009b*"></div>
            <div class="mt-2 border-top">
                <div class="row mt-3">
                    <div class="col-md-8">
                        <x-admin.component.button
                            :onclick="'removeMixMedicine(*009b*)'"
                            :class="'btn-outline-danger btn-sm mr-2'" :lang="'remove'"
                        />
                        <x-admin.component.button
                            :onclick="'addCombination(*009b*)'"
                            :class="'btn-primary btn-sm'" :lang="'add_combination'"
                        />
                    </div>
                    <div class="col-md-4">
                        <label class="form-group has-float-label tooltip-center-bottom mb-3">
                            <div class="input-group">
                                <input type="number" class="form-control" id="metricTotalVal*009b*" disabled>
                                <span class="input-group-text input-group-append input-group-addon metric-unit-*009b*"></span>
                            </div>
                            <span>Medicine
                        </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="doseWrapper*009b*" class="hide ref-category-*009b*">
            <div class="separator mb-4"></div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <input type="number" name="time_per_day[*009b*]" min="1" step="1" class="form-control"
                               id="timePerDay*009b*"
                               onkeydown="countDailyDose('*009b*')"
                               onchange="countDailyDose('*009b*')"
                        >
                        <span>{{ trans('label.time_per_day') }}<span class="text-danger">*</span></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <div class="input-group">
                            <input type="number" name="dose[*009b*]" min="1" step="1" class="form-control"
                                   id="timePerDose*009b*"
                                   onkeydown="countDailyDose('*009b*')"
                                   onchange="countDailyDose('*009b*')"
                            >
                            <span class="input-group-text input-group-append input-group-addon metric-unit-*009b*"></span>
                        </div>
                        <span>{{ trans('label.time_per_dose') }}<span class="text-danger">*</span></span>
                    </label>
                </div>
                <div class="col-md-4">
                    <label class="form-group has-float-label tooltip-center-bottom mb-3">
                        <div class="input-group">
                            <input type="number" class="form-control"
                                   id="totalDailyDoseVal*009b*"
                                   readonly
                            >
                            <span class="input-group-text input-group-append input-group-addon metric-unit-*009b*"></span>
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
                        <input  type="radio"
                                name="'direction[*009b*]'"
                                id="direction-{{$key}}-*009b*"
                                value="{{ $key }}"
                                class="custom-control-input"
                        />
                        <label class="custom-control-label"
                               for="direction-{{$key}}-*009b*">{{ $label }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

