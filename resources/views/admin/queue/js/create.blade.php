@php
    use App\Models\Queue;
@endphp

<script type="module">
    let waiting = {
        id: {{ Queue::WAITING }},
        text: '{{ Queue::getStatusList()[Queue::WAITING] }}'
    }

    let serving = {
        id: {{ Queue::SERVING }},
        text: '{{ Queue::getStatusList()[Queue::SERVING] }}'
    }

    let pending = {
        id: {{ Queue::PENDING }},
        text: '{{ Queue::getStatusList()[Queue::PENDING] }}'
    }

    let holding = {
        id: {{ Queue::HOLDING }},
        text: '{{ Queue::getStatusList()[Queue::HOLDING] }}'
    }

    let completed = {
        id: {{ Queue::COMPLETED }},
        text: '{{ Queue::getStatusList()[Queue::COMPLETED] }}'
    }

    let expired = {
        id: {{ Queue::HOLDING }},
        text: '{{ Queue::getStatusList()[Queue::HOLDING] }}'
    }

    $('#role').change(function (){
        let role = $(this).val();
        getRelatedStatus(role)
        console.log( getTypeVal(role) )
        $('#type').val( getTypeVal(role) )
        $('#status').val({{ $data->status ?? Queue::PENDING }}).trigger('change')
    });

    function getTypeVal(role){

        if( role === '{{ Queue::RECEPTIONIST }}' || role === '{{ Queue::DOCTOR }}' ){
            return '{{ Queue::CONSULTATION }}'

        } else if( role === '{{ Queue::PHARMACY }}' ){
            return '{{ Queue::MEDICINE }}'

        } else{
            return '{{ Queue::PAYMENT }}'
        }
    }

    function getRelatedStatus(role) {

        if(     role === '{{ Queue::RECEPTIONIST }}'
            ||  role === '{{ Queue::PHARMACY }}'
            ||  role === '{{ Queue::CASHIER }}'
        ){
            initSelect2Status([
                waiting, pending
            ])

        } else if( role === '{{ Queue::DOCTOR }}'){
            initSelect2Status([
                serving, holding
            ])

        } else {
            initSelect2Status([])
        }
    }

    function initSelect2Status(data){
        $('#status').val(null).empty()
        $('#status').select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:",
            data
        });
    }
</script>
<script type="text/javascript">

    function patientExists() {
        if( $('#user_id').val() ){
            return true;
        }
        return false;
    }

    function hideRelatedBox(){
        const refs = document.getElementsByClassName(`hide-box`);
        Array.prototype.forEach.call(refs, function (el) { // loop classes
            $(el).hide();
        });
    }

    function handleQueueInfo() {
        hideRelatedBox()
        if( patientExists() ){
            $('#patientQueueInfo').show().slideDown();
            document.querySelector('button[type="submit"]').style.display="block";
        } else{
            $('#patientSearch').show().slideDown();
            document.querySelector('button[type="submit"]').style.display="none";
        }
    }

    handleQueueInfo()
</script>
