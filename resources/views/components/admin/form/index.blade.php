<?php $code = random_int(121212, 999999)?>
<form class="v2 form-user {{$class ?? ''}}"
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
        let v = msg;
        let attrId = $('#submitForm{{isset($id) ? $id : $code}}').find("[name='"+name+"']").attr('id')
        let parent = $('#submitForm{{isset($id) ? $id : $code}}').find("[name='"+name+"']").closest('.input-row');
        let child = parent.childNodes.getElementsByClassName("errorMsg");
        console.log(child)
        // document.getElementById('DivId').childNodes;

        if(attrId){
            $('#'+attrId).addClass('danger');
            let sentence = ''
            if(v.length == 0){
                $('<div class="errorMsg">'+v+'</div>').insertAfter('#'+attrId);
            }
            else{
                $.each(v, function(l, w) {
                    if(v.length > 1 && l >= 0 && l < v.length -1) sentence = sentence.concat(w.replace('.', '') +' & ');
                    else sentence = sentence.concat(w);
                })
                $('<div class="errorMsg">'+sentence+'</div>').insertAfter('#'+attrId);
            }
        }
    }

    function resetFormErrMsg(){
        const boxes = document.querySelectorAll('.errorMsg');
        boxes.forEach(box => {
            box.remove();
        });
    }
</script>
<script type="module">
    $('#submitForm{{isset($id) ? $id : $code}}').on('submit',async function(e){
        e.preventDefault();
        // $(this).showLoading() // disable submit btn
        resetFormErrMsg()
        let res = await $(this).sendRequest({
            data: new FormData(this),
            url: "{{$route ?? request()->fullUrl()}}",
        });

        document.getElementById("submitForm{{isset($id) ? $id : $code}}").reset();
        if(res.html){
            $('#modalWrapper').openModal({ html: res.html, refresh: true, header: res.title??null});
        }
        {{ $script ?? '' }}
    });
</script>
