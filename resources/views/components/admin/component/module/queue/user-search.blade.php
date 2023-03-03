<label class="form-group has-float-label tooltip-center-bottom mb-3">
    <div class="input-group typeahead-container">
        <input type="text" class="form-control"
               name="query" id="queryNric"
               placeholder="Start typing something to search..."
               autocomplete="off">
        <div class="input-group-append">
            <button type="button" onclick="searchPatient()" class="btn btn-primary default">
                <i class="simple-icon-magnifier"></i>
            </button>
        </div>
    </div>
    <small>Eg. xxxxxxxxxxxx (No dash *-* required)</small>
    <span>{{ trans('label.nric_or_passport') }}</span>
</label>

<script type="text/javascript">

    function openQueueModal(res){
        let url = '{{ route('admin.queue.create', 'user_id=:userId') }}'.replace( ':userId', res.data.id )
        $(this).openModal({ url })
    }

    function createNewPatient(){
        let url = '{{ route('admin.user.create', 'jsAction=:script&nric=:nric') }}'.replace( 'amp;', '' )
        url = url.replace( ':nric', $('#queryNric').val() );
        url = url.replace( ':script', 'openQueueModal(res)' );
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
                url: '{{route('admin.user.search-patient', 'nric=:nric')}}'.replace(':nric', $('#queryNric').val()),
            })
            if(res.status === 200){
                handlePatientExists(res.data)
            }
        } catch (e) {
            if(e.status === 502){
                handleNewPatient()
            }
        }

    }
</script>

