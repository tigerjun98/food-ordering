@extends('admin.layout')

@section('content')
    <div id="main_row" class="row app-row">
        <div class="col-12">
             <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Queue management</h1>
                <div class="top-right-button-container">

                    <x-admin.component.button
                        :redirect="url()->previous()"
                        :class="'btn-outline-primary btn-lg top-right-button'"
                        :icon="'iconsminds-left-1'"
                        :text="trans('button.back')"
                    />
                    @if(auth()->user()->hasPermissionTo( 'queue.create' ))
                        <x-admin.component.button
                            :onclick="'$(this).openModal({url: `'.route('admin.queue.create').'`})'"
                            :class="'btn-primary btn-lg top-right-button'"
                            :text="trans('button.create')"
                        />
                    @endif
                </div>
            </div>

            <ul class="nav nav-tabs separator-tabs ml-0 mb-3">
                <?php $permissions = [] ?>
                @foreach(\App\Models\Queue::getRoleList() as $key => $type)
                    <?php $permissions[] = 'queue.'.$key ?>
                    @if(auth()->user()->hasPermissionTo( 'queue.'.$key ) )
                        <li class="nav-item">
                            <a class="nav-link role-link {{ $roleId == $key ? 'active' : '' }}"
                               id="tab-{{$key}}"
                               href="javascript:setQueueRoleValue({{$key}})"
                            >
                                {{ $type }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

            @if( !auth()->user()->hasAnyPermission($permissions ) )
                <x-admin.component.status-bar :type="'danger'" :message="'Permission denied!'"/>
            @endif

            <div class="" id="queueListingWrapper"></div>
        </div>
    </div>

    <x-admin.layout.search-menu
        :filter="\App\Models\Queue::SimpleFilter()"
    >
        @slot('extraFilter')
            <input type="hidden" name="role" id="setRoleVal" value="{{ $roleId }}">
            <div class="mt-2">
                <x-admin.form.select
                    :name="'doctor_id'"
                    :ajax="route('admin.get-doctor-opt')"
                    :required="false"
{{--                    :onchange="'refreshDataTable()'"--}}
                ></x-admin.form.select>
            </div>
        @endslot
    </x-admin.layout.search-menu>

    @include('admin.queue.js.script')
@stop
