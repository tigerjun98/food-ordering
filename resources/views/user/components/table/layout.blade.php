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
                    }
                });
            </script>

            <div class="input-daterange input-group mb-3" id="{{$name}}Datepicker">
                <input type="text" class="input-sm form-control start"
                       name="{{$name}}_after" id="{{$name}}AfterVal"
                       placeholder="After">
                <span class="input-group-addon"></span>
                <input type="text" class="input-sm form-control end"
                       name="{{$name}}_before" id="{{$name}}BeforeVal"
                       placeholder="Before">
            </div>
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
            // responsive: false,
            searching: false,
            info: false,
            ordering: false,
            // fixedHeader: true
        });
    }
</script>

<style>
    .card {
        border: initial;
        box-shadow: none;
        font-family: "Playfair Display", serif;
        border: 1px solid #f3f3f3;
    }
    div.dataTables_scrollBody table tbody tr:first-child th, div.dataTables_scrollBody table tbody tr:first-child td {
        /* border-top: none; */
         max-width: 188px;
        white-space: normal;
    }
    .table thead th {
        background: #f3f3f3;
        text-transform: capitalize;
        white-space: nowrap;
        font-weight: 700;
        padding: 0.75rem;
        border-bottom: 2px solid #f9f9f9;
        font-size: 12px;
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
