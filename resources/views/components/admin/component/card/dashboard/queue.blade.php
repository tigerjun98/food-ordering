<p>
    The total number of patient waiting are listing below based on the role assigned. <br>
    Click the below button to handle the patient.
</p>

@php
use App\Models\Queue;
$service = (new \App\Modules\Admin\Queue\Services\QueueCountService());
@endphp

<p class="lead mb-0">
    @if(auth()->user()->hasPermissionTo( 'queue.'. Queue::RECEPTIONIST ))
        <button
            onclick="location.href='{{ route('admin.queue.show', Queue::RECEPTIONIST) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.receptionist') }}
            <span class="badge badge-light ml-1" id="queueCount-reception">{{ $service->getTodayReceptionistCount() }}</span>
        </button>
    @endif

    @if(auth()->user()->hasPermissionTo( 'queue.'. Queue::DOCTOR ))
        <button
            onclick="location.href='{{ route('admin.queue.show', Queue::DOCTOR) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.consultation') }}
            <span class="badge badge-light ml-1" id="queueCount-doctor">{{ $service->getTodayDoctorCount(auth()->user()) }}</span>
        </button>
    @endif

    @if(auth()->user()->hasPermissionTo( 'queue.'. Queue::PHARMACY ))
        <button
            onclick="location.href='{{ route('admin.queue.show', Queue::PHARMACY) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.pharmacy') }}
            <span class="badge badge-light ml-1" id="queueCount-pharmacy">{{ $service->getTodayPharmacyCount() }}</span>
        </button>
    @endif

    @if(auth()->user()->hasPermissionTo( 'queue.'. Queue::CASHIER ))
        <button
            onclick="location.href='{{ route('admin.queue.show', Queue::CASHIER) }}'"
            type="button" class="btn btn-lg btn-primary">{{ trans('common.cashier') }}
            <span class="badge badge-light ml-1" id="queueCount-cashier">{{ $service->getTodayCashierCount() }}</span>
        </button>
    @endif
</p>
<script type="module">

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

        if(!! document.getElementById('queueCount-cashier')){
            $('#queueCount-cashier').html(res.data.cashier)
        }
    }

    Echo.channel('channel-name').listen('.QueueUpdatedEvent',(e) => {
        updateQueueCount();
    })
</script>
