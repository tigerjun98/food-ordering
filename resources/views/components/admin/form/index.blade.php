<?php $code = random_int(121212, 999999)?>

<div class="card card-primary">
    <form class="card-body" id="submitForm{{isset($id) ? $id : $code}}" {{isset($file) ? 'enctype=multipart/form-data' : ''}}>
        @csrf
        {{$body ?? ''}}

        @if(isset($footer))
        @else
            <div class="footer">
                <button type="button" onclick="history.back()" class="btn btn-danger"><i class="fa fa-fw fa-arrow-left mr-2"></i>Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2"></i>Save</button>
            </div>
        @endif
    </form>
</div>

<script type="text/javascript">
    function handleValidationErr(err){
        let resJson = err.responseJSON;
        if (resJson.errors && Object.keys(resJson.errors).length > 0) {
            $.each(resJson.errors, function(k, v) {
                let attrId = $('#submitForm{{isset($id) ? $id : $code}}').find("[name='"+k+"']").attr('id')
                if(attrId){
                    $('#'+attrId).addClass('danger');
                    let sentence = ''
                    if(v.length == 0){
                        document.getElementById(attrId).closest('.form-group').innerHTML += '<div class="errorMsg">'+v+'</div>';
                    }
                    else{
                        $.each(v, function(l, w) {
                            if(v.length > 1 && l >= 0 && l < v.length -1) sentence = sentence.concat(w.replace('.', '') +' & ');
                            else sentence = sentence.concat(w);
                        })
                        document.getElementById(attrId).closest('.form-group').innerHTML += '<div class="errorMsg">'+v+'</div>';
                        // $('#'+attrId).appendChild('<div class="errorMsg">'+v+'</div>')
                        // $('<div class="errorMsg">'+sentence+'</div>').insertAfter('#'+attrId);
                    }
                }
            });
        }
    }

    function resetFormErrMsg(){
        let errMsgDiv = document.getElementsByClassName("errorMsg");
        Array.prototype.forEach.call(errMsgDiv, function(el) {
            el.remove()
        });
    }
</script>

@push('js')
    <script type="module">
        $(".select2-single, .select2-multiple").select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:"
        });

        $('#submitForm{{isset($id) ? $id : $code}}').on('submit',async function(e){
            e.preventDefault();
            resetFormErrMsg()
            let res = await $(this).sendRequest({
                data: new FormData(this),
                url: "{{$route ?? request()->fullUrl()}}",
            });

            if(res.status === 200){
                @if(isset($redirectIfSuccess))
                @if($redirectIfSuccess == 'back')
                history.back()
                @else
                    window.location.href = "{{ $redirectIfSuccess }}";
                @endif
                @endif
            }
        });
    </script>
@endpush

