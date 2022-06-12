{{--welcome modal--}}
<div class="modal fade bd-example-modal-lg" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body" id="modal-body"></div>
        </div>
    </div>
</div>
<style>
    #welcomeModal .modal-content {
        background: none;
        max-height: initial;
    }
    #welcomeModal .modal-body {
        background-size: contain !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background: url('{{asset("storage/settings/".\App\Models\Setting::getValue('popup'))}}');

    }
</style>

<script>
    @if(\App\Models\Setting::getValue('popup'))
        $(document).ready(function () {
            if(!sessionStorage.getItem('firstVisit')) {
                setTimeout(function() {
                    $('#welcomeModal').modal('show');
                }, 1000);
            }    // show modal if it first time
            $('.close')[0].click(function() {
                sessionStorage.setItem('firstVisit',true); // used to store the state across refreshes.
            });
        });
    @endif

</script>
