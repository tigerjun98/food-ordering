<div class="row">
    @foreach($queues as $key => $queue)
        <div class="col-md-{{ count($queues) == 1 ? 12 : 6 }}">
        <h2 class="mb-3">{{ \App\Models\Queue::getStatusList()[$key] }}</h2>
            <ul id="queueListing-{{ $key }}" class="pl-0 sortable-listing">
                <x-admin.page.queue.listing
                    :queues="$queues[$key]"
                />
            </ul>
        </div>
        <script type="module">
            $('#queueListing-{{ $key }}').initialiseSortable(sortableOptions('{{ $key }}'))
            {{--$('#queueListing-{{ $key }}').initialiseScrollbar()--}}
        </script>
    @endforeach
</div>


