<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body style="margin:0; padding:0; background-color:#f8f8f8; padding-top: 10px;">
<!--Mailing Start-->
<div leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="height:auto !important;width:100% !important; font-family: Helvetica,Arial,sans-serif !important;">
    <center>
        <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="max-width:600px; background-color:#ffffff;border:1px solid #e4e2e2;border-collapse:separate !important; border-radius:4px;border-spacing:0;color:#242128; margin:0;padding:40px;"
               heigth="auto">
            <tbody>
            <tr>
                <td align="left" valign="center" style="padding-bottom:40px;border-top:0;height:100% !important;width:100% !important;">
                    <img src="https://coloredstrategies.com/mailing/dore.png" />
                </td>
                <td align="right" valign="center" style="padding-bottom:40px;border-top:0;height:100% !important;width:100% !important;">
                    <span style="color: #8f8f8f; font-weight: normal; line-height: 2; font-size: 14px;">{{date("d.m.Y", strtotime($data->created_at))}}</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top:10px; border-top:1px solid #e4e2e2">
                    <table style="text-transform: capitalize;">
                        <tr>
                            <td colspan="2" style="padding-bottom:20px;">
                                <h3 style="color:#303030; font-size:18px; line-height: 1.6; font-weight:500;">Order
                                    Summary</h3>
                                <p style="color:#8f8f8f; font-size: 14px; padding-bottom: 20px; line-height: 1.4; margin-bottom:0;">
                                    Dynamically target high-payoff intellectual capital for
                                    customized technologies. Objectively integrate emerging
                                    core competencies before process-centric communities.
                                    Dramatically evisculate holistic innovation rather than
                                    client-centric data.<br><br>Progressively maintain
                                    extensive infomediaries via extensible niches.
                                </p>
                            </td>
                        </tr>

                        @if((!$data->orders->isEmpty()))
                            @foreach($data->orders as $key => $d)
                                <tr>
                                    <td style="padding-top:0px; padding-bottom:20px; width:140px ">
                                        <img src="{{ asset("storage/products/".$d->product->product_images[0]) }}" style="width: 113px; height: 85px; object-fit: cover; border-radius: 3px; " />
                                    </td>
                                    <td style="padding-top:0px; padding-bottom:20px;">
                                        <h4 style="font-size: 16px; line-height: 1; margin-bottom:20px;"><a href="#" style="text-decoration: none; color:#303030; font-weight:500;">{{$d->product_name}}</a></h4>
                                        <p href="#" style="font-size: 12px; text-decoration: none; line-height: 1; color:#909090; margin-top:0px; margin-bottom:0;">{{$d->quantity}} pcs</p>
                                        <p style="font-size: 12px; line-height: 1; color:#909090; margin-top:5px;">{{$d->product_type_name}}</p>
                                    </td>
                                    <td style="padding-top:0px; padding-bottom:20px; text-align: right;">
                                        <p style="font-size: 13px; line-height: 1; color:#145388;  margin-top:5px; vertical-align:top; white-space:nowrap;">{{ __('common.currency') }} {{number_format($d->quantity * $d->unit_price, 2,'.',',')}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="border-top:1px solid #e4e2e2">&nbsp;</td>
                                </tr>
                            @endforeach
                        @endif

                        <tr>
                            <td colspan="2" style="padding-top:0px; padding-bottom:5px; text-align: right; color:#909090;">
                                <p style="font-size: 12px; line-height: 1; margin-top:5px; vertical-align:top;  margin-bottom: 0;">
                                    {{ __('common.subtotal') }}:&nbsp;</p>
                            </td>
                            <td style="padding-top:0px; padding-bottom:5px; text-align: right; padding-left: 15px;">
                                <p style="font-size: 13px; line-height: 1; margin-top:5px; vertical-align:top; color:#145388; white-space:nowrap; margin-bottom: 0;">{{ __('common.currency') }} {{number_format($d->total_price, 2,'.',',')}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:0px; padding-bottom:5px; text-align: right; color:#909090;">
                                <p style="font-size: 12px; line-height: 1; margin-top:5px; vertical-align:top; margin-bottom: 0;">Shipping:&nbsp;</p>
                            </td>
                            <td style="padding-top:0px; padding-bottom:5px; text-align: right; padding-left: 15px;">
                                <p style="font-size: 13px; line-height: 1; margin-top:5px; vertical-align:top; color:#145388; white-space:nowrap; margin-bottom: 0;">$
                                    4.04</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:0px; padding-bottom:5px; text-align: right; color:#909090;">
                                <p style="font-size: 12px; line-height: 1; margin-top:5px; vertical-align:top; margin-bottom: 0;">Taxes:&nbsp;</p>
                            </td>
                            <td style="padding-top:0px; padding-bottom:5px; text-align: right; padding-left: 15px;">
                                <p style="font-size: 13px; line-height: 1; margin-top:5px; vertical-align:top; color:#145388; white-space:nowrap; margin-bottom: 0;">$
                                    9.14</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-top:0px; padding-bottom:5px; text-align: right; color:#909090;">
                                <p style="font-size: 12px; line-height: 1; margin-top:5px; vertical-align:top; margin-bottom: 0;"><strong>{{ __('common.total') }}:&nbsp;</strong></p>
                            </td>
                            <td style="padding-top:0px; padding-bottom:5px; text-align: right; padding-left: 15px;">
                                <p style="font-size: 13px; line-height: 1; margin-top:5px; vertical-align:top; color:#145388; white-space:nowrap; margin-bottom: 0;"><strong>{{ __('common.currency') }} {{number_format($d->total_price, 2,'.',',')}}</strong></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="margin-top:30px; padding-bottom:20px; margin-bottom: 40px;">
            <tbody>
            <tr>
                <td align="center" valign="center">
                    <p style="font-size: 12px; text-decoration: none;line-height: 1; color:#909090; margin-top:0px; ">
                        ColoredStrategies Inc, 35 Little Russell St. Bloomsburg London,UK
                    </p>
                    <p style="font-size: 12px; line-height:1; color:#909090;  margin-top:5px;">
                        <a href="#" style="color: #145388; text-decoration:none;">Privacy
                            Policy</a>
                        | <a href="#" style="color: #145388; text-decoration:none;">Unscubscribe</a>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </center>
</div>
<!--Mailing End-->

</body>

</html>
