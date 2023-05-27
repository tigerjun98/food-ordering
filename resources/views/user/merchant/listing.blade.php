@extends('admin.layout')

@section('content')
    <?php $id = new_id() ?>
    <div id="main_row" class="row app-row">
        <div class="col-12">
            <div class="mb-0">
                <h1 class="pr-3 text-capitalize">Merchant listing</h1>
                <div class="top-right-button-container">
                    <x-admin.component.button
                        :action="'back'"
                        :class="'btn-outline-primary btn-lg top-right-button mr-1'"
                    />
                </div>
            </div>

            <div class="mb-3" id="headerSearch">
                <div class="separator mb-4 mt-2"></div>
            </div>
        </div>

        @foreach($data as $item)
            <x-user.pages.merchant.listing-card
                :data="$item"
            />
        @endforeach


        <input type="hidden" value="{{ $id }}" id="orderId">
    </div>
    <div class="app-menu">
        <div class="p-4 h-100">
            <div class="scroll overflow-auto pb-5" id="orderItems">
                <h4 class="border-bottom pb-3 mb-3">Cart</h4>
                <div class="cart-listing" id="cartListing"></div>

            </div>
        </div>
        <a class="app-menu-button d-inline-block d-xl-none" href="#"><i class="simple-icon-options"></i></a></div>
    <script>

        function checkout(){
            $(this).openModal({
                url: '{{ route('order.checkout', $id) }}'
            })
        }

        async function getCartListing(){
            $('#cartListing').setHtml({
                url: '{{ route('order-item.show', $id) }}'
            })
        }

        async function getOrderItems(){
            $('#cartListing').setHtml({
                url: `/order/show/${$('#orderId').val()}`,
            });
        }

        async function updateOrderItem(itemId, type = 'add') {
            const formData = new FormData();
            formData.append('type', type);
            formData.append('menu_item_id', itemId);

            $('#cartListing').setHtml({
                url: `/order-item/update/${$('#orderId').val()}`,
                data: formData,
                method: 'POST'
            });
        }

    </script>
@stop
