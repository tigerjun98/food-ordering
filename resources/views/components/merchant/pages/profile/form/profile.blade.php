<x-admin.page.profiles.forms.index
    :route="route('merchant.profile.store-category')"
    :title="'Profile details'"
    :desc="'Last edited '.dateFormat($data->updated_at, 'r')"
>
    @slot('body')
        <input type="hidden" name="id" value="{{auth()->id()}}"/>
        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-12'"
                :name="'name'"
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

        <x-admin.form.dropzone
            :id="$data->id"
            :submitUrl="route('attachment.store')"
            :deleteUrl="route('attachment.destroy', ':id')"
            :sendingData="[
                'ref_model' => \App\Models\Merchant::class,
                'path'      => 'merchant'
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
</x-admin.page.profiles.forms.index>
