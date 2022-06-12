@if(!Auth::check())
    <div class="customer-zone mb-30">
        <p class="cart-page-title">Returning customer? <a class="checkout-click" href="#">Click here to login</a></p>
        <div class="checkout-login-info">
            <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing/Shipping details section.</p>
            <form action="#" id="loginForm">
                <input type="hidden" name="type" value="login">

                <input type="text" placeholder="Username / Email" name="name">
                <input type="password" placeholder="Password" name="password">

                <input type="submit" value="Login">
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
        width: 48%;
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
        margin-top: 20px;
        padding: 5px 30px 7px;
        text-transform: capitalize;
        font-weight: 400;
        width: inherit;
    }
</style>
