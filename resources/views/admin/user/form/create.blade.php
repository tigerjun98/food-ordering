<x-admin.component.modal
    :title="'Patients details'"
    :nav="['details', 'emergency']"
    :submit="route('admin.user.store')"
>
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
{{--            <x-admin.form.select--}}
{{--                :col="'md-6'"--}}
{{--                :name="'emergency_contact_relationship'"--}}
{{--            />--}}
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
                    :name="'state'"
                    :options="\App\Models\User::getStatesList()"
                />
            </div>
    @endslot

    @slot('footer')
        <x-admin.component.button
            :class="'btn-primary'"
            :lang="'submit'"
        />
    @endslot
</x-admin.component.modal>
