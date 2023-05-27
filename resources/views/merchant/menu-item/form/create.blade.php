<x-admin.component.modal
    :title="'Menu item details'"
    :navs="['details', 'attachment']"
    :submit="route('merchant.menu-item.store')"
>

    @slot('attachment')
        <x-admin.form.dropzone
            :id="$data->id"
            :submitUrl="route('attachment.store')"
            :deleteUrl="route('attachment.destroy', ':id')"
            :sendingData="[
                'ref_model' => \App\Models\MenuItem::class,
                'path'      => 'menu-items'
            ]"
        >
            @if(isset($data->attachments))
                @slot('data')
                    @foreach($data->attachments as $key => $attachment)
                        <x-admin.form.dropzone-preview
                            :id="$data->id"
                            :refId="$attachment->id"
                            :src="$attachment->url"
                        />
                    @endforeach
                @endslot
            @endif
        </x-admin.form.dropzone>
    @endslot

    @slot('details')

        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="merchant_id" value="{{ auth()->id() }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
            />
            <x-admin.form.text
                :type="'number'"
                :data="$data"
                :col="'md-6'"
                :name="'price'"
            />
        </div>

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :col="'md-12'"
                :name="'category_id'"
                :options="$categories"
            />
        </div>

        <x-admin.form.textarea
            :data="$data"
            :name="'desc_en'"
            :required="false"
        />
    @endslot

</x-admin.component.modal>
