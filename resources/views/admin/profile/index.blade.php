@extends('admin.layout')

@section('content')
    <div id="main_row" class="row">
        <x-admin.component.card.profile
            :title="'Profile Managements'"
            :nav="['details', 'security']"
            :submit="route('admin.profile.store')"
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
                    <x-admin.form.select
                        :data="$data"
                        :col="'md-6'"
                        :name="'group_id'"
                        :required="false"
                        :options="\App\Models\Group::where('type', \App\Models\Group::ADMIN)->active()->pluck('name_en','id')"
                    />
                </div>

                <div class="row">
                    <x-admin.form.select
                        :data="$data"
                        :col="'md-12'"
                        :name="'status'"
                        :options="\App\Entity\Enums\StatusEnum::getListing()"
                        :required="false"
                    />
                </div>
            @endslot

            @slot('security')
                <div class="row">
                    <x-admin.form.text
                        :col="'md-6'"
                        :type="'password'"
                        :name="'password'"
                        :required="false"
                    />
                    <x-admin.form.text
                        :col="'md-6'"
                        :type="'password'"
                        :name="'password_confirmation'"
                        :required="false"
                    />
                </div>
            @endslot
        </x-admin.component.card.profile>
    </div>
@endsection
