@foreach($queues as $data)
    <li class="mb-2 queue-list" data-id="{{ $data->id }}" id="queueBox-{{ $data->id }}">
        <x-admin.component.card.queue :queue="$data" />
    </li>
@endforeach
