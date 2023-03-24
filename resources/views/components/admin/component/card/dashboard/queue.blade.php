<p>
    The total number of patient waiting are listing below based on the role assigned. <br>
    Click the below button to handle the patient.
</p>
<p class="lead mb-0">
    @if(auth()->user()->hasPermissionTo( 'queue.'. \App\Models\Queue::RECEPTIONIST ))
        @php
            $count = (new \App\Modules\Admin\Queue\Services\QueueService())->countWaitingPatient();
            $roleId = \App\Models\Queue::RECEPTIONIST;
        @endphp
        <button
            onclick="location.href='{{ route('admin.queue.show', $roleId) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.receptionist') }}
            <span class="badge badge-light ml-1" id="queueCount-reception">{{ $count }}</span>
        </button>
    @endif

    @if(auth()->user()->hasPermissionTo( 'queue.'. \App\Models\Queue::DOCTOR ))
        @php
            $count = (new \App\Modules\Admin\Queue\Services\QueueService())->countServingPatient();
            $roleId = \App\Models\Queue::DOCTOR;
        @endphp
        <button
            onclick="location.href='{{ route('admin.queue.show', $roleId) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.consultation') }}
            <span class="badge badge-light ml-1" id="queueCount-doctor">{{ $count }}</span>
        </button>
    @endif

    @if(auth()->user()->hasPermissionTo( 'queue.'. \App\Models\Queue::PHARMACY ))
        @php
            $roleId = \App\Models\Queue::PHARMACY;
            $count = (new \App\Modules\Admin\Queue\Services\QueueService())->countWaitingPatient(\App\Models\Queue::MEDICINE);
        @endphp
        <button
            onclick="location.href='{{ route('admin.queue.show', $roleId) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.pharmacy') }}
            <span class="badge badge-light ml-1" id="queueCount-pharmacy">{{ $count }}</span>
        </button>
    @endif
</p>
<script type="module">
    @php
    use App\Models\Queue;
    @endphp

    $(this).broadcasting();

    const updateQueueCount = async () =>{
        let res = await $(this).sendRequest({
            url: '{{ route('admin.get-queue-count') }}',
            alert: false,
        })

        if(!! document.getElementById('queueCount-reception')){
            $('#queueCount-reception').html(res.data.reception)
        }

        if(!! document.getElementById('queueCount-doctor')){
            $('#queueCount-doctor').html(res.data.doctor)
        }

        if(!! document.getElementById('queueCount-pharmacy')){
            $('#queueCount-pharmacy').html(res.data.pharmacy)
        }
    }

    Echo.channel('channel-name').listen('.QueueUpdatedEvent',(e) => {
        updateQueueCount();
    })
</script>
