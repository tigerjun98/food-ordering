@php
    $id = isset($data) && $data ? $data->prescription_id : '*009b*';
@endphp

<div class="row medicine">
    <div class="col-md-8">
        <label class="form-group has-float-label tooltip-center-bottom mb-3">
            <select data-width="100%" name="medicine_id[{{$id}}][]" class="medicine_opt">
                @if(isset($data) && $data)
                    <option value="{{ $data->medicine_id }}" selected="selected">{{ $data->medicine->full_name ?? '' }}</option>
                @endif
            </select>
            <span>{{ trans('label.medicine') }}</span>
        </label>
    </div>

    <div class="col-md-4">
        <label class="form-group has-float-label tooltip-center-bottom mb-3">
            <div class="input-group">
                <input type="number"
                       value="{{ $data->quantity ?? 0 }}"
                       name="quantity[{{$id}}][]" max="9999" class="form-control metric-val-{{$id}}"
                       onkeydown="countTotalMetric('{{$id}}')"
                       onchange="countTotalMetric('{{$id}}')"
                >
                <span class="input-group-text input-group-append input-group-addon metric-unit-{{$id}}">{{ $data->prescription->metric_explain ?? '' }}</span>
            </div>
            <span>{{ trans('label.quantity') }}</span>
        </label>
    </div>
</div>
