<div id="main_row" class="row app-row">
    <div class="col-12">
        <div class="mb-0">
            <h1 class="pr-3 text-capitalize">{{ $title ?? '' }}</h1>

            <div class="top-right-button-container">
                <button onclick="location.href='{{url()->previous()}}';"
                        type="button" class="btn btn-outline-primary btn-lg top-right-button mr-1 text-capitalize">
                    <i class="iconsminds-left-1 mr-1"></i>
                    {{ __('common.back') }}
                </button>
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
    <div class="app-menu">
        <div class="p-4 h-100">
            <div class="scroll">
                <div class="modal-header mb-5">
                    <h4 class="mt-1 text-capitalize">{{ __('common.filter') }}</h4>
                </div>

                <form id="js-datatable-filter-form" class="js-datatable-filter-form text-capitalize">
                    <input type="hidden" id="searchVal" name="search_all" />
                    @foreach($filter as $name => $item)
                        @if($item['type'] == 'date')
                            <div class="mt-3">
                                <label class="float-left">{{ __('common.'.$item['label']) }}</label>
                                <div class="float-right" onclick="switchToMonthly('{{$name}}')"><i class="simple-icon-refresh"></i></div>
                            </div>

                            <input class="form-control datepicker-monthly ds" placeholder="Month" id="{{$name}}MonthPicker" onchange="splitToDateRange('{{$name}}')">
                            <script>
                                $("#{{$name}}MonthPicker").datepicker({
                                    autoclose: true, format: "mm-yyyy", minViewMode: 1, maxViewMode: 2, orientation: "bottom auto",
                                    templates: {
                                        leftArrow: '<i class="simple-icon-arrow-left"></i>',
                                        rightArrow: '<i class="simple-icon-arrow-right"></i>'
                                    },
                                }).on("change", function() {
                                    refreshDataTable()
                                });
                            </script>

                            <div class="input-daterange filter input-group mb-3" id="{{$name}}Datepicker">
                                <input type="text" class="input-sm form-control start"
                                       name="{{$name}}_after" id="{{$name}}AfterVal"
                                       placeholder="After">
                                <span class="input-group-addon"></span>
                                <input type="text" class="input-sm form-control end"
                                       name="{{$name}}_before" id="{{$name}}BeforeVal"
                                       placeholder="Before">
                            </div>
                            <script>
                                $("#{{$name}}Datepicker").datepicker({
                                    autoclose: true,
                                    format: "dd-mm-yyyy",
                                    orientation: "bottom auto",
                                    templates: {
                                        leftArrow: '<i class="simple-icon-arrow-left"></i>',
                                        rightArrow: '<i class="simple-icon-arrow-right"></i>'
                                    },
                                }).on("change", function() {
                                    refreshDataTable()
                                });

                                let dateRange = '{{request()->query($name)}}';
                                if(dateRange){
                                    $('#{{$name}}AfterVal').val(dateRange.split('~')[0]);
                                    $('#{{$name}}BeforeVal').val(dateRange.split('~')[1]).trigger('change');
                                }
                            </script>
                        @endif

                        @if($item['type'] == 'text')
                            <label class="form-group has-float-label mt-4 mb-3">
                                <input class="form-control" placeholder="All {{$item['label']}}" name="{{$name}}" value="{{request()->query($name)}}">
                                <span>{{ __('common.'.$item['label']) }}</span>
                            </label>
                        @endif

                        @if($item['type'] == 'select')
                            <label class="form-group has-float-label mt-4 mb-3">
                                <input type="hidden" name="{{$name}}" id="setMulti{{$name}}Val">
                                <select class="form-control select2-multiple" id="select2{{$name}}" multiple="multiple" data-width="100%" onchange="setMultiSelectVal('{{$name}}')">
                                    {{--                                <option label="&nbsp;">&nbsp;</option>--}}
                                    @foreach($item['option'] as $value  => $opt)
                                        <option value="{{$value}}">{{$opt}}</option>
                                    @endforeach
                                </select>
                                <span>{{ __('common.'.$item['label']) }}</span>
                            </label>
                            <script>
                                let opt{{$name}} = '{{request()->query($name)}}';
                                if(opt{{$name}}){
                                    $('#select2{{$name}}').val(opt{{$name}});
                                    $('#setMulti{{$name}}Val').val(opt{{$name}});
                                }
                            </script>
                        @endif
                    @endforeach
                    <input type="hidden" name="search" id="searchBar" value="{{ $filter[0] ?? '' }}">
                    <input type="hidden" name="column" id="columnVal" class="column" value="{{$filter[1] ?? ''}}">
                    <input type="hidden" name="page" id="pageVal" class="page" value="{{ $filter[5] ?? '' }}">
                    <input type="hidden" name="type" id="typeVal" class="type">

                    <div style="position:fixed; bottom: 0; width: 100%;">
                        <div class="separator mt-5 mb-3"></div>
                        <div class="d-flex mt-1 mb-4">
                            <button type="button" class="btn btn-primary mb-1 text-capitalize" onclick="refreshDataTable()">{{ __('common.filter') }}</button>
                            <button type="button" class="btn btn-light-primary mb-1 text-capitalize" onclick="location.href='{{route(Route::currentRouteName())}}';">{{ __('common.reset') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-options"></i>
        </a>
    </div>
@endif
<script type="text/javascript">
    const refreshDataTable = () => {
        $('#{{ $dataTableId ?? 'dataTable' }}').DataTable().ajax.reload()
        window.history.replaceState({ id: "100" }, "Filter", "?"+$('#js-datatable-filter-form').serialize());
    };

    $(document).ready(function(){
        // initialTable();
        // $.updateTableFunction()
    });

    function setMultiSelectVal(id){
        $('#setMulti'+id+'Val').val($("#select2"+id).select2('val'))
        refreshDataTable()
    }
    function switchToMonthly(id){
        if($('#'+id+'Datepicker').hasClass('ds')){
            $('#'+id+'MonthPicker').addClass('ds');
            $('#'+id+'Datepicker').removeClass('ds');
        } else{
            $('#'+id+'MonthPicker').removeClass('ds');
            $('#'+id+'Datepicker').addClass('ds');
        }
    }

    function splitToDateRange(id){
        let val = $('#'+id+'MonthPicker').val();
        let string = val.split("-");
        let date = new Date(string[0]+'-01-'+string[1]), y = date.getFullYear(), m = date.getMonth();
        $('#'+id+'AfterVal').val(getDateFormat(new Date(y, m, 1)));
        $('#'+id+'BeforeVal').val(getDateFormat(new Date(y, m + 1, 0))).trigger('change');
    }

    function initialTable(){

        if ($().tooltip) {
            $('[data-toggle="tooltip"]').tooltip();
        }
        lazyLoadInstance.update();
    }
</script>

<style>
    .dataTables_scroll, #dataTable{
        min-height: 150px;
    }
    .DTFC_LeftHeadWrapper, .DTFC_LeftBodyWrapper{
        background: #fff;
        box-shadow: 3px 0 3px rgb(0 0 0 / 2%);
    }
    .DTFC_RightHeadWrapper, .DTFC_RightBodyWrapper{
        background: #fff;
        box-shadow: -3px 0 3px rgb(0 0 0 / 2%);
    }
    .DTFC_LeftBodyLiner, .DTFC_RightBodyLiner{
        overflow-x: hidden;
    }
    .table thead{
        border-top: 1px solid #dee2e6;
    }
    .table thead th{
        text-transform: capitalize;
        white-space: nowrap;
        font-weight: 700;
        padding: 0.75rem;
        border-bottom: 2px solid #dee2e6;
    }
    tr{
        border-top: 1px;
    }
    table.dataTable td{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .table td{
        border-top: 0 !important;
        color: #3A3A3A;
        white-space: nowrap;
    }
    table.dataTable.nowrap th {
        padding-right: 0.95rem !important;
        font-weight: 700;
    }
</style>
