<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">

    <div class="card">
        <div class="position-relative">
            <a href="Pages.Product.Detail.html">
                <img class="card-img-top"
                     src="{{ $data->attachments[0]->url ?? null }}"
                     alt="Card image cap"></a>
            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">
                {{ $data->category?->name_en }}
            </span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <a href="Pages.Product.Detail.html">
                        <p class="list-item-heading mb-2 pt-1">
                            {{ $data->name }}</p>
                    </a>
                    <footer class="d-flex">
                        <div class="float-left w-50 mt-1">
{{--                            RM {{ $data->price }}--}}
                        </div>
                        <x-admin.component.button
                            :text="'view'"
                            :class="'float-right btn-outline-primary btn-xs'"
                            :redirect="route('merchant.show', $data->id)"
                        />
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
