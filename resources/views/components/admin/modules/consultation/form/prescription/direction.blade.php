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
                        @if(isset($data->direction) && $data->direction == $key)selected="selected"@endif>{{ $direction }}
                    </option>
                @endforeach
            </select>
            <span>{{ trans('label.direction') }}
                <span class="text-danger">*</span>
            </span>
        </label>
    </div>
</div>
