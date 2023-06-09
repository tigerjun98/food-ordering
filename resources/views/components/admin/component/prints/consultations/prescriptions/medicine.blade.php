<tr>
    @if( str_contains( $template->value, 'table-description,')  )
        <td>
            <div class="prescription-table-content" style="font-weight: 500;">
                <p>{{ $combination->medicine->full_name }}</p>
            </div>
        </td>
    @endif

    @if( str_contains( $template->value, 'table-qty,')  )
        <td style="padding: 0 20px">
            <div class="prescription-table-content" style="white-space: nowrap; text-align: center; font-weight: 500;">
                <p>{{ $combination->quantity }} {{ $combination->prescription->metric_explain }}</p>
            </div>
        </td>
    @endif

    @if( str_contains( $template->value, 'table-total,')  )
        @if ($loop->first)
            <td style="" rowspan="{{ count($combination->prescription->combinations) }}">
                <div class="prescription-table-content" style="text-align: right; white-space: nowrap; font-weight: 500;">
                    <p>{{ $combination->prescription->combination_amount }} {{ $combination->prescription->metric_explain }}</p>
                </div>
            </td>
        @endif
    @endif

</tr>
