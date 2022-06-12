<div class="your-order-area">
    <h3>Your order</h3>
    <div class="your-order-wrap gray-bg-4">
        <div class="your-order-info-wrap">
            <div class="your-order-info">
                <ul>
                    <li>Product <span>Total</span></li>
                </ul>
            </div>
            <div class="your-order-middle">
                <ul>
                    @if(isset($cart) && count($cart) > 0)
                        @foreach($cart as $key => $item)
                            <li>{{$item->product['product_name_en']}} ({{$item->productType['product_type_label'] ?? ''}}) X {{$item->quantity}} <span>RM {{number_format($item->unit_price, 2)}} </span></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="your-order-info order-subtotal">
                <ul>
                    <li>Subtotal<span>RM <span id="total_price"></span></span></li>
                </ul>
            </div>
            <div class="your-order-info order-total">
                <ul>
                    <li>Total <span>RM <span id="grand_total"></span></span></li>
                </ul>
            </div>
        </div>
        <div class="payment-method">
            <h5>Direct Bank Transfer</h5>
            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
        </div>
        <div class="condition-wrap">
            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a></p>
        </div>
    </div>
    <div class="Place-order mt-30">
        <a href="javascript:submit()">Place Order</a>
    </div>
    <small>Place order mean I have read and agree to the website <a href="#">terms and conditions</a><span class="star">*</span></small>
</div>

<script>
    function submit(){
        $('#checkoutBtn').click();
    }

    var total_price = 0;
    @if(isset($cart) && count($cart) > 0)
        @foreach($cart as $key => $item)
        total_price+={{$item->unit_price}}*{{$item->quantity}}
    @endforeach
    @endif

    $('#total_price').text(total_price.toFixed(2));
    $('#grand_total').text(total_price.toFixed(2));
</script>
