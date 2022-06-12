<ul id="cart">
    @if(isset($cart) && count($cart) > 0)
        @foreach($cart as $key => $item)
            <li class="single-product-cart" id="cart-{{$item->id}}">
                <div class="cart-img">
                    <a href="#">
                        @if(isset($item->product->product_images) && count($item->product->product_images) > 0)
                            <img src="{{ asset("storage/products/".$item->product->product_images[0]) }}" alt="">
                        @endif
                    </a>
                </div>
                <div class="cart-title">
                    <h4><a href="{{route('product.show', $item->product['product_name'])}}">{{$item->product['product_name_'.App::getLocale()]}} ({{$item->productType['product_type_label'] ?? ''}})</a></h4>
                    <span>{{$item->quantity}} × {{__('common.currency')}} {{number_format($item->unit_price, 2)}}</span>
                </div>
                <div class="cart-delete">
                    <a href="javascript:addCart('{{$item->id}}', 0)">×</a>
                </div>
            </li>
        @endforeach
    @endif
</ul>
<div class="cart-total">
    <h4 class="text-capitalize">{{__('common.subtotal')}}: {{__('common.currency')}} <span id="cart_total">0.00</span></h4>
</div>

<script>
    var cart_count = 0;
    var total_price = 0;
    @if(isset($cart) && count($cart) > 0)
    @foreach($cart as $key => $item)
        cart_count++;
        total_price+={{$item->unit_price}}*{{$item->quantity}}
    @endforeach
    @endif
    $('.count-style').text(cart_count)
    $('#cart_total').text(total_price);
</script>

<style>
    .sidebar-cart-active .sidebar-cart-all .cart-content ul li .cart-img a img{
        height: 85px;
    }
    .sidebar-cart-active .sidebar-cart-all .cart-content ul li .cart-title {
        padding-top: 10px;
    }
    .sidebar-cart-active .sidebar-cart-all .cart-content ul li .cart-title h4 {
        font-weight: 600;
    }
</style>
