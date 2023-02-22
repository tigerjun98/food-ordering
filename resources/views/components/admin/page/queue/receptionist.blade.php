
<div class="row">
    <div class="col-md-{{ !is_array($queues) ? 12 : 6 }}">
        <h2 class="mb-3">{{ trans('common.waiting_list') }}</h2>
        <ul id="queueListing-waiting" class="pl-0 sortable-listing">
            <x-admin.page.queue.listing
                :queues="$queues['waiting'] ?? $queues"
            />
        </ul>
    </div>

    @if(is_array($queues))
        <div class="col-md-6">
            <h2 class="mb-3">{{ trans('common.pending_list') }}</h2>
            <ul id="queueListing-pending" class="pl-0 sortable-listing">
                <x-admin.page.queue.listing
                    :queues="$queues['pending']"
                />
            </ul>
        </div>
    @endif


</div>
