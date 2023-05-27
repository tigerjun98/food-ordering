<?php $navs = isset($model) && $model->status == \App\Entity\Enums\StatusEnum::COMPLETED ? ['rating'] : ['details', 'items']?>
<x-admin.component.modal
    :title="'Checkout'"
    :navs="$navs"
    :submit="isset($isUpdate) ? route('order.update', $id) : route('order.store')"
>

    @slot('rating')
        <input type="hidden" name="id" value="{{ $id }}" />
        <input type="hidden" name="user_id" value="{{ auth()->id() }}" />

        @if(isset($model) && $model->status == \App\Entity\Enums\StatusEnum::COMPLETED)
            <div class="row">
                <x-admin.form.select
                    :data="$model??[]"
                    :name="'rating'"
                    :col="'md-12'"
                    :options="[0,1,2,3,4,5]"
                />
            </div>
            <x-admin.form.textarea
                :data="$model??[]"
                :name="'comment'"
                :required="false"
            />
        @else
            <x-admin.component.status-bar
                :type="'info'"
                :message="'You can rate your order once the order is completed'"
            />
        @endif
    @endslot

    @slot('items')
        <x-user.pages.order.items
            :data="$items"
        />
    @endslot

    @slot('details')

        <input type="hidden" name="id" value="{{ $id }}" />
        <input type="hidden" name="user_id" value="{{ auth()->id() }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'contact'"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-4'"
                :name="'address_1'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-4'"
                :name="'address_2'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-4'"
                :name="'address_3'"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-4'"
                :name="'postal_code'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-4'"
                :name="'city'"
            />
            <x-admin.form.select
                :data="$data"
                :col="'md-4'"
                :name="'state'"
                :options="\App\Models\Address::getStateLists()"
            />
        </div>

        <x-admin.form.textarea
            :data="$model??[]"
            :name="'additional_instructions'"
            :required="false"
        />
    @endslot

</x-admin.component.modal>
