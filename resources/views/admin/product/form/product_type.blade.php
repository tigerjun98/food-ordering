<div class="form-group" id="allVariant">

    <div class="mt-4 mb-3 separator"></div>

    @if(isset($data->productType))
        @foreach($data->productType as $key => $item)
{{--            <div class="row mt-2 mb-2" id="{{$item->_id}}">--}}
{{--                <div class="col-10">--}}
{{--                    @component('admin.components.form.text',[ 'value' => $item['product_type_name'],--}}
{{--                        'label' => 'Variant Name', 'name' => "product_type['{{$item->_id}}']",--}}
{{--                        'style' => 'mb-2'--}}
{{--                    ]) @endcomponent--}}
{{--                </div>--}}
{{--                <div class="col-2">--}}
{{--                    @component('admin.components.form.delete_button', ['id' => $item->_id]) @endcomponent--}}
{{--                </div>--}}
{{--            </div>--}}
            @include('admin.product.form.add_product_type')
        @endforeach
    @endif
    <?php $item = ''?>
</div>

<div class="separator mt-2 mb-4"></div>
<div class="text-center">
    <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addNew()">
        <i class="simple-icon-plus btn-group-icon"></i>
        {{ __('common.add_new_variant') }}
    </button>
</div>

<script>

    function removeVariant(id){
        $('#'+id).remove()
    }

    function addNew(){
        let id = Date.now();
        $("#allVariant").append(`@include('admin.product.form.add_product_type')`);
    }
</script>
