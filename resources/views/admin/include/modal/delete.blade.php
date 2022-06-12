<div class="modal fade" id="deleteAlertModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content cc">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('common.confirm_delete') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('common.confirm_delete_desc') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ __('common.cancel') }}</button>
                <button type="button" class="btn btn-danger" onclick="confirmDelete()" id="confirmDeleteButton">{{ __('common.confirm') }}</button>
            </div>
        </div>
    </div>
</div>

<script>
    var deleteurl;
    function confirmModal(link){
        $("#deleteAlertModal").modal('show');
        deleteurl = link;
    }

    async function confirmDelete(){

        try {
            let data = await $("#publicModal").sendRequest({
                url: deleteurl,
                method: "DELETE",
            });

            $("#deleteAlertModal").modal('hide');
            $.updateTableFunction();

        } catch(err) {
            console.log(err, 'admin.include.modal');
        }
    }
</script>
<style>
    .modal .modal-header {
        /*display: flex;*/
    }
</style>
