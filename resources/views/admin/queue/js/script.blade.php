<script type="text/javascript" src="{{ asset('js/backend/pages/queue/sortable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/backend/pages/queue/function.js') }}"></script>

<script type="module">

    @php
    use App\Models\Queue;
    @endphp
    let roleIds = '{{ implode( ',', array_keys( Queue::getRoleList() ) ) }}'.split(',')
    let requestRole = '{{ $roleId }}'

    if(roleIds.includes(requestRole)){
        setQueueRoleValue(requestRole)
    }

    Echo.channel('channel-name').listen('.QueueUpdatedEvent',(e) => {

        let roleId = $('#setRoleVal').val();

        switch (roleId){
            case '{{ Queue::RECEPTIONIST }}':
                if(e.type == '{{ Queue::NEW_QUEUE }}'){
                    addNewQueue(e.queue)
                }
                if(e.type == '{{ Queue::CONSULTED }}'){
                    patientConsulted(e.message, e.queue.doctor_id)
                }
                break;
            case '{{ Queue::DOCTOR }}':
                if(e.type == '{{ Queue::NEW_QUEUE }}'){
                    newPatientWaiting(e.message)
                }
                if(e.type == '{{ Queue::SERVED }}'){
                    addNewQueue(e.queue)
                }
                break;
            case '{{ Queue::PHARMACY }}':
                if(e.type == '{{ Queue::CONSULTED }}'){
                    addNewQueue(e.queue)
                }
                break;
        }
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
        let id = {{ Queue::DOCTOR }};
        if( !! document.getElementById(`statusBar-${id}`) ){
            $(`#statusBar-${id}`).hide().html(`<div class="alert alert-info mb-0" role="alert">${message}</div>`).fadeIn()
        }
    }

    const patientConsulted = (message, doctorId) => {
        let id = {{ Queue::RECEPTIONIST }};
        if( !! document.getElementById(`statusBar-${id}`) ){
            $(`#statusBar-${id}`).hide().html(`<div class="alert alert-info mb-0" role="alert">${message}</div>`).fadeIn()
        }
    }

</script>
