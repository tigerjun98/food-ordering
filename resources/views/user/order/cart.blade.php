@foreach($items as $item)
    <x-user.pages.order.cart-item
        :data="$item"
    />
@endforeach
<div class="bg-white position-fixed border-top pt-3 overflow-hidden" style="bottom: 20px;">
    <h4 class="float-left">
        <div class="text-small text-muted mb-1">Grand total</div>
        <div class="">RM {{ $total }}</div>
    </h4>
    <button
        onclick="checkout()"
        style="margin-left: 62px;" class="btn btn-primary">
        Checkout
    </button>
</div>
