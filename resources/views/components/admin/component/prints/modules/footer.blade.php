<x-admin.component.prints.layouts.section>
    @slot('body')
        <tr>
            <td colspan="3" style="text-align:center;">
                <p style="color: #909090; font-size:11px; text-align:center;">
                    {{ $text ?? '' }}
                </p>
            </td>
        </tr>
    @endslot
</x-admin.component.prints.layouts.section>
