<x-admin.component.modal
    :title="'Order details'"
    :navs="['details', 'items', 'rating']"
    :submit="route('merchant.order.update', $data->id)"
>

    @slot('rating')
        <div class="row">
            <x-admin.form.select
                :data="$data"
                :name="'rating'"
                :col="'md-12'"
                :options="[1,2,3,4,5]"
            />
        </div>
        <x-admin.form.textarea
            :data="$data"
            :name="'comment'"
            :required="false"
        />
    @endslot

    @slot('items')
        <x-user.pages.order.items
            :data="$data->orderItems"
        />
    @endslot

    @slot('details')

        <x-user.pages.order.form.address
            :data="$data->address"
        />

        <x-admin.form.textarea
            :data="$model??[]"
            :name="'additional_instructions'"
            :required="false"
        />

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :name="'status'"
                :col="'md-12'"
                :options="\App\Models\Order::getStatusLists()"
            />
        </div>
    @endslot

</x-admin.component.modal>
