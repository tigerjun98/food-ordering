<x-admin.component.modal
    :title="'Category details'"
    :navs="['details']"
    :submit="route('admin.category.store')"
>

    @slot('details')

        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-12'"
                :name="'name_en'"
            />
        </div>
    @endslot

</x-admin.component.modal>
