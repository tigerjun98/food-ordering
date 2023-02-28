const servePatient = async (queueId) => {
    // let url = '{{ route('admin.queue.serve', ':id') }}'.replace(':id', queueId)
    let url = `/admin/queue/serve/${queueId}`
    let res = await $(this).sendRequest({ url });
    let target = $(`#queueBox-${queueId}`)
    target.hide('slow', function(){ target.remove(); });
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
    let filterForm = $('#js-datatable-filter-form').serialize()
    window.history.replaceState({ id: "100" }, "Filter", "?"+filterForm);
    $('#queueListingWrapper').setHtml({
        url: `/admin/queue/listing?${filterForm}`
    })
}

const setQueueRoleValue = (typeId) => {
    $('#setMultiroleVal').val(typeId).trigger('change')
    refreshDataTable();
}
