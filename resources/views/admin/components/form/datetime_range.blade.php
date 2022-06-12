{{--<div class="form-group mb-3 has-float-label">--}}
{{--    <label>{{ __('common.'.$label) }}</label>--}}
{{--    <input type="text" name="datetimes" class="form-control input-datetimerange"/>--}}
{{--    <div class="input-datetimerange input-group" id="{{$id ?? $name}}">--}}
{{--        <input type="text" class="input-sm form-control"--}}
{{--               name="{{$name}}_start" placeholder="Start">--}}
{{--        <span class="input-group-addon"></span>--}}
{{--        <input type="text" class="input-sm form-control"--}}
{{--               name="{{$name}}_end" placeholder="End">--}}
{{--    </div>--}}
{{--</div>--}}
<input type="hidden" name="{{$name}}"
       @if(isset($value) && $value)
           value="{{$value}}"
       @elseif(isset($data) && $data)
           value="{{$data[$name]}}"
       @endif
       id="{{$id ?? $name}}">
<div class="form-group mb-5 has-float-label">
    <label>{{ __('common.'.$label) }}</label>
    <div class="input-group date position-relative" id="datetime-range-{{$id ?? $name}}">
        <input type="text" class="form-control input-datetime-range">
        <span class="input-group-text input-group-append input-group-addon">
            <i class="simple-icon-calendar"></i>
        </span>
    </div>
</div>



{{--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />--}}
{{--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>--}}
<script defer>
    $(function() {
        $('.input-datetime-range').daterangepicker({
            timePicker: true,
            // startDate: moment().startOf('hour'),
            // endDate: moment().startOf('hour').add(32, 'hour'),
            parentEl: '.input-group.date',
            drops: 'bottom',
            locale: {
                format: 'DD/MM/YYYY hh:mm A'
            },
        },function(start, end, label) {
            let val = start.format('YYYY/MM/DD HH:mm') + '-' + end.format('YYYY/MM/DD HH:mm');
            $('#{{$id ?? $name}}').val(val)
        });

        @if(isset($startDate))
        $('.input-datetime-range').data('daterangepicker').setStartDate(moment('{{$startDate}}'));
        @endif

        @if(isset($endDate))
        $('.input-datetime-range').data('daterangepicker').setEndDate(moment('{{$endDate}}'));
        @endif



        // $(".input-datetimerange").daterangepicker({
        //     timePicker: true,
        //     startDate: moment().startOf('hour'),
        //     endDate: moment().startOf('hour').add(32, 'hour'),
        //     locale: {
        //         format: "dd-mm-yyyy h:mm A",
        //     },
        //     orientation: "bottom auto",
        //     drops: "down",
        //     templates: {
        //         leftArrow: '<i class="simple-icon-arrow-left"></i>',
        //         rightArrow: '<i class="simple-icon-arrow-right"></i>'
        //     }
        // });
    });

</script>
