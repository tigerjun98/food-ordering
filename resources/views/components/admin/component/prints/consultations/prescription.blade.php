
<table class="prescription-table" style="width: 100%;">
    <thead>
        <tr>
            @if( str_contains( $template->value, 'table-category,')  )
                <th style="text-align: left;">CATEGORY</th>
            @endif
            @if( str_contains( $template->value, 'table-description,')  )
                <th style="text-align: left;">DESCRIPTION</th>
            @endif
            @if( str_contains( $template->value, 'table-qty,')  )
                <th style="text-align: center;">QTY</th>
            @endif
            @if( str_contains( $template->value, 'table-total,')  )
                <th style="text-align: right;">TOTAL</th>
            @endif
        </tr>

        <x-admin.component.prints.separator
            :colspan="4" />
    </thead>

    <tbody>
        @foreach($prescriptions as $prescription)
{{--            the category under medicine--}}
            @if( in_array($prescription->category, array_keys(\App\Models\Medicine::getCategoryList())) && $prescription->combinations )
                @if( str_contains( $template->value, 'table-category,')  )
                    @php
                        if(str_contains( $template->value, 'table-instruction,')){
                            $count = 4;
                        } else{
                            $count = 1;
                        }
                    @endphp

                    <tr>
                        <td rowspan="{{ count($prescription->combinations) + $count }}">
                            <div class="prescription-table-content header">
                                <p>{{ $prescription->category_explain }}</p>
                            </div>
                        </td>
                    </tr>
                @endif

                @foreach($prescription->combinations as $key => $combination)
                    <x-admin.component.prints.consultations.prescriptions.medicine
                        :loop="$loop"
                        :combination="$combination"
                        :template="$template"
                    />
                @endforeach

                @if( str_contains( $template->value, 'table-instruction,')  )
                    <x-admin.component.prints.separator
                        :light="true"
                        :colspan="3" />
                    <x-admin.component.prints.consultations.prescriptions.instruction
                        :template="$template"
                        :prescription="$prescription"
                    />
                @endif

            @else
                <tr>
                    @if( str_contains( $template->value, 'table-category,')  )
                        <td>
                            <div class="prescription-table-content header">
                                <p>{{ $prescription->category_explain }}</p>
                            </div>
                        </td>
                    @endif

                    @if( str_contains( $template->value, 'table-description,')  )
                        <td>
                            <div class="prescription-table-content" style="max-width: 350px;">
                                <p>{{ $prescription->remark }}</p>
                            </div>
                        </td>
                    @endif
                </tr>

            @endif

        <x-admin.component.prints.separator :colspan="4" />

        @endforeach
    </tbody>
</table>

<style>
    .prescription-table tr:first-child td {
        padding-right: 20px;
    }
    .prescription-table tfoot{
        background: #e8f3ff;
    }

    .prescription-table thead tr th{
        color: #a9a9a9;
        font-size: 11px;
        font-weight: 600;
    }

    .prescription-table-content {
        font-size: 11px;
        /*display: grid;*/
        font-weight: 500;
    }

    .prescription-table-content.header {
        font-weight: 700;
    }
    .prescription-table-content h4{
        margin-bottom: 5px;
        font-size: 11px;
    }
    .prescription-table-content.center{
        text-align: center;
    }
    .prescription-table-content p{

    }
    .prescription-table-separator{
        background: #d5d5d5;
        height: 1px;
        margin: 0 20px;
    }
    .prescription-combination{
        margin-bottom: 2px;
        white-space: nowrap;
        display: flex;
    }
    .prescription-combination p{
        display:inline-block;
        white-space: normal;
    }
    .prescription-combination.footer{
        font-weight: 700;
        border: 1px solid #ededed;
        border-width: 1px 0 0 0;
        margin-top: 6px;
        padding-top: 6px;
    }
    .prescription-combination .name{
        width: 70%;
    }
    .prescription-combination .qty{
        text-align: right;
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: right;
    }
    .prescription-table tbody tr td{
        font-size: 11px;
        max-width: 350px;
    }
</style>
