<x-admin.component.modal
    :title="'Patients details'"
    :nav="['details', 'address', 'emergency']"
    :submit="route('admin.user.store')"
>

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
            @if(request()->nric)
                <input type="hidden" name="nric" value="{{ request()->nric }}">
            @endif

            <x-admin.form.text
                :value="$data ? $data->nric : (request()->nric ?? null)"
                :col="'md-6'"
                :name="'nric'"
                :disabled="request()->nric ?? false"
                :label="trans('label.nric_or_passport')"
            />
            <x-admin.form.text
                :data="$data"
                :type="'phone'"
                :col="'md-6'"
                :name="'phone'"
                :required="false"
            />
        </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :type="'date'"
                :col="'md-6'"
                :name="'dob'"
                :required="false"
                :jsOptions="'startView: 2,'"
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
                :col="'md-6'"
                :name="'nationality'"
            />
            <x-admin.form.select
                :data="$data"
                :col="'md-6'"
                :name="'group_id'"
                :options="\App\Models\Group::where('type', \App\Models\Group::USER)->Active()->pluck('name_en','id')"
            />
        </div>

        <x-admin.form.textarea
            :data="$data"
            :name="'remark_allergic'"
            :rows="4"
            :required="false"
        />

    @endslot

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
                :required="false"
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

    {{-- Temporary fixed alert popup between two modal is opening; Just hide it 1st --}}
    @if(request()->nric)
        @slot('formOption')
            alertSuccess: false,
        @endslot
    @endif


    @slot('script')
        {{ request()->jsAction ?? '' }}
    @endslot

</x-admin.component.modal>
