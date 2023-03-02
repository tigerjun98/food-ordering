<tr>
    <td colspan="2" style="padding-top:15px; border-top:1px solid #f1f0f0">
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td class="border-light"
                    style="vertical-align:middle; border-radius: var(--edge-border-radius); padding:15px;
                    background-color: #f9f9f9;"
                >
                    <p class="desc" style="color:#303030;">
                        {{ $consultation->patient->full_name }} - {{ get_age($consultation->patient->dob).' '.trans('common.age') }}<br>
                        +{{ $consultation->patient->phone }}<br>
                        {{ $consultation->patient->nationality_explain }}
                    </p>
                </td>

                <td class="border-light"
                    style="text-align: right; padding-top:0px; padding-bottom:0; vertical-align:middle; padding:15px;
                    background-color: #f9f9f9;
                    border-radius: var(--edge-border-radius);">
                    <p style="color:#8f8f8f;" class="desc">
                        Ref Id #: {{ $consultation->ref_id }}<br>
                        {{ dateFormat( $consultation->created_at, 'r' ) }}
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
</tr>
