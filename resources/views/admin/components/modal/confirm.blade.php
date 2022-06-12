<div class="modal fade bd-example-modal" id="{{ $confirmModalID ?? 'modalConfirm' }}" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $confirmTitle ?? 'Confirmation' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $confirmDescription ?? 'Confirmation' }}
                <form class="tooltip-right-top" id="{{ $confirmFromID ?? 'formConfirm' }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="confirmID">
                    {{ $confirmForm ?? '' }}
                    <hr>
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="{{ $submitButton ?? 'confirmBtn' }}" class="btn btn-primary">Confirm</button>
                </form>
            </div>
            {{ $confirmAction ?? '' }}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>--}}
{{--                <button type="button" id="confirmBtn" class="btn btn-primary">Confirm</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<script>
    var confirmURL = '{{ $confirmFormURL ?? '' }}';
    function confirmID{{ $confirmFromID ?? '' }}(id){
        $('#confirmID').val(id);
        confirmURL = confirmURL.replace(':orderID', id);
    }

    $("#{{ $confirmFromID ?? 'formConfirm' }}").validate({
        submitHandler: function(form) {
            $("#{{ $submitButton ?? 'confirmBtn' }}").attr("disabled", true);
            $.ajax({
                url : confirmURL,
                type: "POST",
                data: $(form).serialize(),
                success: function(response) {
                    if(response.success){
                        $.ajaxAlert("top", "right", "success", "Success", "Saved!", "target");
                        $(form).trigger("reset");
                        $.updateTableFunction();
                        $("#{{ $confirmModalID ?? 'modalConfirm' }}").modal('hide');
                    } else if(response.errors){
                        if($.isArray(response.errors) == true)
                            $.each( response.errors, function( key, value ) {
                                $.ajaxAlert("top", "right", "danger", "Error", value, "target");
                            });
                        else
                            $.ajaxAlert("top", "right", "danger", "Error", response.errors, "target");
                    } else{
                        $.ajaxAlert("top", "right", "danger", "Error", "Underfined!", "target");
                    }
                    $("#{{ $submitButton ?? 'confirmBtn' }}").attr("disabled", false);
                },
                error: function(response) {
                    if(response.responseJSON.errors != null){
                        $.each( response.responseJSON.errors, function( key, value ) {
                            $.ajaxAlert("top", "right", "danger", response.responseJSON.message, value, "target");
                        });
                    } else{
                        $.ajaxAlert("top", "right", "danger", "Error", response.responseJSON.message, "target");
                    }
                    $("#{{ $submitButton ?? 'confirmBtn' }}").attr("disabled", false);
                }
            });
        },
        rules: {
            {{ $formRules ?? '' }}
        },
        messages: {
            {{ $formRulesMsg ?? '' }}
        },
    });

</script>
