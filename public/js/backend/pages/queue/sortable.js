var updateElem = null;

const sortableOptions = (type) => {
    return {
        filter: '.filtered', // 'filtered' class is not draggable
        group: 'shared',
        animation: 150,
        ghostClass: 'blue-background-class',
        store: {
            // get: function (sortable) {
            //     var order = localStorage.getItem('sortable-waiting');
            //     return order ? order.split(',') : [];
            // },
            set: function (sortable) {
                var order = sortable.toArray();
                localStorage.setItem(`sortable-${type}`, order.join(','));
                updateSorting()
                // console.log(localStorage.getItem('sortable-waiting'))
            }
        },
        // Element dragging ended
        onEnd: function (/**Event*/evt) {
            setUpdateElem(evt)
            // console.log(elemClosestKey, evt.oldIndex, evt.newIndex, evt.pullMode)
        }
    }
};

const setUpdateElem = (evt) => {
    updateElem = evt.item
}

const setUpdateForm = () => {
    const formData = new FormData();
    let nearbyQueueId = getNearbyQueueId();
    formData.append('status', getQueueType());
    formData.append('lower_queue_id', nearbyQueueId.lower ?? '');
    formData.append('higher_queue_id', nearbyQueueId.higher ?? '');
    return formData;
}

const updateSorting = async () => {
    let currentId = updateElem.getAttribute('data-id');
    let result = await $(this).sendRequest({
        url: `/admin/queue/update-sorting/${currentId}`,
        data: setUpdateForm(updateElem),
        alertSuccess: false,
    });
    console.log(result)
}

const getQueueType = () => {
    let elemClosestId = updateElem.closest("ul").id;
    return elemClosestId.slice(elemClosestId.lastIndexOf('-') + 1)
}

const getNearbyQueueId = () => {
    let sortingBox = localStorage.getItem(`sortable-${getQueueType(updateElem)}`).split(',')
    let currentId = updateElem.getAttribute('data-id');
    let currentIndex = sortingBox.indexOf(currentId);

    return {
        higher: sortingBox[currentIndex-1],
        lower: sortingBox[currentIndex+1]
    }
}
