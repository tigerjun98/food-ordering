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
                    <span style="color: #8f8f8f; font-weight: normal; line-height: 2; font-size: 14px;"> {{ date("d.m.Y", strtotime(\Carbon\Carbon::now())) }}</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top:10px; border-top:1px solid #e4e2e2">
                    @yield('content')
                </td>
            </tr>
            </tbody>
        </table>

        <table style="margin-top:30px; padding-bottom:20px; margin-bottom: 40px;">
            <tbody>
            <tr>
                <td align="center" valign="center">
                    <p style="font-size: 12px; text-decoration: none;line-height: 1; color:#909090; margin-top:0px; ">
                        {{json_decode(\App\Models\Setting::getValue('contact'))->address}}
                    </p>
                    <p style="font-size: 12px; line-height:1; color:#909090;  margin-top:5px;">
                        <a href="{{route('privacyPolicy')}}" style="color: #145388; text-decoration:none;">Privacy Policy</a>
{{--                        | <a href="#" style="color: #145388; text-decoration:none;">Unscubscribe</a>--}}
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
