<?php $code = random_int(121212, 999999)?>
<form id="SubmitForm{{isset($id) ? $code : ''}}">
    @csrf
    {{$body ?? ''}}
</form>

<script>
    $('#SubmitForm{{isset($id) ? $code : ''}}').on('submit',async function(e){
        e.preventDefault();
        try {
            let response = await $(this).sendRequest({
                data: $(this).serialize(),
                url: "{{$route ?? route('submitOrder')}}",
                alertSuccess: true
            });
        } catch(err) {
            console.log(err);
        }
    });
</script>
<style>
    .billing-info-wrap .billing-info label {
        text-transform: capitalize;
    }
    ::-webkit-input-placeholder { /* Edge */
        text-transform: capitalize;
    }
    ::placeholder {
        text-transform: capitalize;
    }
</style>
