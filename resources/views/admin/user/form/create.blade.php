<x-admin.component.modal
    :title="'Patients details'"
    :nav="['details', 'address', 'emergency']"
    :submit="route('admin.user.store')"
>
    @slot('address')
        <x-admin.form.textarea
            :data="$data"
            :name="'address'"
            :required="false"
        />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'postcode'"
                :required="false"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'area'"
                :required="false"
            />
        </div>

        <div class="row">
            <x-admin.form.select
                :data="$data"
                :col="'md-12'"
                :name="'state'"
                :options="\App\Models\User::getStatesList()"
            />
        </div>
    @endslot

    @slot('emergency')
        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'emergency_contact_name'"
                :required="false"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :type="'phone'"
                :name="'emergency_contact_no'"
                :required="false"
            />
        </div>
        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'emergency_contact_relationship'"
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
                    :col="'md-6'"
                    :name="'nric'"
                    :label="trans('label.nric_or_passport')"
                />
                <x-admin.form.text
                    :data="$data"
                    :type="'phone'"
                    :col="'md-6'"
                    :name="'phone'"
                />
            </div>

            <div class="row">
                <x-admin.form.text
                    :data="$data"
                    :type="'date'"
                    :col="'md-6'"
                    :name="'dob'"
                    :required="false"
                />
                <x-admin.form.text
                    :data="$data"
                    :col="'md-6'"
                    :name="'email'"
                    :required="false"
                />
            </div>

            <div class="row">
                <x-admin.form.text
                    :data="$data"
                    :col="'md-6'"
                    :name="'occupation'"
                    :required="false"
                />
                <x-admin.form.select
                    :data="$data"
                    :col="'md-6'"
                    :name="'gender'"
                    :options="\App\Entity\Enums\GenderEnum::getListing()"
                />
            </div>

            <div class="row">
                <x-admin.form.select-nationality
                    :data="$data"
                    :col="'md-12'"
                    :name="'nationality'"
                />
            </div>

            <x-admin.form.textarea
                :data="$data"
                :name="'remark_allergic'"
                :rows="4"
                :required="false"
            />

    @endslot
</x-admin.component.modal>
