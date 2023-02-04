<?php $code = random_int(121212, 999999)?>
<form class="{{$class ?? ''}}"
      id="submitForm{{isset($id) ? $id : $code}}"
    {{isset($file) ? 'enctype=multipart/form-data' : ''}}>
    @csrf
    {{$body ?? ''}}

    @if(isset($footer))
        <div class="d-flex justify-content-end align-items-center mt-4">
            {{$footer ?? ''}}
        </div>
    @endif
</form>

<script type="text/javascript">
    function handleValidationErr(err){
        let resJson = err.responseJSON;
        if (resJson.errors && Object.keys(resJson.errors).length > 0) {
            $.each(resJson.errors, function(k, v) {
                appendErrMsg(k, v)
            });
        }
    }

    function appendErrMsg(name, msg) {
        let attrId = $('#submitForm{{isset($id) ? $id : $code}}').find("[name='"+name+"']").attr('id')
        let parent = $('#submitForm{{isset($id) ? $id : $code}}').find("[name='"+name+"']").closest('.form-group');
        $(parent).find('div.error-msg').each(function(i, obj) {
            $(obj).remove()
        });

        if(attrId && msg.length > 0){
            $('#'+attrId).addClass('error');
            let sentence = ''
            if(msg.length === 0){
                $(`<div class="error-msg error">${msg}</div>`).insertBefore(parent);
            }
            else{
                $.each(msg, function(l, w) {
                    if(msg.length > 1 && l >= 0 && l < msg.length -1) sentence = sentence.concat(w.replace('.', '') +' & ');
                    else sentence = sentence.concat(w);
                })
                $(parent).last().append(`<div class="error-msg error">${sentence}</div>`);
                // $('<div class="errorMsg">'+sentence+'</div>').insertAfter('#'+attrId);
            }
        }
    }

    function resetFormErrMsg(){
        const boxes = document.querySelectorAll('.error-msg');
        boxes.forEach(box => {
            box.remove();
        });
    }

</script>
<script type="module">

    if ($().select2) {
        $(".select2-single, .select2-multiple").select2({
            theme: "bootstrap",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:",
            dropdownParent: $('#'+$(this).getModalId({latest: true}))
        });
    }

    const checkErrExists = () => {
        if($('#submitForm{{isset($id) ? $id : $code}}').find('div.errorMsg').length > 0){
            $('#app-alert').showAlert({status: 'danger', message: 'Please ensure all value are in a proper format.'});
            return true;
        }
        return false
    }

    $('#submitForm{{isset($id) ? $id : $code}}').on('submit',async function(e){
        e.preventDefault();
        // if(checkErrExists()) return true;
        resetFormErrMsg()

        let res = await $(this).sendRequest({
            data: new FormData(this),
            url: "{{$route ?? request()->fullUrl()}}",
        });

        @if(isset($reset) && $reset)
        document.getElementById("submitForm{{isset($id) ? $id : $code}}").reset();
        @endif

        if(res.html){
            $('#modalWrapper').openModal({ html: res.html, refresh: true, header: res.title??null});
        }

        {{ $script ?? '' }}

    });
</script>
