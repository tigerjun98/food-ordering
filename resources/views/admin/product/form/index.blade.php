@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'product_details',
    'nav'   => ['details_en', 'details_cn', 'variant', 'images', 'prices', 'commission'],
    'submitLink' => route('admin.product.update', $id)
])

    @slot('commission')
        @include('admin.product.form.commission')
    @endslot

    @slot('details_en')
        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'product_name', 'name' => 'product_name_en'
               ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
               'label' => 'short_description', 'name' => 'product_short_desc_en'
           ]) @endcomponent

        @component('admin.components.form.desc',[ 'data' => $data,
                 'label' => 'description', 'name' => 'product_desc_en', 'uploadAssetLink' => 'admin.product.uploadEditorContent'
             ]) @endcomponent

        @component('admin.components.form.text',[ 'style' => 'mb-1', 'data' => $data,
        'label' => 'variant_title', 'name' => 'product_variant_name_en'
    ])
        @endcomponent

        @component('admin.components.form.select',[ 'data' => $data,
          'label' => 'status', 'name' => 'status', 'option'=> \App\Models\Product::getStatusList(),
     ]) @endcomponent

    @endslot

    @slot('details_cn')
        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'product_name', 'name' => 'product_name_cn'
               ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
               'label' => 'short_description', 'name' => 'product_short_desc_cn'
           ]) @endcomponent

        @component('admin.components.form.desc',[ 'data' => $data,
                 'label' => 'description', 'name' => 'product_desc_cn', 'uploadAssetLink' => 'admin.product.uploadEditorContent'
             ]) @endcomponent

        @component('admin.components.form.text',[ 'style' => 'mb-1', 'data' => $data,
           'label' => 'variant_title', 'name' => 'product_variant_name_cn'
       ])
        @endcomponent

    @endslot

    @slot('variant')
        @include('admin.product.form.product_type')
    @endslot

    @slot('prices')
        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'normal_price', 'name' => 'price_0'
               ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                  'label' => 'member_price', 'name' => 'price_1'
              ]) @endcomponent

{{--        @component('admin.components.form.text',[ 'data' => $data,--}}
{{--                  'label' => 'Tier 3 Price', 'name' => 'price_3'--}}
{{--              ]) @endcomponent--}}

{{--        @component('admin.components.form.text',[ 'data' => $data,--}}
{{--                  'label' => 'Tier 4 Price', 'name' => 'price_4'--}}
{{--              ]) @endcomponent--}}

{{--        @component('admin.components.form.text',[ 'data' => $data,--}}
{{--                'label' => 'Big price', 'name' => 'price_0'--}}
{{--            ]) @endcomponent--}}

    @endslot



    @slot('images')
        @component('admin.components.form.dropzone', [
        'submitUrl'   => route('admin.product.uploadImage', $id),
        'deleteUrl'   => route('admin.product.deleteDropzoneImage', $id)
     ])
            @slot('data')
                @if(isset($data->product_images))
                    @foreach($data->product_images as $key => $item)
                        @component('admin.components.dropzone.preview', [
                           'item'    => $item,
                           'path'   => 'products'
                        ])
                        @endcomponent
                    @endforeach
                @endif
            @endslot
        @endcomponent
    @endslot
@endcomponent
