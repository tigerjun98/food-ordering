<div id="main_row" class="row app-row">
    <div class="col-12">
        <div class="mb-0">
            <h1 class="pr-3 text-capitalize">{{ $title ?? '' }}</h1>

            <div class="top-right-button-container">
                @if(isset($back) && $back)
                    <button onclick="location.href='{{ url()->previous() }}';"
                            type="button" class="btn btn-outline-primary btn-lg top-right-button mr-1 text-capitalize">
                        <i class="iconsminds-left-1 mr-1"></i>
                        {{ __('common.back') }}
                    </button>
                @endif

                {{ $action ?? '' }}

                @if(isset($moreAction))
                    <div class="btn-group">
                        <button type="button"
                                class="text-capitalize btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('common.more') }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{$moreAction ?? ''}}
                        </div>
                    </div>
                @endif
            </div>

        </div>

        <div class="mb-4" id="headerSearch">
            <div class="separator mb-4 mt-2"></div>
        </div>

        <div class="mb-4" id="updateTable">
            <div class="card" id="hide_table">
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>

    </div>
</div>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}


@if(isset($filter) && count($filter) > 0)
    <x-admin.layout.search-menu
        :filter="$filter"
        :extraFilter="$extraFilter ?? null"
    />
@endif

<script type="text/javascript">
    function initialTable(){
        if ($().tooltip) {
            $('[data-toggle="tooltip"]').tooltip();
        }
        $(this).hideLoader({fullScreen: true});
        lazyLoadInstance.update();
    }

    const refreshDataTable = () => {
        $(this).setLoader({fullScreen: true});
        $('#{{ $dataTableId ?? 'dataTable' }}').DataTable().ajax.reload( function(){
            $(this).hideLoader({fullScreen: true});
        });
        window.history.replaceState({ id: "100" }, "Filter", "?"+$('#js-datatable-filter-form').serialize());
    };

    function setSearchAllVal(){
        let val = '{{request()->query('search_all')}}'
        $('#dataTable_filter').find("[type='search']").val(val);
    }

    $(document).ready(function(){
        setSearchAllVal()
        // initialTable();
        // $.updateTableFunction()
    });


</script>
