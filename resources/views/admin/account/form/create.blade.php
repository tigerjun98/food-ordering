<x-admin.component.modal
    :title="'Admin details'"
    :nav="['details', 'roles', 'security']"
    :submit="route('admin.account.store')"
>
    @slot('roles')
        <div class="row">
            <x-admin.form.select
                :multiple="'multiple'"
                :col="'md-12'"
                :name="'roles[]'"
                :id="'rolesIds'"
                :options="\Spatie\Permission\Models\Role::all()->pluck('name','id')"
                :required="false"
            >
                @slot('js')
                    $('#rolesIds').val([{{ implode(',', $data->roles->pluck('id')->toArray()) }}]).trigger('change')
                @endslot
            </x-admin.form.select>
        </div>
    @endslot

    @slot('security')
        <div class="row">
            <x-admin.form.text
                :col="'md-6'"
                :name="'password'"
                :required="false"
            />
            <x-admin.form.text
                :col="'md-6'"
                :name="'password_confirmation'"
                :required="false"
            />
        </div>
    @endslot

    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_cn'"
                :required="false"
            />
        </div>

            <div class="row">
                <x-admin.form.text
                    :data="$data"
                    :type="'phone'"
                    :col="'md-6'"
                    :name="'phone'"
                />
                <x-admin.form.text
                    :data="$data"
                    :col="'md-6'"
                    :name="'email'"
                />
            </div>

            <div class="row">
                <x-admin.form.select
                    :data="$data"
                    :col="'md-6'"
                    :name="'gender'"
                    :options="\App\Entity\Enums\GenderEnum::getListing()"
                />
            </div>

    @endslot
</x-admin.component.modal>
