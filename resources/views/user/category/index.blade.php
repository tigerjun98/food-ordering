@extends('admin.layout')

@section('content')
    <div id="main_row" class="row">
        <div class="col-12">
            <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Category management</h1>
                <div class="top-right-button-container">

                    <x-admin.component.button
                        :redirect="url()->previous()"
                        :class="'btn-outline-primary btn-lg top-right-button'"
                        :icon="'iconsminds-left-1'"
                        :text="trans('button.back')"
                    />
                </div>
            </div>

            <ul class="nav nav-tabs separator-tabs ml-0 mb-3">
                <li class="nav-item">
                    <a class="nav-link role-link active"
                       id="tab-category"
                       href="#"
                    >
                        Sorting
                    </a>
                </li>
            </ul>

            <div class="" id="listingWrapper"></div>
        </div>
    </div>

    <script type="module">
        function refreshDataTable() {
            $('#listingWrapper').setHtml({
                url: `/category`
            })
        }

        refreshDataTable();
    </script>
@stop
