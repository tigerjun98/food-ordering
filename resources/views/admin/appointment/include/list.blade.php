@foreach($appointments as $data)
    <div id="appointmentList-{{ $data->id }}" class="mb-3 border-bottom pb-3 position-relative">

        <div class="position-absolute card-top-buttons pt-0 pr-0">
            <button
                class="btn btn-header-light icon-button dropdown-toggle"
                type="button"
                data-toggle="dropdown"
            ></button>
            <div class="dropdown-menu dropdown-menu-right">
                <a
                    class="dropdown-item"
                    href="javascript:viewAppointment({{$data->id}})"
                >
                    {{ trans('common.queue') }}
                </a>

                <a
                    class="dropdown-item"
                    href="javascript:editAppointment({{$data->id}})"
                >
                    {{ trans('common.edit') }}
                </a>

                <a
                    class="dropdown-item text-danger"
                    href="javascript:cancelAppointment({{$data->id}})"
                >
                    {{ trans('common.cancel') }}
                </a>
            </div>
        </div>

        <div onclick="viewAppointment({{$data->id}})">
            <div class="font-weight-semibold mb-0">
                {{ $data->patient->full_name }}
                <x-admin.component.badge
                    :class="'mt-0 ml-1'"
                    :theme="'secondary'"
                    :text="$data->patient->group->full_name ?? null"
                />
            </div>
            <p class="font-weight mb-1 mt-1 text-small">{{ $data->dateFormat('appointment_date', 'r') }}</p>

            <div class="d-flex">
                <x-admin.component.badge
                    :light="true"
                    :theme="'secondary'"
                    :text="$data->doctor->full_name"
                />
            </div>
        </div>

        @if($data->remark)
        <div class="mt-3 mb-0 text-small text-semi-muted">
            {{ $data->remark }}
        </div>
        @endif
    </div>
@endforeach
