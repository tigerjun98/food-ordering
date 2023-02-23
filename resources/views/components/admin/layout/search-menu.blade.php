<div class="app-menu">
    <div class="p-4 h-100">
        <div class="scroll">
            <div class="modal-header mb-5">
                <h4 class="mt-1 text-capitalize">{{ __('label.search') }}</h4>
            </div>

            <form id="js-datatable-filter-form" class="js-datatable-filter-form text-capitalize">
                <input type="hidden" id="searchVal" name="search_all" />
                @foreach($filter as $name => $item)

                    @php
                    $label = isset($item['label']) ? $item['label'] : $name
                    @endphp

                    @if($item['type'] == 'date')
                        <div class="mt-3">
                            <label class="float-left">{{ __('label.'.$label ?? $name ) }}</label>
                            <div class="float-right" onclick="switchToMonthly('{{$name}}')"><i class="simple-icon-refresh"></i></div>
                        </div>

                        <input class="form-control datepicker-monthly ds" placeholder="Month" id="{{$name}}MonthPicker" onchange="splitToDateRange('{{$name}}')">
                        <script type="module">
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

                        <div class="input-daterange filter input-group mb-4" id="{{$name}}Datepicker">
                            <input type="text" class="input-sm form-control start"
                                   name="{{$name}}_after" id="{{$name}}AfterVal"
                                   placeholder="After">
                            <span class="input-group-addon"></span>
                            <input type="text" class="input-sm form-control end"
                                   name="{{$name}}_before" id="{{$name}}BeforeVal"
                                   placeholder="Before">
                        </div>
                        <script type="module">
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

                            $('#{{$name}}AfterVal').val('{{ request()->query($name.'_after') }}');
                            $('#{{$name}}BeforeVal').val('{{ request()->query($name.'_before') }}');
                        </script>
                    @endif

                    @if($item['type'] == 'text')
                        <label class="form-group has-float-label mb-4">
                            <input class="form-control" placeholder="All {{$item['label'] ?? $name}}" name="{{$name}}" value="{{request()->query($name)}}">
                            <span>{{ __('label.'.$label ?? $name) }}</span>
                        </label>
                    @endif

                    @if($item['type'] == 'select')
                        <label class="form-group has-float-label mb-4">
                            <input type="hidden" name="{{$name}}" id="setMulti{{$name}}Val">
                            <select class="form-control select2-multiple" id="select2{{$name}}"
                                    @if(!isset($item['multiple']) || $item['multiple']) multiple="multiple" @endif
                                    data-width="100%"
                                    onchange="setMultiSelectVal('{{$name}}')"
                            >
                                <option label="&nbsp;">&nbsp;</option>
                                @foreach($item['option'] as $value  => $opt)
                                    <option value="{{$value}}">{{$opt}}</option>
                                @endforeach
                            </select>
                            <span>{{ __('label.'.$label ?? $name) }}</span>
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

                {{ $extraFilter ?? '' }}
                <input type="hidden" name="search" id="searchBar" value="{{ $filter[0] ?? '' }}">
                <input type="hidden" name="column" id="columnVal" class="column" value="{{$filter[1] ?? ''}}">
                <input type="hidden" name="page" id="pageVal" class="page" value="{{ $filter[5] ?? '' }}">
                {{--                    <input type="hidden" name="type" id="typeVal" class="type">--}}

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

<script type="text/javascript">
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

    const getDateFormat = (date) => {
        const yyyy = date.getFullYear();
        let mm = date.getMonth() + 1; // Months start at 0!
        let dd = date.getDate();

        if (dd < 10) dd = '0' + dd;
        if (mm < 10) mm = '0' + mm;

        return dd + '-' + mm + '-' + yyyy;
    }

    function splitToDateRange(id){
        let val = $('#'+id+'MonthPicker').val();
        let string = val.split("-");
        let date = new Date(string[0]+'-01-'+string[1]), y = date.getFullYear(), m = date.getMonth();
        $('#'+id+'AfterVal').val(getDateFormat(new Date(y, m, 1)));
        $('#'+id+'BeforeVal').val(getDateFormat(new Date(y, m + 1, 0))).trigger('change');
    }
</script>
<script type="module">
    $(".select2-single, .select2-multiple").select2({
        theme: "bootstrap",
        placeholder: "",
        maximumSelectionSize: 6,
        containerCssClass: ":all:",
        allowClear: true,
    });
</script>
