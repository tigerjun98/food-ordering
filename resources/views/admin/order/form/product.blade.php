<div class="form-group" id="allVariant">
    @if(isset($data->orders) && $data->orders)
        @foreach($data->orders as $key => $item)
            @include('admin.order.form.add_product')
        @endforeach
    @endif
</div>

<div class="separator mt-2 mb-4"></div>

@if(isset($data->orders) && count($data->orders) > 0)

@else
    <div class="text-center">
        <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addNew()">
            <i class="simple-icon-plus btn-group-icon"></i>
            {{ __('common.add_new_variant') }}
        </button>
    </div>
@endif
<?php $item = ''?>
<script>
    var order_total = 0;

    function removeVariant(id){
        $('#'+id).remove()
    }

    async function countPrice(elem){
        let id = elem.id;
        id = id.split("_")[1]

        let prod_id = $('#prod_'+id).val();
        let qty = $('#qty_'+id).val();
        let price = $('#price_'+id).val();

        if(price){
            let total = parseFloat(price).toFixed(2)*qty;
            order_total += total;
            let str = parseFloat(price).toFixed(2) +' x '+ qty +' = RM '+ parseFloat(total).toFixed(2);
            $('#desc_'+id).html(str);

        } else{
            try {
                let data = await $("#publicModal").sendRequest({
                    url: '{{ route( 'admin.order.getProductPrice') }}',
                    data: {
                        '_token'    : '{{ csrf_token() }}',
                        'name'      :  $('#name').val(),
                        'quantity'  :  qty,
                        'product_type_id': prod_id,
                    },
                });

                let total = parseFloat(result).toFixed(2)*qty;
                order_total += total;
                let str = parseFloat(result).toFixed(2) +' x '+ qty +' = RM '+ parseFloat(total).toFixed(2);
                $('#desc_'+id).html(str);

            } catch(err) {
                console.log(err, 'admin.include.modal');
            }
        }
    }


    function addNew(){
        let id = Date.now();
        $("#allVariant").append(`@include('admin.order.form.add_new_product')`);
        $(".select2-single, .select2-multiple").select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:"
        });
    }


</script>
