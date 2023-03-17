<div class="info-wrapper">
    <div class="info-wrapper-left">
        @if( str_contains( $template->value, 'info-patient,')  )
            <div class="info-wrapper-title">
                {{ $consultation->patient->full_name }}
            </div>
            <div class="info-wrapper-content">
                <span>Contact:</span> {{ $consultation->patient->phone ?? $consultation->patient->emergency_contact_no }}
            </div>
            <div class="info-wrapper-content">
                <span>Gender:</span> {{ $consultation->patient->gender_explain }}
            </div>
            <div class="info-wrapper-content">
                <span>Nationality:</span> {{ $consultation->patient->nationality_explain }}
            </div>
        @endif
    </div>


    @if( str_contains( $template->value, 'info-detail,')  )
        <div class="info-wrapper-right">
            <div class="info-wrapper-title">
                {{ $template->name_en }}
            </div>
            <div class="info-wrapper-desc">
                <span>Ref No.:</span> {{ $consultation->ref_id }}
            </div>
            <div class="info-wrapper-desc">
                {{ dateFormat($consultation->created_at, 'r') }}
            </div>
        </div>
    @endif

</div>

<style>
    .info-wrapper{
        margin-bottom: 25px;
        display: flex;
    }
    .info-wrapper-left{
        width: 70%;
    }
    .info-wrapper-right{
        width: 30%;
        text-align: right;
    }
    .info-wrapper-title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .info-wrapper-desc{
        font-size: 12px;
        margin-bottom: 3px;
    }
    .info-wrapper-desc span{
        font-weight: bold;
    }
    .info-wrapper-content{
        font-size: 12px;
        margin-bottom: 2px;
    }
    .info-wrapper-content span{
        font-weight: bold;
    }
</style>
