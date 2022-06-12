<div class="form-group" id="allVariant">
    @if(isset($data->orders) && $data->orders)
        @foreach($data->orders as $key => $item)
            @include('admin.order.form.add_product')
        @endforeach
    @endif
</div>

<div class="separator mt-2 mb-4"></div>
<div class="text-center">
    <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addNew()">
        <i class="simple-icon-plus btn-group-icon"></i>
        Add New Variant
    </button>
</div>
<?php $item = ''?>
<script>
    var order_total = 0;

    function removeVariant(id){
        $('#'+id).remove()
    }

    function countPrice(elem){
        let id = elem.id;
        id = id.split("_")[1]
        let prod_id = $('#prod_'+id).val();
        let qty = $('#qty_'+id).val();
        $.showLoading();
        $.ajax({
            url: '{{ route( 'admin.order.getProductPrice') }}',
            type: 'POST',
            data: {
                '_token'    : '{{ csrf_token() }}',
                'name'      :  $('#name').val(),
                'quantity'  :  qty,
                'product_type_id': prod_id,
            },
            success: function( result ) {
                $.hideLoading();
                let total = parseFloat(result).toFixed(2)*qty;
                order_total += total;
                let str = parseFloat(result).toFixed(2) +' x '+ qty +' = RM '+ parseFloat(total).toFixed(2);
                $('#desc_'+id).html(str);
            },
            error: function(res) {
                $.hideLoading();
                showAlert(res)
            }
        });
    }


    function addNew(){
        let id = Date.now();
        $("#allVariant").append(`@include('admin.order.form.add_product')`);
        $(".select2-single, .select2-multiple").select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:"
        });
    }


</script>
