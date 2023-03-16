<div class="description-wrapper">


    <div class="description-wrapper-left">
        @if( str_contains( $template->value, 'bottom-symptom,') )
            <div class="content">
                <div class="label">{{ trans('label.symptom') }}</div>
                <div class="desc">{{ $consultation->symptom }}</div>
            </div>
        @endif

        @if( str_contains( $template->value, 'bottom-advice,') )
            <div class="content">
                <div class="label">{{ trans('label.advise') }}</div>
                <div class="desc">{{ $consultation->advise }}</div>
            </div>
        @endif

        @if( str_contains( $template->value, 'bottom-internal_remark,') )
            <div class="content">
                <div class="label">{{ trans('label.internal_remark') }}</div>
                <div class="desc">{{ $consultation->internal_remark }}</div>
            </div>
        @endif

    </div>

    @if( str_contains( $template->value, 'bottom-amount,')  )
        <div class="description-wrapper-right">
            <div class="content">
                <div class="label">Total</div>
                <div class="desc">RM 250.00</div>
            </div>
            <div class="content">
                <div class="label">Paid</div>
                <div class="desc">RM 1250.00</div>
            </div>
            <div style="
                border: 1px solid #f1f1f1;
                border-width: 1px 0 0 0;
                height: 1px;
                margin: 5px 0px 3px;
                "></div>
            <div class="content bold">
                <div class="label">Amount due</div>
                <div class="desc">RM 1250.00</div>
            </div>
        </div>
    @endif


</div>
<style>
    .description-wrapper{
        display: flex;
        margin-top: 20px;
        font-size: 12px;
    }
    .description-wrapper-left{
        width: 60%;
    }
    .description-wrapper-left .content{
        margin-bottom: 5px;
    }
    .description-wrapper-right{
        width: 40%;
        padding-left: 35px;
    }
    .description-wrapper-right .content{
        display: flex;
    }
    .description-wrapper-right .bold{
        font-weight: 700;
    }
    .description-wrapper-right .content > div{
        width: 50%;
    }
    .description-wrapper-right .content .desc{
        text-align: right;
    }
    .description-wrapper-left .content .label{
        font-weight: 600;
        margin-bottom: 3px;
    }
</style>
