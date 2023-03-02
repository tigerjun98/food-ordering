@php
    $summaries = ['symptom', 'advise', 'internal_remark']
@endphp

@foreach($summaries as $summary)
<x-admin.component.prints.layouts.section
    :title="trans('label.'.$summary)"
>
    @slot('body')
        <tr>
            <td colspan="2" style="padding-bottom:0;">
                <p class="desc" style="">
                    {{ $consultation->{$summary} }}
                </p>
            </td>
        </tr>
    @endslot
</x-admin.component.prints.layouts.section>
@endforeach
