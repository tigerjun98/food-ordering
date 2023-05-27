@extends('admin.layout')

@section('content')
    <div class="col-12">
        <x-admin.layout.pages.index
            :navs="['details', 'security']"
            :title="'Profile management'"
        >
            @slot('details')
                <div class="card">
                    <div class="card-body">
                        <x-admin.page.profiles.forms.details :data="$data"/>
                    </div>
                </div>
            @endslot

            @slot('security')
                <div class="card">
                    <div class="card-body">
                        <x-admin.page.profiles.forms.security :data="$data"/>
                    </div>
                </div>
            @endslot
        </x-admin.layout.pages.index>
    </div>
@endsection
