<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class=" ti-close"></i></a>
        <div class="cart-content cc">
            <h3>{{__('common.shopping_cart')}}</h3>
            <div id="cart"></div>
            <div class="cart-checkout-btn">
{{--                <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>--}}
                <a class="no-mrg btn-hover cart-btn-style btn-primary" href="{{route('checkout')}}">{{__('common.checkout')}}</a>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        addCart(null);
    });

    async function addCart(productID= null, qty = null, productTypeID = null){
        let activeVariant;
        let count = 0;

        // else refresh cart only
        if(productID){
            // find active variant
            if(productTypeID){
                activeVariant = productTypeID
            }
            else if(qty != 0){
                $('#variant-'+productID+' > a.active').each(function(i) {
                    activeVariant = this.id
                });
            } else{
                $('#cart-'+productID).remove();
                activeVariant = productID //this is cartID
            }
        } else{
            activeVariant = null
        }

        // update db
        try {
            let response = await $("#cart").sendRequest({
                data: {
                    type: 'addCart',
                    ref: activeVariant,
                    qty,
                    loading:{
                        show: false
                    },
                }
            });

            $('#cart').hide().html(response.html).fadeIn();
            // if not refresh only, is add or remove product, than show alert
            if(activeVariant){
                $("#app-alert").showAlert({
                    status : 'success', message : '{{__('common.cart_added')}}', delay: '2000', response
                });
            }
        } catch(err) {
            console.log(err, 'user.include.layouts.cart');
        }
    }
</script>
