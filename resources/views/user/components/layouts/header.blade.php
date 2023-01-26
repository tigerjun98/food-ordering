<section class="flat-title-page inner">
    <img class="absolute mark-page" src="{{ asset('assets/user/images/mark/mark-header-04.png') }}" alt="">
    <img class="absolute mark-page2 animate-rotate" src="{{ asset('assets/user/images/mark/mark-header-01.png') }}" alt="">
    <img class="absolute mark-page3" src="{{ asset('assets/user/images/mark/mark-header-02.png') }}" alt="">
    <img class="absolute mark-page4" src="{{ asset('assets/user/images/mark/mark-header-03.png') }}" alt="">
    <img class="absolute mark-page5" src="{{ asset('assets/user/images/mark/mark-header-05.png') }}" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="heading">{{__('common.'.$title)}}<span class="text-color-3">.</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .heading{
        text-transform: capitalize;
    }
    @media (max-width: 768px){
        .absolute.mark-page4{
            display: block;
            right: -65px;
            bottom: -67px;
        }
        .absolute.mark-page3{
            display: block;
            width: 66px;
        }
        .flat-title-page.inner{
            padding: 137px 30px 75px;
        }
    }
</style>
