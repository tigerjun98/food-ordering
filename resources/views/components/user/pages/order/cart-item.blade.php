<div class="mb-3 border-bottom pb-3">
    <div class="d-flex flex-row mb-3">
        <a class="d-block position-relative" href="#">
            <img src="{{ $data->menuItem->attachments[0]->url ?? null }}" alt="Marble Cake" class="list-thumbnail border-0">
        </a>
        <div class="pl-3 pt-3 pr-2 pb-2">
            <a href="#">
                <p class="list-item-heading mb-2">{{ $data->menuItem->name_en }}</p>
                <div class="pr-4 d-none d-sm-block">
                    <p class="text-muted mb-1 text-small">
                        {{ $data->menuItem->category?->name_en }}
                    </p>
                </div>
                <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                    RM {{ $data->price }}
                </div>
            </a>
        </div>
    </div>

    <div class="position-relative overflow-hidden">
        <button
            onclick="updateOrderItem({{ $data->menu_item_id }}, 'delete')"
            type="button"
                class="float-left btn btn-outline-danger">
            <i class="simple-icon-trash"></i>
        </button>
        <div class="float-right btn-group" role="group" aria-label="Button group with nested dropdown">
            <button
                onclick="updateOrderItem({{ $data->menu_item_id }}, 'reduce')"
                type="button"
                class="btn btn-outline-secondary">-
            </button>
            <button type="button" class="btn btn-outline-secondary">{{ $data->quantity }}</button>
            <button
                onclick="updateOrderItem({{ $data->menu_item_id }})"
                type="button" class="btn btn-secondary">+</button>
        </div>
    </div>

</div>
