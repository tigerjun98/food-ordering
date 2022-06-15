{{--universal modal--}}
<div class="modal fade popup" id="publicModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40" id="modal-body">
{{--                <h2 class="text-center">Your Bidding--}}
{{--                    Successfuly Added</h2>--}}
{{--                <p class="text-center">your bid <span class="price color-popup">(2.39ETH) </span> has been listing--}}
{{--                    to our database</p>--}}
{{--                <a href="#" class="btn btn-primary"> Watch the listings</a>--}}
            </div>
        </div>
    </div>
</div>

{{--confirm modal--}}
<div class="modal fade popup" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40" id="modal-body">
                <h2 id="confirm-title">{{ __('messages.confirm_alert') }}</h2>
                <p id="confirm-desc">{{ __('messages.confirm_alert_desc') }}</p>
{{--                <a href="#" class="btn btn-primary"> Watch the listings</a>--}}
            </div>
            <div class="modal-footer" id="modal-footer">
                <button class="light" data-bs-dismiss="modal" aria-label="Close">{{ __('common.cancel') }}</button>
                <button onclick="confirmAction()">{{ __('common.confirm') }}</button>
            </div>
        </div>
    </div>
</div>

<style>
    #confirmModal.modal.show .modal-dialog {
        height: 350px;
        max-width: 500px;
        width: 90vw;
        max-height: fit-content;
    }
    #confirmModal h2{
        border: 1px solid #ededed;
        border-width: 0 0 1px 0;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    #confirmModal .modal-dialog .modal-content .modal-body{
        height: fit-content;
        min-height: 200px;
    }
    #confirmModal .modal-footer{
        display: flex;
    }
    #confirmModal .modal-footer button.light{
        background-color: transparent;
        color: #262626;
        border: 1px solid #262626;
        width: 110px;
        margin-right: 10px;
    }
    #confirmModal .modal-footer button{
        width: 150px;
        display: block;
        text-align: center;
        line-height: 20px;
        padding: 20px 20px 21px;
        background-color: #262626;
        color: #fff;
        text-transform: capitalize;
        font-size: 14px;
        border: none;
    }
</style>
<script>
    async function refreshModal(url, type){
        try {
            let response = await $("#publicModal").sendRequest({
                url,
                method: 'GET',
            });
            console.log(response.html);

            $('#modal-body').hide().html(response.html).fadeIn();
            $('#publicModal').modal('show');
        } catch(err) {
            console.log(err, 'user.include.layouts.cart');
        }
    }

    var confirmUrl;
    async function confirmAction(){
        try {
            let response = await $('#confirmModal').sendRequest({
                url: confirmUrl,
                loading: {show: false},
                data: null
            });

        } catch(err) {

        }
    }

    function confirmModal(url, title=null){
        confirmUrl = url;
        $('#confirmModal').modal('show');
        if(title){
            $('#confirm-title').text(settings.data.title);
        }

    }
</script>
<style>
    .modal.show .modal-dialog{
        max-height: 85vw;
        max-width: 93%;
    }
    .modal-dialog .modal-content .modal-body {
        padding: 2rem 2.1rem;
        overflow-y: auto;
        max-height: fit-content;
        height: 550px;
    }
</style>
