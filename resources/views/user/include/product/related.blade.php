<div class="related-product-area bg-gray-2 section-padding-8 pt-100 pb-95">
    <div class="container-fluid">
        <div class="section-title-12 mb-50">
            <h2 class="text-capitalize">{{ __('common.related_products') }}</h2>
        </div>
        <div class="related-slider-active owl-carousel">
            @foreach($related as $key => $item)
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="{{route('product.show', $item->product_name)}}">
                            @if(isset($item->product_images) && count($item->product_images) > 0)
                                <img class="default-img" src="{{ asset("storage/products/".$item->product_images[0]) }}" alt="">
                                @if(count($item->product_images) > 1)
                                    <img class="hover-img" src="{{ asset("storage/products/".$item->product_images[1]) }}" alt="">
                                @endif
                            @endif
                            {{--                                <span class="price-dec">-10.1%</span>--}}
                        </a>
                        <div class="product-action">
                            {{--                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>--}}
                            {{--                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
                            {{--                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
                        </div>
                        <div class="product-action-2">
                            <a title="{{__('common.add_to_cart')}}" href="javascript:addCart('{{$item->id}}',1,'{{$item->productType[0]->id}}')">{{__('common.add_to_cart')}}</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="{{route('product.show',$item->product_name)}}">{{$item->product_name_en}}</a></h3>
                        <div class="product-price">
                            <span class="old">{{__('common.currency')}} {{number_format($item->price_0, 2)}}</span>
                            <span>{{__('common.currency')}} {{number_format($item->price_1, 2)}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
