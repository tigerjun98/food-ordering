<div class="modal fade bd-example-modal" id="modalDelete" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title ?? 'Confirmation' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Are your sure!</h4>
                <p>
                    {{ $description ?? 'Click confirm to continue!' }}
                </p>

                <form class="tooltip-right-top" id="formDelete" novalidate>
                    <input name="_method" type="hidden" value="DELETE">
                    @csrf
                    <input type="hidden" name="id" id="deleteID">
                    {{ $confirmForm ?? '' }}
                    <hr>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="deleteBtn" class="btn btn-outline-danger">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteID(id){
        $('#deleteID').val(id);
    }

    $(document).ready(function(){
        $("#formDelete").validate({
            submitHandler: function(form) {
                $("#deleteBtn").attr("disabled", true);
                $.ajax({
                    url: form.id.value,
                    type: "POST",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $.ajaxAlert("top", "right", "success", "Success", "Saved!", "target");
                            $("#modalDelete").modal("hide");
                            $.updateTableFunction();

                        } else if(response.errors){
                            $.each( response.errors, function( key, value ) {
                                $.ajaxAlert("top", "right", "danger", "Error", value, "target");
                            });
                        } else{
                            $.ajaxAlert("top", "right", "danger", "Error", "Underfined!", "target");
                        }
                        $("#deleteBtn").attr("disabled", false);
                    },
                    error: function(response) {
                        $.ajaxAlert("top", "right", "danger", "Error", "Try again later!", "target");
                        $("#modalDelete").modal("hide");
                        $("#deleteBtn").attr("disabled", false);
                    }
                });
            },
        });
    });
</script>
