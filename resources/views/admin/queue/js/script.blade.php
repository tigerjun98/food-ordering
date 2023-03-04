<script type="text/javascript" src="{{ asset('js/backend/pages/queue/sortable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/backend/pages/queue/function.js') }}"></script>

<script type="module">

    // $(window).keydown(function(event){
    //     let input = !! document.getElementById("queryNric");
    //     if(input){
    //         input = document.getElementById("queryNric");
    //         input.addEventListener("keyup", function(event) {
    //             console.log( '123' )
    //             if (event.keyCode === 13) {
    //                 event.preventDefault();
    //                 searchPatient();
    //             }
    //         });
    //     }
    // });


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
        appendMsg({{ Queue::RECEPTIONIST }}, message)
        appendMsg({{ Queue::PHARMACY }}, message)
    }


    const appendMsg = (id, message) => {

        if( !! document.getElementById(`statusBar-${id}`) ){
            if(message.length > 0){
                $(`#statusBar-${id}`).hide().html(`<div class="alert alert-info mb-0" role="alert">${message}</div>`).fadeIn()
            } else{
                $(`#statusBar-${id}`).hide();
            }
        }
    }

</script>
