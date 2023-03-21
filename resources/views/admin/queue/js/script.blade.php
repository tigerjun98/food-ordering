<script type="text/javascript" src="{{ asset('js/backend/pages/queue/sortable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/backend/pages/queue/function.js') }}"></script>

<script type="module">

    @php
    use App\Models\Queue;
    @endphp
    let roleIds = '{{ implode( ',', array_keys( Queue::getRoleList() ) ) }}'.split(',')
    let requestRole = '{{ $roleId }}'

    $(this).broadcasting();

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
                    if(e.queue.doctor_id === {{ Auth::id() }}){
                        addNewQueue(e.queue)
                    }
                    newPatientWaiting(e.message)
                }
                break;
            case '{{ Queue::PHARMACY }}':
                if(e.type == '{{ Queue::CONSULTED }}'){
                    addNewQueue(e.queue)
                    patientConsulted(e.message, e.queue.doctor_id)
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
        appendMsg(id, message)
    }

    const patientConsulted = (message, doctorId) => {
        appendMsg({{ Queue::RECEPTIONIST }}, message, 'warning')
        appendMsg({{ Queue::PHARMACY }}, message, 'warning')
    }

    const appendMsg = (id, message, type) => {

        if( !! document.getElementById(`statusBar-${id}`) ){
            if(message.length > 0){
                $(`#statusBar-${id}`).hide().html(`<div class="alert alert-${type ?? 'info'} mb-0" role="alert">${message}</div>`).fadeIn()
            } else{
                $(`#statusBar-${id}`).hide();
            }
        }
    }

    if(roleIds.includes(requestRole)){
        setQueueRoleValue(requestRole)
    }

</script>

<script type="text/javascript">

    function setQueueRoleValue(roleId){
        const refs = document.getElementsByClassName(`role-link`);
        Array.prototype.forEach.call(refs, function (el) { // loop classes
            $(el).removeClass('active')
        });
        $(`#tab-${roleId}`).addClass('active')
        $('#setRoleVal').val(roleId)
        if(roleId.toString() === '{{ Queue::DOCTOR }}'){
            $('#doctor_id').val('{{ Auth::id() }}').trigger('change')
        } else{
            $('#doctor_id').val('').trigger('change')
        }

        refreshDataTable();
    }
</script>

