<tr>
    <td colspan="2" style="padding-top:0px; padding-bottom:5px; text-align: right; color:#909090;">
        <p style="font-size: 12px; line-height: 1; margin-top:5px; vertical-align:top; margin-bottom: 0; text-transform: capitalize;"><strong>{{ __('common.'.$label) }}:</strong></p>
    </td>
    <td style="padding-top:0px; padding-bottom:5px; text-align: right; padding-left: 15px;">
        <p style="font-size: 13px; line-height: 1; margin-top:5px; vertical-align:top; color:#145388; white-space:nowrap; margin-bottom: 0;"><strong>{{ __('common.currency') }} {{number_format((float)($value ?? 0), 2)}}</strong></p>
    </td>
</tr>
