<div class="tf-section flat-login flat-auctions-details pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrap-login">
                    <div class="box-login post" style="padding: 70px 35px 55px;">
                        <img class="absolute mark-page3" src="{{ asset('assets/user/images/mark/mark-header-02.png') }}" alt="">
                        <img class="absolute mark-login1" src="{{ asset('assets/user/images/mark/mark-login-1.png') }}" alt="">
                        <img class="absolute mark-login2 animate-rotate" src="{{ asset('assets/user/images/mark/mark-login-2.png') }}" alt="">
                        <img class="absolute mark-login3" src="{{ asset('assets/user/images/mark/mark-login-3.png') }}" alt="">
                        <div class="heading-login cc">
                            <h2 class="fw-5">{{ $title ?? '' }}</h2>
                            <div class="flex">
                                {{ $desc ?? '' }}
                            </div>
                        </div>
                        {{$body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .flat-auctions-details .post .button-social .sc-button span {
        font-size: 16px;
    }
    .flat-login .wrap-login .box-login .box-button .sc-button {
        height: 57px;
        margin-right: 0;
        margin-bottom: 20px;
        padding: 21px 0;
        text-align: center;
        width: 100%;
        font-size: 14px;
    }
    .flat-login .wrap-login .box-login .box-button {
        padding-left: 60px;
    }
    @media (max-width: 768px){
        .flat-login .wrap-login .box-login .box-button {
            padding-left: 0;
        }
    }
</style>
