<label class="form-group has-float-label tooltip-center-bottom mb-3">
    <div class="input-group typeahead-container">
        <input type="text" class="form-control"
               name="query" id="queryNric"
               placeholder="Start typing NRIC to search..."
               autocomplete="off">
        <div class="input-group-append">
            <button type="button" onclick="searchPatient()" class="btn btn-primary default">
                <i class="simple-icon-magnifier"></i>
            </button>
        </div>
    </div>
    <span>{{ trans('label.nric_or_passport') }}</span>
</label>

<script type="text/javascript">

    var $form = $('#queryNric').closest('form');
    document.getElementById(`${$form.attr('id')}`).onkeypress = function(e) {
        var key = e.charCode || e.keyCode || 0;
        if (key === 13) {
            let input = !! document.getElementById("queryNric");
            if(input){
                searchPatient();
                e.preventDefault();
            }
        }
    }

    function openQueueModal(res){
        let url = '{{ route('admin.queue.create', 'user_id=:userId') }}'.replace( ':userId', res.data.id )
        $(this).openModal({ url })
    }

    function createNewPatient(){
        $(this).hideAlert()
        let url = '{{ route('admin.user.create', 'jsAction=:script&nric=:nric') }}'.replace( 'amp;', '' )
        url = url.replace( ':nric', $('#queryNric').val() );
        url = url.replace( ':script', 'openQueueModal(res);' );
        $(this).openModal({url, refresh: true})
    }

    function handleNewPatient() {
        $('.patient-not-exists').removeClass('hide')
    }

    function handlePatientExists(patient) {
        $('#user_id').val(patient.id)
        $('#nric').val(patient.nric)
        $('#full_name').val(patient.full_name)
        handleQueueInfo()
    }

    async function searchPatient(){

        try {
            let res = await $(this).sendRequest({
                method: 'GET',
                alert: false,
                url: '{{route('admin.user.search-patient', 'nric=:nric')}}'.replace(':nric', $('#queryNric').val()),
            })
            if(res.status === 200){
                handlePatientExists(res.data)
            }
        } catch (e) {
            if(e.status === 502){
                $('#app-alert').showAlert({
                    message: 'Patient not exists! Create to continue.', status: 'danger', delay: 1000
                });
                handleNewPatient()
            }
        }

    }
</script>

