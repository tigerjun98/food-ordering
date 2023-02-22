import {split} from "lodash";

const sortableOptions = {
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
            localStorage.setItem('sortable-waiting', order.join(','));
            updateSorting()
            console.log('123', localStorage.getItem('sortable-waiting'))
        }
    },
    // Element dragging ended
    onEnd: function (/**Event*/evt) {
        setUpdateElem(evt)
        // console.log(elemClosestKey, evt.oldIndex, evt.newIndex, evt.pullMode)
    },
};

$('#queueListing-waiting').initialiseSortable(sortableOptions)
$('#queueListing-pending').initialiseSortable(sortableOptions)
$('#queueListing-waiting').initialiseScrollbar()
$('#queueListing-pending').initialiseScrollbar()

const getQueueType = () => {
    var elemClosestId = updateElem.closest("ul").id;
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

var updateElem = null;

const setUpdateElem = (evt) => {
    updateElem = evt.item
}

const setUpdateForm = () => {
    const formData = new FormData();
    let nearbyQueueId = getNearbyQueueId();
    formData.append('lowerQueueId', nearbyQueueId.lower);
    formData.append('higherQueueId', nearbyQueueId.higher);
    return formData;
}
const updateSorting = async () => {
    let currentId = updateElem.getAttribute('data-id');
    let result = await $(this).sendRequest({
        url: `/admin/queue/edit/${currentId}`,
        data: setUpdateForm(updateElem),
    });
    console.log(result)
}
