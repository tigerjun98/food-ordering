
<style>
    .label, .desc, .qty{
        font-size: 12px;
        color:#8f8f8f;
        line-height: 1.4;
        margin-top: 0; margin-bottom:0;
    }
    .label{
        white-space: nowrap;
        padding-right: 20px;
        color: #303030;
    }
    .desc{
        color: #8f8f8f;
    }
    .qty{
        text-align: right;
    }
    .medicine .desc, .medicine .qty{
        margin-top: 0;
        margin: 3px 0;
    }
    .border-top{
        border: 1px solid #ededed;
        border-width: 1px 0 0 0;
    }
    .separator{
        padding: 5px 0;
    }
    .bg-light{
        background: #f9f9f9;
    }
    .border-light{
        border: 1px solid #e3e3e3;
    }
    .prescription .label{
        padding-left: 15px;
    }
    .prescription .qty{
        padding-right: 15px;
    }

    .border-width-edge-left-top, .border-width-edge-right-top, .border-width-edge-left-bottom, .border-width-edge-right-bottom{
        border: 1px solid #e3e3e3;
    }
    .border-width-edge-left-top{
        border-width: 1px 0 0 1px;
        border-radius: var(--edge-border-radius) 0 0 0;
    }

    .border-width-edge-right-top{
        border-width: 1px 1px 0 0;
        border-radius: 0 var(--edge-border-radius) 0 0;
    }

    .border-width-edge-left-bottom{
        border-width: 0 0 1px 1px;
        border-radius: 0 0 var(--edge-border-radius) 0;
    }

    .border-width-edge-right-bottom{
        border-width: 0 1px 1px 0;
        border-radius: 0 0 var(--edge-border-radius) 0;
    }
</style>

<x-admin.component.prints.layouts.section
    :title="trans('common.prescriptions')"
>
    @slot('body')
        @forelse($prescriptions as $prescription)
            <tr class="bg-light prescription">
                <td class="section pt-15 pb-10 border-width-edge-left-top">
                    <p class="label">{{ trans('label.prescription_category') }}</p>
                </td>
                <td colspan="2" class="section pt-15 pb-10 border-width-edge-right-top">
                    <p class="desc">{{ $prescription->category_explain }}</p>
                </td>
            </tr>

            @if( in_array($prescription->category, array_keys(\App\Models\Medicine::getCategoryList())) && $prescription->combinations )
                @foreach($prescription->combinations as $key => $combination)
                    <tr class="medicine bg-light prescription">
                        @if ($loop->first)
                            <td rowspan="{{ count( $prescription->combinations ) + 1 }}" class="border-light" style="border-width: 0 0 0 1px;">
                                <p class="label">{{ trans('label.medicine') }}</p>
                            </td>
                        @endif
                        <td class="">
                            <p class="desc">{{ $combination->medicine->full_name }}</p>
                        </td>
                        <td class="border-light" style="border-width: 0 1px 0 0;">
                            <p class="qty"> {{ $combination->quantity }} {{ $prescription->metric_explain }}</p>
                        </td>
                    </tr>
                @endforeach
                <tr class="medicine bold bg-light prescription">
                    <td class="border-top pb-10">
                        <p class="desc">{{ trans('label.total') }}</p>
                    </td>
                    <td class="border-top pb-10 border-light" style="border-width: 1px 1px 0 0;">
                        <p class="qty">{{ $prescription->combination_amount }} {{ $prescription->metric_explain }}</p>
                    </td>
                </tr>

                <tr class="medicine bg-light prescription">
                    <td rowspan="3" class="border-light" style="border-width: 0 0 0 1px;">
                        <p class="label">{{ trans('common.instruction') }}</p>
                    </td>
                    <td class="">
                        <p class="desc">{{ trans('label.time_per_day') }}</p>
                    </td>
                    <td class="border-light" style="border-width: 0 1px 0 0;">
                        <p class="qty">{{ $prescription->time_per_day }} {{ trans('label.time') }}</p>
                    </td>
                </tr>
                <tr class="medicine bg-light prescription">
                    <td class="">
                        <p class="desc">{{ trans('label.dose_per_time') }}</p>
                    </td>
                    <td class=" border-light" style="border-width: 0 1px 0 0;">
                        <p class="qty">{{ $prescription->dose_per_time }} {{ trans('label.dose') }}</p>
                    </td>
                </tr>
                <tr class="medicine bold bg-light prescription">
                    <td class="border-top pb-10">
                        <p class="desc">{{ trans('label.daily_dose') }}</p>
                    </td>
                    <td class="border-top pb-10 border-light" style="border-width: 1px 1px 0 0;">
                        <p class="qty">{{ $prescription->dose_daily }} {{ $prescription->metric_explain }}</p>
                    </td>
                </tr>
                <tr class="bg-light prescription">
                    <td class="pb-15 border-width-edge-left-bottom">
                        <p class="label">{{ trans('label.direction') }}</p>
                    </td>
                    <td colspan="2" class="pb-15 border-width-edge-right-bottom">
                        <p class="desc">{{ $prescription->direction_explain }}</p>
                    </td>
                </tr>
            @else
                <tr class="bg-light prescription">
                    <td class="pb-15 border-width-edge-left-bottom">
                        <p class="label">{{ trans('label.remark') }}</p>
                    </td>
                    <td colspan="2" class="pb-15 pr-15 border-width-edge-right-bottom">
                        <p class="desc">{{ $prescription->remark }}</p>
                    </td>
                </tr>
            @endif
            <tr>
                <td colspan="3" class="separator"></td>
            </tr>
        @empty

        @endforelse
    @endslot
</x-admin.component.prints.layouts.section>

