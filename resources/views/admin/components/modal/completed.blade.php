<div class="modal fade bd-example-modal" id="modalCompleted" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title ?? 'Confirmation' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>  {{ $header ?? 'Are you sure!' }}</h4>
                <p>
                    {{ $description ?? 'Click confirm to continue!' }}
                </p>

                <form class="tooltip-right-top" id="formCompleted" novalidate>
                    <input name="_method" type="hidden" value="PUT">
                    @csrf
                    <input type="hidden" name="id" id="completedID">
                    {{ $confirmForm ?? '' }}
                    <hr>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="completedBtn" class="btn btn-outline-primary">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function completedID(id){
        $('#modalCompleted').modal('show');
        $('#completedID').val(id);
    }

    $(document).ready(function(){
        $("#formCompleted").validate({
            submitHandler: function(form) {
                $("#completedBtn").attr("disabled", true);
                $.ajax({
                    url: form.id.value,
                    type: "POST",
                    data: $(form).serialize(),
                    success: function(response) {
                        if(response.success){
                            $.ajaxAlert("top", "right", "success", "Success", "Saved!", "target");
                            $("#modalCompleted").modal("hide");
                            $.updateTableFunction();

                        } else{
                            showSuccessAlert(response);
                        }
                        $("#completedBtn").attr("disabled", false);
                    },
                    error: function(response) {
                        showErrorAlert(response);
                        $("#modalCompleted").modal("hide");
                        $("#completedBtn").attr("disabled", false);
                    }
                });
            },
        });
    });
</script>
