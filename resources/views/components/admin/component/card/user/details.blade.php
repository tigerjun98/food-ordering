<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :name="'full_name'"
            :value="$data->full_name"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$data"
            :name="'contact'"
        />
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12">
        <x-admin.layout.info
            :data="$data"
            :name="'email'"
        />
    </div>
</div>
