@if(!Auth::check())
    <div class="customer-zone mb-30">
        <p class="cart-page-title">{{__('common.returning_customer')}} <a class="checkout-click" href="#">{{__('common.click_here_to_login')}}</a></p>
        <div class="checkout-login-info">
            <p>{{__('common.shopped_before')}}. {{__('common.new_customer')}}.</p>
            <form action="#" id="loginForm" class="row">
                <div class="col-6">
                    <input type="text" placeholder="{{__('common.username_or_email')}}" name="name" class="mb-2">
                </div>
                <div class="col-6">
                    <input type="password" placeholder="{{__('common.password')}}" name="password" class="mb-2">
                    <a class="text-extra-small" href="{{route('forgetPassword')}}">{{__('common.first_time_login')}} / {{__('common.lost_your_password')}}</a>
                </div>
                <input type="hidden" name="type" value="login">
                <div class="col-3">
                    <input type="submit" value="{{__('common.login')}}">
                </div>
            </form>
        </div>
    </div>
@endif

<script>
    $('#loginForm').on('submit',async function(e){
        e.preventDefault();
        try {
            let result = await $(this).sendRequest({
                data: $(this).serialize(),
                url: "{{route('ajaxRequest')}}",
                loading: {fullScreen: true}
            });
            location.reload();
        } catch(err) {
            console.log(err);
        }
    });
</script>
<style>
    .checkout-login-info form input[type="text"], .checkout-login-info form input[type="password"]{
        height: 50px;
        background-color: transparent;
        width: 100%;
        color: #777;
        font-size: 14px;
        padding: 0 20px;
        margin-right: 20px;
    }
    .checkout-login-info form input[type="submit"] {
        background: #262626 none repeat scroll 0 0;
        border: medium none;
        color: #fff;
        height: 50px;
        margin-left: 0;
        padding: 5px 30px 7px;
        text-transform: capitalize;
        font-weight: 400;
        width: inherit;
    }
</style>
