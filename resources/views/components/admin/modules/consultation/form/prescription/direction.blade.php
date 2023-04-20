@props([
    'id' => '*009b*',
    'model' => [],
    'required' => true,
])

<div class="row">
    <div class="col-md-12">
        <label class="form-group has-float-label tooltip-center-bottom mb-3">
            <select
                data-width="100%"
                multiple
                name="direction[{{$id}}]"
                class="form-control select2-direction"
                id="direction-{{$id}}"
            >
                <option></option>
                @foreach(\App\Models\Prescription::getDirectionList() as $key => $direction)
                    <option value="{{ $key }}"
                        @if(!blank($model) && $model->direction == $key)selected="selected"@endif>{{ $direction }}
                    </option>
                @endforeach
            </select>
            <span>{{ trans('label.direction') }}
                @if ($required)
                    <span class="text-danger">*</span>
                @endif
            </span>
        </label>
    </div>
</div>
