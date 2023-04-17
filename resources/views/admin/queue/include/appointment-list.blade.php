@foreach($appointments as $data)
    <div id="appointmentList-{{ $data->id }}" class="mb-3 border-bottom">
        <div class="d-flex flex-row justify-content-between">
            <div onclick="viewAppointment({{$data->id}})">
                <a href="#">
                    <p class="font-weight-medium mb-0">{{ $data->patient->full_name_with_group }}</p>
                    <p class="font-weight-medium mb-0">{{ $data->dateFormat('appointment_date', 'r') }}</p>
                </a>
                <p class="mt-2 text-small text-semi-muted">{{ $data->doctor->full_name }}</p>
            </div>
            <div>
                <button
                    onclick="cancelAppointment({{$data->id}})"
                    class="btn btn-header-light icon-button text-danger">
                    <i class="simple-icon-close"></i>
                </button>
            </div>
        </div>
    </div>
@endforeach
