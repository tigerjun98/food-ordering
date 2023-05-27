<li class="mb-2 queue-list" data-id="{{ $data->id }}" id="categoryBox-{{ $data->id }}">
    <div class="card">
        <div class="card-body">
            <div class="justify-content-between">
                <div class="">
                    <div>
                        <a href="#" class="font-weight-medium mb-2">
                            {{ $data->category->name_en }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

