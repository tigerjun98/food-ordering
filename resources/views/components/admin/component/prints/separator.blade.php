<tr>
    <td colspan="{{ $colspan ?? 1 }}">
        @if(isset($light))
            <div style="
                border: 1px solid #f1f1f1;
                border-width: 1px 0 0 0;
                height: 1px;
                margin: 5px 0px 0;
                "></div>
        @else
            <div style="
                border: 1px solid #d5d5d5;
                border-width: 1px 0 0 0;
                height: 1px;
                margin: 3px 0 0;
                "></div>
        @endif

    </td>
</tr>
