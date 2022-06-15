<?php $code = random_int(121212, 999999)?>
<form class="form-profile" id="SubmitForm{{isset($id) ? $code : ''}}">
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
    .flat-form{
        margin: 10px 0;
    }
    .input-box{
        margin: 13px 0px;
    }
    .title-infor-account{
        text-transform: capitalize;
    }
</style>
