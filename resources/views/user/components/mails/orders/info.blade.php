<tr>
    <td colspan="3" style="padding-bottom: 30px;">
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td style="vertical-align:middle; border-radius: 3px; padding:30px; background-color: #f9f9f9; border-right: 5px solid white;">
                    <p style="text-transform: capitalize; color:#303030; font-size: 14px;  line-height: 1.6; margin:0; padding:0;">
                        {{ $title }}<br>
                        <span style="
    font-size: 12px;
    line-height: 16px;
    display: block;
    color: #9e9e9e;
    margin-top: 3px;
">{{ $desc }}</span>
                    </p>
                </td>

                <td style="text-align: right; padding-top:0px; padding-bottom:0; vertical-align:middle; padding:30px; background-color: #f9f9f9; border-radius: 3px; border-left: 5px solid white;">
                    <p style="color:#8f8f8f; font-size: 14px; padding: 0; line-height: 1.6; margin:0; ">
                        Date: <br>
                        {{ date("d.m.Y", strtotime($date)) }}
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
