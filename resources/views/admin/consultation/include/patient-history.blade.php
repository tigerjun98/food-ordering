@foreach($consultations as $data)
    <div class="mb-3 border-bottom"
         onclick="viewConsultationDetails('{{$data->id}}')">
        <div class="d-flex flex-row justify-content-between">
            <div class="">
                <a href="#">
                    <p class="font-weight-medium mb-0">{{ $data->dateFormat('consulted_at', 'd F, Y') }}</p>
                    <p class="text-muted mb-0 text-small">{{ get_time_ago( strtotime($data->created_at) ) }}</p>
                </a>
                <p class="mt-3 text-small text-semi-muted">
                    {{ $data->symptom }}
                </p>
            </div>
        </div>
    </div>
@endforeach
