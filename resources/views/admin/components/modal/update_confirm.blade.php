<div class="modal fade bd-example-modal" id="modalConfirm{{ $modalID ?? '' }}" role="dialog" aria-hidden="true">
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
                <form class="tooltip-right-top" id="formConfirm{{ $modalID ?? '' }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    {{ $confirmForm ?? '' }}
                    <hr>
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="buttonConfirm{{ $modalID ?? '' }}" class="btn btn-primary">Confirm</button>
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
    var confirmForm{{ $modalID ?? '' }} = $("#formConfirm{{ $modalID ?? '' }}");
    var confirmURL{{ $modalID ?? '' }} = '{{ $confirmFormURL ?? '' }}';
    function confirm{{ $modalID ?? '' }}(id){
        $('#{{ $modalID ?? "" }}ID').val(id);
        confirmURL{{ $modalID ?? '' }} = confirmURL{{ $modalID ?? '' }}.replace(':id', id);
        {{ $confirmFunction ?? "" }}
    }

    $("#formConfirm{{ $modalID ?? '' }}").validate({
        submitHandler: function(form) {
            $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", true);
            $.ajax({
                url : confirmURL{{ $modalID ?? '' }},
                type: "POST",
                data: $(form).serialize(),
                success: function(response) {
                    if(response.success){
                        $("#modalConfirm{{ $modalID ?? '' }}").modal('hide');
                        $.ajaxAlert("top", "right", "success", "Success", "Saved!");
                        $(form).trigger("reset");
                        $.updateTableFunction();
                    } else{
                        showSuccessAlert(response);
                    }
                    $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", false);
                },
                error: function(response) {
                    showErrorAlert(response);
                    $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", false);
                }
            });
        },
        {{ $formRules ?? '' }}

    });

</script>
