<div id="main_row" class="row">
    <div class="col-12">
        <div class="mb-4" id="updateTable"></div>
    </div>
</div>

<form id="filterForm" class="ds">
    @csrf
    <input type="hidden" name="status" id="status">
    @foreach($filter as $name => $item)
        @if($item['type'] == 'date')
{{--            <div class="mt-3">--}}
{{--                <label class="float-left">{{ __('common.'.$item['label']) }}</label>--}}
{{--                <div class="float-right" onclick="switchToMonthly('{{$name}}')"><i class="simple-icon-refresh"></i></div>--}}
{{--            </div>--}}

{{--            <input class="form-control datepicker-monthly ds" placeholder="Month" id="{{$name}}MonthPicker" onchange="splitToDateRange('{{$name}}')">--}}
{{--            <script>--}}
{{--                $("#{{$name}}MonthPicker").datepicker({--}}
{{--                    autoclose: true, format: "mm-yyyy", minViewMode: 1, maxViewMode: 2, orientation: "bottom auto",--}}
{{--                    templates: {--}}
{{--                        leftArrow: '<i class="simple-icon-arrow-left"></i>',--}}
{{--                        rightArrow: '<i class="simple-icon-arrow-right"></i>'--}}
{{--                    }--}}
{{--                });--}}
{{--            </script>--}}

{{--            <div class="input-daterange input-group mb-3" id="{{$name}}Datepicker">--}}
{{--                <input type="text" class="input-sm f@if($item['type'] == 'date')--}}
        {{--            <div class="mt-3">--}}
        {{--                <label class="float-left">{{ __('common.'.$item['label']) }}</label>--}}
        {{--                <div class="float-right" onclick="switchToMonthly('{{$name}}')"><i class="simple-icon-refresh"></i></div>--}}
        {{--            </div>--}}

        {{--            <input class="form-control datepicker-monthly ds" placeholder="Month" id="{{$name}}MonthPicker" onchange="splitToDateRange('{{$name}}')">--}}
        {{--            <script>--}}
        {{--                $("#{{$name}}MonthPicker").datepicker({--}}
        {{--                    autoclose: true, format: "mm-yyyy", minViewMode: 1, maxViewMode: 2, orientation: "bottom auto",--}}
        {{--                    templates: {--}}
        {{--                        leftArrow: '<i class="simple-icon-arrow-left"></i>',--}}
        {{--                        rightArrow: '<i class="simple-icon-arrow-right"></i>'--}}
        {{--                    }--}}
        {{--                });--}}
        {{--            </script>--}}

        {{--            <div class="input-daterange input-group mb-3" id="{{$name}}Datepicker">--}}
        {{--                <input type="text" class="input-sm form-control start"--}}
        {{--                       name="{{$name}}_after" id="{{$name}}AfterVal"--}}
        {{--                       placeholder="After">--}}
        {{--                <span class="input-group-addon"></span>--}}
        {{--                <input type="text" class="input-sm form-control end"--}}
        {{--                       name="{{$name}}_before" id="{{$name}}BeforeVal"--}}
        {{--                       placeholder="Before">--}}
        {{--            </div>--}}
        {{--        @endiform-control start"--}}
{{--                       name="{{$name}}_after" id="{{$name}}AfterVal"--}}
{{--                       placeholder="After">--}}
{{--                <span class="input-group-addon"></span>--}}
{{--                <input type="text" class="input-sm form-control end"--}}
{{--                       name="{{$name}}_before" id="{{$name}}BeforeVal"--}}
{{--                       placeholder="Before">--}}
{{--            </div>--}}
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
                    <option label="&nbsp;">&nbsp;</option>
                    @foreach($item['option'] as $value  => $opt)
                        <option value="{{$value}}">{{$opt}}</option>
                    @endforeach
                </select>
                <span>{{ __('common.'.$item['label']) }}</span>
            </label>
        @endif
    @endforeach
</form>

<script>
    var indexDtUrl = '{{route(Route::currentRouteName().'indexDt')}}'
    @if(count($filter) < 1)
    $('#main_row').removeClass('app-row');
    @endif

    $(document).ready(function(){
        // initialTable();
        $.updateTableFunction()
    });

    function setMultiSelectVal(id){
        $('#setMulti'+id+'Val').val($("#select2"+id).select2('val'))
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

    $.updateTableFunction = function updateTable(resetPage){
        if(resetPage == true){$('#pageVal').val(1);}
        callAjaxUpdateTable(indexDtUrl);
    }

    async function callAjaxUpdateTable(url){
        var form = $("#filterForm");

        try {
            let response = await $("#updateTable").sendRequest({
                url,
                data: form.serialize(),
            });
            $data = $(response);
            $('#updateTable').hide().html($data).fadeIn();
            // if ($.isFunction(window.tableUpdateSuccess)) {
            //     tableUpdateSuccess();
            // }

            if(!$('#updateTable').hasClass("hide_table")){
                initialTable();
            } else{
                $("#hide_table").addClass('ds');
            }
        } catch(err) {
            console.log(err, 'user.components.table');
        }
    }

    function initialTable(){

        lazyLoadInstance.update();

        $("#dataTable").DataTable({
            scrollY:        "62vh",
            scrollX:        true,
            scrollCollapse: true,
            paging:false,
            responsive: true,
            searching: false,
            info: false,
            ordering: false,
            // fixedHeader: true
        });
    }
</script>

<style>
    .dataTables_wrapper {
        overflow: hidden; }

    table.dataTable td {
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f3f3f3;
        outline: initial; }

    table.dataTable tr:last-of-type td {
        border-bottom: initial; }

    table.dataTable {
        width: 100%;
        margin-top: 0;
        margin-bottom: 0; }

    table p,
    table h6 {
        margin-bottom: initial; }

    table.dataTable thead > tr > th.sorting_asc,
    table.dataTable thead > tr > th.sorting_desc,
    table.dataTable thead > tr > th.sorting,
    table.dataTable thead > tr > td.sorting_asc,
    table.dataTable thead > tr > td.sorting_desc,
    table.dataTable thead > tr > td.sorting {
        padding-top: 10px;
        padding-bottom: 10px; }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:after {
        right: 1.5em; }

    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:before {
        right: 2em; }

    .dataTables_wrapper .paginate_button.previous {
        margin-right: 15px; }

    .dataTables_wrapper .paginate_button.next {
        margin-left: 15px; }

    div.dataTables_wrapper div.dataTables_paginate {
        margin-top: 25px; }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: center; }

    .dataTables_wrapper .paginate_button.page-item {
        padding-left: 10px;
        padding-right: 10px; }

    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child:before,
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child:before {
        top: unset;
        box-shadow: initial;
        background-color: #0050B4;
        font-size: 12px; }

    .data-table-rows .dataTables_wrapper {
        overflow: initial; }

    .data-table-rows table {
        border-spacing: 0px 1rem; }
    .data-table-rows table tbody tr {
        box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04), 0 1px 6px rgba(0, 0, 0, 0.04); }
    .data-table-rows table tbody tr.selected {
        box-shadow: 0 3px 30px rgba(0, 0, 0, 0.1), 0 3px 20px rgba(0, 0, 0, 0.1); }
    .data-table-rows table tbody tr.child td {
        padding: 0.75rem 2rem; }
    .data-table-rows table tbody tr.child td li {
        padding: 0; }
    .data-table-rows table td,
    .data-table-rows table th {
        padding: 1.5rem;
        border: initial; }
    .data-table-rows table td {
        background: white; }
    .data-table-rows table th.empty:before, .data-table-rows table th.empty:after {
        content: ""; }
    .data-table-rows table .data-table-rows-check {
        text-align: right;
        pointer-events: none; }

    .data-table-rows table.dataTable thead .sorting:before,
    .data-table-rows table.dataTable thead .sorting_asc:before,
    .data-table-rows table.dataTable thead .sorting_asc_disabled:before,
    .data-table-rows table.dataTable thead .sorting_desc:before,
    .data-table-rows table.dataTable thead .sorting_desc_disabled:before {
        right: initial;
        left: 0.5em; }

    .data-table-rows table.dataTable thead .sorting:after,
    .data-table-rows table.dataTable thead .sorting_asc:after,
    .data-table-rows table.dataTable thead .sorting_asc_disabled:after,
    .data-table-rows table.dataTable thead .sorting_desc:after,
    .data-table-rows table.dataTable thead .sorting_desc_disabled:after {
        right: initial;
        left: 0; }

    .data-tables-hide-filter .view-filter {
        display: none; }

    .card {
        background: var(--primary-color10);
        color: #fff;
        width: 100%;
        border: 1px solid var(--primary-color6);
        line-height: 20px;
        padding: 9px 50px 11px 24px;
    }

    div.dataTables_scrollBody table tbody tr:first-child th, div.dataTables_scrollBody table tbody tr:first-child td {
        /* border-top: none; */
         max-width: 188px;
        white-space: normal;
    }
    .table thead th {
        background: #ffffff00;
        text-transform: capitalize;
        white-space: nowrap;
        padding: 0.75rem;
        color: var(--primary-color3);
        border-bottom: 1px solid var(--primary-color6);
        border-top: 1px solid var(--primary-color6);
        font-weight: 400;
        font-size: 16px;
    }
    .DTFC_LeftHeadWrapper, .DTFC_LeftBodyWrapper{
        background: #f9f9f9;
        box-shadow: 3px 0 3px rgb(0 0 0 / 2%);
    }
    .DTFC_RightHeadWrapper, .DTFC_RightBodyWrapper{
        background: #f9f9f9;
        box-shadow: -3px 0 3px rgb(0 0 0 / 2%);
    }
    .DTFC_LeftBodyLiner, .DTFC_RightBodyLiner{
        overflow-x: hidden;
    }
    .table thead{
        border-top: 1px solid #dee2e6;
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
    div.dataTables_scrollBody table{
        min-height: 140px;
    }
</style>
