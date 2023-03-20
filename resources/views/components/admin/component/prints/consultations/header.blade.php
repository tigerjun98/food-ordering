<div class="header-wrapper">

    <div class="header-logo">
        <img style="width: 120px;" src="{{ Vite::image('icons/logo.webp') }}" />
    </div>

    <div class="header-detail">
        <div class="title">Yuan TCM Healthcare Center Sdn. Bhd.</div>
        <div class="desc">202201046385(1492082-D)</div>
        <div class="header-contact">
            <div class="header-contact-left">
                Telephone: Tel: +60348117462
            </div>
            <div class="right">
                Whatsapp: +601120826618
            </div>
        </div>
    </div>

</div>

<style>

    .header-wrapper{
        margin: 0 auto 15px;
        text-align: center;
        border: 1px solid #d5d5d5;
        border-width: 0 0 1px 0;
        padding-bottom: 10px;
    }
    .header-logo{
        margin: 0 auto;
        width: fit-content;
    }
    .header-contact{
        margin: 0 auto;
        width: fit-content;
        display: flex;
        font-size: 11px;
        margin-top: 10px;
    }
    .header-contact-left{
        margin-right: 10px;
    }
    .header-detail .title{
        font-size: 20px;
        font-weight: 700;
    }
    .header-detail .desc{
        font-size: 10px;
        font-weight: 700;
    }
    .header-wrapper-left{
        width: 70%;
    }
    .header-wrapper-right{
        width: 30%;
        text-align: right;
    }
    .header-wrapper-right-content{
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }
</style>
