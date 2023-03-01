@foreach($queues as $data)
    <x-admin.component.card.queue :queue="$data" />
@endforeach
