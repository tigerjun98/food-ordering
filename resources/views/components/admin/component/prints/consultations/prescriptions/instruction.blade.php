<tr>
    @if( str_contains( $template->value, 'table-description,')  )
        <td>
            <div class="prescription-table-content" style="font-weight: 500;">
                <p>{{ trans('label.time_per_day') }}
                    <b>({{ $prescription->direction_explain }})</b>
                </p>
            </div>
        </td>
    @endif

    @if( str_contains( $template->value, 'table-qty,')  )
        <td>
            <div class="prescription-table-content" style="text-align: center; font-weight: 500;">
                <p>{{ $prescription->time_per_day }} {{ trans('label.time') }}</p>
            </div>
        </td>
    @endif

    <td rowspan="2">
        <div class="prescription-table-content" style="white-space: nowrap; text-align: right; font-weight: 500;">
            <p>{{ $prescription->dose_daily }} {{ $prescription->metric_explain }} daily</p>
        </div>
    </td>
</tr>
<tr>
    @if( str_contains( $template->value, 'table-description,')  )
        <td>
            <div class="prescription-table-content" style="font-weight: 500;">
                <p>{{ trans('label.dose_per_time') }}</p>
            </div>
        </td>
    @endif

    @if( str_contains( $template->value, 'table-qty,')  )
        <td>
            <div class="prescription-table-content" style="white-space: nowrap; text-align: center; font-weight: 500;">
                <p>{{ $prescription->dose_per_time }} {{ $prescription->metric_explain }}</p>
            </div>
        </td>
    @endif

</tr>
