@foreach($appointments as $data)
    <div id="appointmentList-{{ $data->id }}" class="mb-3 border-bottom position-relative">

        <div class="position-absolute card-top-buttons pt-0 pr-0">
            <button
                onclick="cancelAppointment({{ $data->id }})"
                class="btn btn-header-light icon-button text-danger">
                <i class="simple-icon-trash"></i>
            </button>
        </div>

        <div onclick="viewAppointment({{$data->id}})">
            <p class="font-weight-medium mb-0">{{ $data->patient->full_name_with_group }}</p>
            <p class="text-muted mb-0 mt-1 text-small">{{ $data->dateFormat('appointment_date', 'h:i A') }}</p>

            <x-admin.component.badge
                :light="true"
                :theme="'secondary'"
                :text="$data->doctor->full_name"
            />
        </div>
        <div class="d-flex mt-2 mb-2 border-top pt-2">
            <x-admin.component.button
                :class="'btn-outline-primary btn-sm mr-2'"
                :lang="'edit'"
                :onclick="'editAppointment('.$data->id.')'"
            />
            <x-admin.component.button
                :class="'btn-primary btn-sm'"
                :lang="'queue'"
                :onclick="'$(this).openModal({url: `'.route('admin.appointment.edit', $data->id).'`})'"
            />
        </div>
    </div>
@endforeach
