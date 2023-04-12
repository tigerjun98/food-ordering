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

    <x-admin.layout.search-menu-tab
        :enableTab="true"
        :navTab="['search', 'appointment']"
        :filter="App\Models\Queue::SimpleFilter()"
    >
        @slot('extraFilter')
            <input type="hidden" name="role" id="setRoleVal" value="{{ $roleId }}">
            <div class="mt-2">
                <x-admin.form.select
                    :name="'doctor_id'"
                    :required="false"
                    :onchange="'refreshDataTable()'"
                >
                    @slot('customOption')
                        @foreach($doctors as $doctor)
                            <option @if(request()->doctor_id) selected="selected" @endif value="{{ $doctor->id }}">{{ $doctor->full_name }}</option>
                        @endforeach
                    @endslot


                </x-admin.form.select>
            </div>
        @endslot
        @slot('tabContent')
            <div>
                <div class="" id="appointmentList" style="height: 74vh;padding-top:1.5em"></div>
                <div class="ajax-load text-center hide">
                    <div class="spinner"></div>
                    <br>Loading...
                </div>
                <div class="load-max text-center hide">
                    <p>No more data!</p>
                </div>
            </div>

            <script type="module">
                let page = 1;
                let loading = false;
                const ps = $('#appointmentList').initialiseScrollbar()

                const loadAppointmentList = async () => {

                    if(page == 'stop') return true;

                    $('.ajax-load').removeClass('hide')
                    let res = await $(this).sendRequest({
                        method: 'GET',
                        url: `{{ route('admin.get-appointments') }}?page=${page}`
                    });

                    if(res.html === ""){
                        page = 'stop'
                        $('.load-max').removeClass('hide')
                    } else{
                        page++
                    }

                    $("#appointmentList").append(res.html);
                    $('.ajax-load').addClass('hide')
                    ps.update();
                }

                document.querySelector('#appointmentList').addEventListener('ps-y-reach-end', () => {
                    loadAppointmentList()
                });

                loadAppointmentList()
            </script>

            <form id="js-datatable-filter-form" class="js-datatable-filter-form text-capitalize">
                <div style="position:fixed; bottom: 0; width: 100%;">
                    <div class="separator mt-5 mb-3"></div>
                    <div class="d-flex mt-1 mb-4"></div>
                </div>
            </form>
        @endslot
    </x-admin.layout.search-menu-tab>

    @include('admin.queue.js.script')

    <script type="text/javascript">
        const viewAppointmentDetails = (id) => {
            $(this).openModal({
                url: `/admin/show-appointment/${id}`
            });
        }
    </script>
@stop
