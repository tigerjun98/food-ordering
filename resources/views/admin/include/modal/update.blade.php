<div class="pr-0 modal fade bd-example-modal-lg" id="publicModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="refreshModal"></div>
    </div>
</div>

<div class="pr-0 modal fade bd-example-modal-lg" id="publicSecondModal" role="dialog" aria-hidden="true">
    <div class="secBackDrop"></div>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="refreshSecondModal"></div>
    </div>
</div>

<script>
    async function refreshModal(url, type){
        try {
            let data = await $("#publicModal").sendRequest({
                url,
                method: "GET",
            });

            if(type == 'second'){
                $("#refreshSecondModal").hide().html(data.html).fadeIn();
                $("#publicSecondModal").modal('show');
                $('.hide-secondModal').addClass('ds');

            } else{
                $("#refreshModal").hide().html(data.html).fadeIn();
                $('#publicModal').modal('show');
                $('.hide-secondModal').removeClass('ds');
            }
        } catch(err) {
            console.log(err, 'admin.include.modal');
        }
    }

    // when close second modal
    $('#publicSecondModal').on('hidden.bs.modal', function () {
        if($('#publicModal').hasClass('show')){
            $('#app-container').addClass('modal-open');
        }
    })
</script>

<style>
    .secBackDrop{
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #00000094;
    }
</style>
