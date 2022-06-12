<tr>
    <td style="padding-top:0px; padding-bottom:20px; width:140px ">
        <img src="{{ $image ?? '' }}" style="width: 113px; height: 113px; object-fit: cover; border-radius: 3px; " />
    </td>
    <td style="padding-top:0px; padding-bottom:20px;">
        <h4 style="font-size: 16px; line-height: 1; margin-bottom:20px;">
            <a href="#" style="text-transform: capitalize;text-decoration: none; color:#303030; font-weight:500;">{{ $label ?? '' }}</a></h4>
        <p href="#" style="font-size: 12px; text-decoration: none; line-height: 1; color:#909090; margin-top:0px; margin-bottom:0;">{{ $quantity ?? 0 }}
            pcs
        </p>
        <p style="text-transform: capitalize; font-size: 12px; line-height: 1; color:#909090; margin-top:5px;">{{ $type ?? '' }}
        </p>
    </td>
    <td style="padding-top:0px; padding-bottom:20px; text-align: right;">
        <p style="font-size: 13px; line-height: 1; color:#145388;  margin-top:5px; vertical-align:top; white-space:nowrap;">{{ __('common.currency') }} {{number_format((float)($total ?? 0), 2)}}</p>
    </td>
</tr>
<tr>
    <td colspan="3" style="border-top:1px solid #e4e2e2">&nbsp;</td>
</tr>
