$('#queueListing-waiting').initialiseSortable({
    filter: '.filtered', // 'filtered' class is not draggable
    group: 'shared',
    animation: 150,
    ghostClass: 'blue-background-class',
    store: {
        get: function (sortable) {
            var order = localStorage.getItem('sortable-waiting');
            return order ? order.split(',') : [];
        },
        set: function (sortable) {
            var order = sortable.toArray();
            localStorage.setItem('sortable-waiting', order.join(','));
            console.log(localStorage.getItem('sortable-waiting'))
        }
    },
    // Element dragging ended
    onEnd: function (/**Event*/evt) {
        var itemEl = evt.item;  // dragged HTMLElement
        var elemClosestId = itemEl.closest("ul").id;
        var elemClosestKey = elemClosestId.slice(elemClosestId.lastIndexOf('-') + 1)
        console.log(elemClosestKey, evt.oldIndex, evt.newIndex, evt.pullMode)
    },
})

$('#items2').initialiseSortable({
    filter: '.filtered', // 'filtered' class is not draggable
    group: 'shared',
    animation: 150,
    ghostClass: 'blue-background-class',
    store: {
        get: function (sortable) {
            var order = localStorage.getItem('sortable-holding');
            return order ? order.split(',') : [];
        },
        set: function (sortable) {
            var order = sortable.toArray();
            localStorage.setItem('sortable-holding', order.join(','));
            console.log(localStorage.getItem('sortable-holding'))
        }
    }
})
