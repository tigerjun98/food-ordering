const viewMedicine = async (consultationId) => {
    $(this).openModal({
        header: 'Medicine details',
        url: `/admin/consultation/show/${consultationId}?tabs=medicine,details,patient`
    });
}

const servePatient = async (queueId) => {
    // let url = '{{ route('admin.queue.serve', ':id') }}'.replace(':id', queueId)
    let url = `/admin/queue/serve/${queueId}`
    let res = await $(this).sendRequest({ url });
    let target = $(`#queueBox-${queueId}`)
    target.hide('slow', function(){ target.remove(); });

    if( !! document.getElementById('statusBar-301')){
        $('#statusBar-301').empty()
    }

}

const consultedPatient = async (queueId) => {
    // let url = '{{ route('admin.queue.serve', ':id') }}'.replace(':id', queueId)
    let url = `/admin/queue/consulted/${queueId}`
    let res = await $(this).sendRequest({ url });
    let target = $(`#queueBox-${queueId}`)
    target.hide('slow', function(){ target.remove(); });
}

const deleteQueue = async (queueId) => {
    let url = `/admin/queue/destroy/${queueId}`
    $(this).openModal({ url, size: 'md' });
}

function refreshDataTable() {
    let roleId = $('#setRoleVal').val()
    let filterForm = $('#js-datatable-filter-form').serialize()
    window.history.replaceState({ id: "100" }, "Filter", `/admin/queue/show/${roleId}?${filterForm}`);
    $('#queueListingWrapper').setHtml({
        url: `/admin/queue/show/${roleId}?${filterForm}`
    })
}






