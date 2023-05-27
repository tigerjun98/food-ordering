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
