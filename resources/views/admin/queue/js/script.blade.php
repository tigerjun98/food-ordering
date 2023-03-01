<script type="text/javascript" src="{{ asset('js/backend/pages/queue/sortable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/backend/pages/queue/function.js') }}"></script>

<script type="module">

    let roleIds = '{{ implode( ',', array_keys( \App\Models\Queue::getRoleList() ) ) }}'.split(',')
    let requestRole = '{{ request()->role }}'

    if(roleIds.includes(requestRole)){
        setQueueRoleValue(requestRole)
    } else{
        $(this).showAlert({ status : 'danger', message: 'Permission denied!' });
    }

    Echo.channel('channel-name').listen('.QueueUpdatedEvent',(e) => {

        @if($role == \App\Models\Queue::RECEPTIONIST)
            if(e.type == '{{ \App\Models\Queue::NEW_QUEUE }}'){
                addNewQueue(e.queue)
            }
            if(e.type == '{{ \App\Models\Queue::CONSULTED }}'){
                patientConsulted(e.message, e.queue.doctor_id)
            }
        @endif

        @if($role == \App\Models\Queue::DOCTOR)
            if(e.type == '{{ \App\Models\Queue::NEW_QUEUE }}'){
                newPatientWaiting(e.message)
            }
            if(e.type == '{{ \App\Models\Queue::SERVED }}'){
                addNewQueue(e.queue)
            }
        @endif

        @if($role == \App\Models\Queue::PHARMACY)
            if(e.type == '{{ \App\Models\Queue::CONSULTED }}'){
                addNewQueue(e.queue)
            }
        @endif
    })

    const addNewQueue = async (queue) => {
        let url = '{{ route('admin.queue.get-specific-box', ':id') }}'.replace(':id', queue.id)+'?role={{ request()->role }}'
        let elemExists = !! document.getElementById(`queueBox-${queue.id}`);
        if(!! document.getElementById(`queueListing-${queue.status}`) && !elemExists ){
            await $(`#queueListing-${queue.status}`).setHtml({
                url, insertMethod: queue.priority_checkbox ? 'prepend' : 'append'
            })
            $(`#queueBox-${queue.id}`).hide().slideDown(500)
        }
    }

    const newPatientWaiting = (message) => {
        let id = {{ \App\Models\Queue::DOCTOR }};
        if( !! document.getElementById(`statusBar-${id}`) ){
            $(`#statusBar-${id}`).hide().html(`<div class="alert alert-info mb-0" role="alert">${message}</div>`).fadeIn()
        }
    }

    const patientConsulted = (message, doctorId) => {
        console.log(doctorId)
        let id = {{ \App\Models\Queue::RECEPTIONIST }};
        if( !! document.getElementById(`statusBar-${id}`) ){
            $(`#statusBar-${id}`).hide().html(`<div class="alert alert-info mb-0" role="alert">${message}</div>`).fadeIn()
        }
    }

</script>
