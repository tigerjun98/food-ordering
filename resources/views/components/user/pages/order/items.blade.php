@foreach($data as $item)
    <div class="mb-3 border-bottom pb-3">
        <div class="d-flex flex-row mb-3">
            <a class="d-block position-relative" href="#">
                <img src="{{ $item->menuItem->attachments[0]->url ?? null }}" alt="Marble Cake" class="list-thumbnail border-0">
            </a>
            <div class="pl-3 pt-3 pr-2 pb-2">
                <a href="#">
                    <p class="list-item-heading mb-2">{{ $item->menuItem->name_en }}</p>
                    <div class="pr-4 d-none d-sm-block">
                        <p class="text-muted mb-1 text-small">
                            {{ $item->menuItem->category?->name_en }}
                        </p>
                    </div>
                    <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                        {{ $item->quantity }} qty x RM {{ $item->price }}
                    </div>
                </a>
            </div>
        </div>
    </div>
@endforeach
