<script>
    window.addEventListener('load', function () {
        if(typeof pageGotHead === 'undefined') {
            document.body.innerHTML = "";
            location.reload();
        }
    });
</script>
<div id="main_row" class="row app-row">
    <div class="col-12">
        <div class="mb-0">
            <h1 class="pr-3">{{$title ?? ''}}</h1>

            <div class="top-right-button-container">
                <button id="oriBackBtn" onclick="location.href='{{url()->previous()}}';"
                        type="button" class="btn btn-outline-primary btn-lg top-right-button mr-1">
                    <i class="iconsminds-left-1 mr-1"></i>
                    {{App\Models\Dictionary::lang('back')}}
                </button>

                {{$moreAction ?? ''}}
            </div>

            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block ds" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    {{$breadcrumb ?? ''}}
                </ol>
            </nav>
        </div>

        <div class="mb-4" id="headerSearch">
            <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
               role="button" aria-expanded="true" aria-controls="displayOptions">
                Display Options
                <i class="simple-icon-arrow-down align-middle"></i>
            </a>
            <div class="collapse d-md-block" id="displayOptions">
                <div class="d-block d-md-inline-block">
                    @if((count($option['search']) > 0))
                        <div class="btn-group float-md-left mr-1 mb-1">
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Search By
                            </button>
                            <div class="dropdown-menu">
                                @foreach($option['search'] as $o)
                                    <a class="dropdown-item opt"
                                       id="active-opt-{{$o['type']}}" onclick="setSearch('{{$o['type']}}')">{{$o['name']}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input id="startSearch" placeholder="Press enter...">
                        </div>
                    @endif

                </div>

                @if((count($option['category']) > 0))
                    <div class="float-md-right dropdown-as-select mt-2" id="pageCountDatatable">
                        <span class="text-muted text-small mr-2">{{ $type['type'] ?? '' }}</span>
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="activeCategory"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach($option['category'] as $o)
                                <a class="dropdown-item _inactive _inactive_d1 d1-{{$o['type']}}"
                                   href="javascript:updateType('d1-{{$o['type']}}');">
                                    {{$o['name']}}
                                </a>
                            @endforeach

                        </div>
                    </div>
                @endif

                @if((count($option['category']) > 0))
                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5 d-lg-flex">
                        @foreach($option['category'] as $o)
                            <li class="nav-item">
                                <a href="javascript:updateType('d1-{{$o['type']}}')"
                                   class="d1-{{$o['type']}} mr-3 d-flex nav-link _inactive_d1">
                                    <span class="d-md-block d-none">{{$o['name']}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="separator d-none d-xxs-block d-xs-block d-md-none mb-4"></div>
                @else
                    <div class="separator mb-4 mt-2"></div>
                @endif

            </div>
        </div>

        <div class="mb-4 show-spinner" id="updateTable">{{$table}}</div>

    </div>
</div>

<div class="app-menu {{$right_bar ?? ''}}">
    <div class="p-4 h-100">
        <div class="scroll">
            <div class="modal-header mb-5">
                <h4 class="mt-1">Filter</h4>
                <button type="button" class="btn btn-outline-primary" onclick="resetTable()">Reset</button>
            </div>

            <form id="filterForm">
                <div class="ds" id="filterType">
                    <p class="text-muted text-small">{{$sideFilterTitle ?? ''}}</p>
                    <ul class="list-unstyled mb-5">{{$sideFilter ?? ''}}</ul>
                </div>

                {{$moreFilter ?? ''}}

{{--                <div class="form-group mb-3" id="filterDate">--}}
{{--                    <label>Date</label>--}}
{{--                    <input type="text" class="form-control datepicker start" name="start" id="startVal"--}}
{{--                           value="{{$filter[2] ?? ''}}"--}}
{{--                           placeholder="Date">--}}
{{--                </div>--}}

                <div class="form-group mb-3" id="filterDate">
                    <div class="form-group mb-3" id="filterMonth">
                        <label>Monthly</label>
                        <input class="form-control datepicker-monthly" placeholder="Month" id="monthVal" onchange="filterMonth()">
                    </div>
                    <label>Created At</label>
                    <div class="input-daterange input-group" id="datepicker">
                        <input type="text" class="input-sm form-control start" name="start" id="startVal"
                               placeholder="Start" value="{{$filter[2] ?? ''}}">
                        <span class="input-group-addon"></span>
                        <input type="text" class="input-sm form-control end" name="end" id="endVal"
                               placeholder="End" value="{{$filter[3] ?? ''}}">
                    </div>
                </div>


                <input type="hidden" name="search" id="searchBar" value="{{ $filter[0] ?? '' }}">
                <input type="hidden" name="column" id="columnVal" class="column" value="{{$filter[1] ?? ''}}">
                <input type="hidden" name="page" id="pageVal" class="page" value="{{ $filter[5] ?? '' }}">
                <input type="hidden" name="type" id="typeVal" class="type" value="{{ $string ?? '' }}">
                <input type="hidden" name="dateType" id="dateTypeVal">
                <input type="hidden" name="response" id="responseVal">
            </form>
        </div>
    </div>

    <a class="app-menu-button d-inline-block d-xl-none" href="#">
        <i class="simple-icon-options"></i>
    </a>
</div>

<script>
    @if(isset($right_bar))
        $('#main_row').removeClass('app-row');
    @endif

    $(document).ready(function(){
        initialTable();
{{--        setSearch("{{$option['search'][0]['type']}}");--}}
{{--        $('#active-opt-{{$filter[1]}}').addClass('active');--}}

        @if($filter[1])
        setSearch('{{$filter[1]}}');
        @else
        setSearch("{{$option['search'][0]['type']}}");
        @endif

        $('#startSearch').val("{{$filter[0]}}");
    });

    $('#startSearch').keyup(function(e){
        if(e.keyCode == 13) {
            $('#searchBar').val($(this).val()).trigger('change');
            $.updateTableFunction();
        }
        else if(e.keyCode != 8) {
            var str = $('#columnVal').val();
            var n   = str.includes("phone");
            if(n == true) {
                var val = $('#startSearch').val();
                if( val.charAt(0) != 6){
                    var con = 6 + $('#startSearch').val();
                    $('#startSearch').val(con);
                }
            }
        }
    });

    $('#cateVal').change(function () {
        $.updateTableFunction();
    });

    $('#typeVal').change(function () {
        $.updateTableFunction();
    });

    function resetTable(){
        // updateType('d1-all');
        // document.getElementById("filterForm").reset();
        {{--window.location.replace("{{$defaultURL}}");--}}
    }

    function updateType(filter){

        // console.log(filter);
        if(filter != 'date'){

            window.scrollTo(0, 0);
            var res = 'all';
            var col = filter.split('-')[0];
            var val = filter.split('-')[1];
            $('._inactive_'+col).removeClass('active');
            $('.'+col+'-'+val).addClass('active');

            if(col == 'd5'){
                d4 = 'all';
                res = d1+'-'+d2+'-'+d3+'-'+d4+'-'+val;
            }
            else if(col == 'd4'){
                $('._inactive_d5').removeClass('active');
                res = d1+'-'+d2+'-'+d3+'-'+val;
            }
            else if(col == 'd3'){
                $('._inactive_d4').removeClass('active');
                res = d1+'-'+d2+'-'+ val;
            }
            else if(col == 'd2'){
                $('._inactive_d3').removeClass('active');
                res = d1+'-'+val;
            }
            else {
                $('._inactive_d2').removeClass('active');
                $('._inactive_d3').removeClass('active');
                $('._inactive_d4').removeClass('active');
                $('._inactive_d5').removeClass('active');
                res = val;
                $('#activeCategory').text($('.d1-'+res).find('span').text());
            }
            $('#typeVal').val(res);
            res = res + '?dateType='+$('#dateTypeVal').val()+
                '&start='+$('#startVal').val()+
                '&end='+$('#endVal').val()+
                '&search='+$('#startSearch').val()+
                '&column='+$('#columnVal').val();

        }
        else {
            res = $('#typeVal').val() + '?dateType='+$('#dateTypeVal').val()+
                '&start='+$('#startVal').val()+
                '&end='+$('#endVal').val()+
                '&search='+$('#startSearch').val()+
                '&column='+$('#columnVal').val();
        }



        // replaceURL = replaceURL.replace(':id', res);
        // window.history.pushState(res, 'EDMS', replaceURL);



        url = "{{route(\Request::route()->getName(),':id')}}";
        url = url.replace(':id', res);
        window.history.pushState('Refresh', 'unknown', url);

        @if(isset($symbol))
            url = url.replaceAll("-", "{{$symbol}}");
        @endif

        $.updateTableFunction(true);

    }

    $.updateTableFunction = function updateTable(resetPage){
        $.showLoading();
        if(resetPage == true){$('#pageVal').val(1);}
        callAjaxUpdateTable(url);
    }

    function callAjaxUpdateTable(url){

        var form = $("#filterForm");
        $.ajax({
            url,
            type: "GET",
            success: function(data){
                $data = $(data);
                $('#updateTable').hide().html($data).fadeIn();
                $.hideLoading();

                if ($.isFunction(window.tableUpdateSuccess)) {
                    tableUpdateSuccess();
                }

                if(!$('#updateTable').hasClass("hide_table")){
                    initialTable();
                } else{
                    $("#hide_table").addClass('ds');
                }

            },
            error : function() {
                $.hideLoading();
                $.ajaxAlert("top", "right", "danger", "Error", "Data not found!", "target");
            },
        });
    }

    function setActive(type){
        // $('#typeVal').val(activeName).trigger('change');
        // $('.breadcrumb-item').removeClass('active');
        // $('._inactive_filter').removeClass('active');
        // $('.list-'+activeName).addClass('active');
    }



    function initialTable(){
        if ($().tooltip) {
            $('[data-toggle="tooltip"]').tooltip();
        }
        lazyLoadInstance.update();

        $("#dataTable").DataTable({
            searching: false,
            info: false,
            ordering: false,
            paging:false,
        });
    }
</script>

<script>
    function filterMonth(){
        var val = $('#monthVal').val();
        var string = val.split("-");
        var m = string[0];
        var y = string[1];
        var date = new Date(m+'-01-'+y), y = date.getFullYear(), m = date.getMonth();
        var firstDay = new Date(y, m, 1);
        var lastDay = new Date(y, m + 1, 0);

        $('#startVal').val(getDateFormat(firstDay));
        $('#endVal').val(getDateFormat(lastDay)).trigger('change');
    }
    function setSearch(option){ //  set search type
        $('.opt').removeClass('active');
        $('#active-opt-'+option).addClass('active');
        $('#columnOption').val(option).trigger('change');
        $('#columnVal').val(option);
    }

    $("#monthVal").datepicker({
        autoclose: true,
        format: "mm-yyyy",
        minViewMode: 1,
        maxViewMode: 2,
        orientation: "bottom auto",
        templates: {
            leftArrow: '<i class="simple-icon-arrow-left"></i>',
            rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
    });

    // $("#datepicker").datepicker({
    //     autoclose: true,
    //     todayHighlight: true,
    //     format: "dd-mm-yyyy",
    //     orientation: "bottom auto",
    //     templates: {
    //         leftArrow: '<i class="simple-icon-arrow-left"></i>',
    //         rightArrow: '<i class="simple-icon-arrow-right"></i>'
    //     }
    // });

    $('#datepicker').datepicker({
        autoclose: true,
        toggleActive: true,
        clearBtn: true,
        format: "dd-mm-yyyy",
        todayHighlight: true,
        startDate: "01-08-2020",
        endDate: "{{date('d-m-Y', strtotime(Carbon\Carbon::now()))}}",
        orientation: "bottom auto",
        templates: {
            leftArrow: '<i class="simple-icon-arrow-left"></i>',
            rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
    });

    $('#datepicker.input-daterange').datepicker({
        autoclose: true,
        toggleActive: true,
        clearBtn: true,
        format: "dd-mm-yyyy",
        todayHighlight: true,
        startDate: "01-08-2020",
        endDate: "{{date('d-m-Y', strtotime(Carbon\Carbon::now()))}}",
        orientation: "bottom auto",
        templates: {
            leftArrow: '<i class="simple-icon-arrow-left"></i>',
            rightArrow: '<i class="simple-icon-arrow-right"></i>'
        }
    });

    $('#startVal').change(function(e){
        $('#monthVal').val('');
        if($('#monthVal').val().length == 0){
            updateType('date');
            // $.updateTableFunction(true);
        }
    });
    $('#endVal').change(function(e){
        updateType('date');
        // $.updateTableFunction(true)
    });
</script>
{{$script ?? ''}}
