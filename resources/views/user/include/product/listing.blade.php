@foreach($data as $key => $item)
    <div class="shop-list-wrap mb-70">
        <div class="row">
            <div class="col-32">
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="{{route('product.show', $item->product_name)}}">
                            @if(isset($item->product_images) && count($item->product_images) > 0)
                                <img class="default-img" src="{{ asset("storage/products/".$item->product_images[0]) }}" alt="">
{{--                                @if(count($item->product_images) > 1)--}}
{{--                                    <img class="hover-img" src="{{ asset("storage/products/".$item->product_images[1]) }}" alt="">--}}
{{--                                @endif--}}
                            @endif
                        </a>
{{--                        <div class="shop-list-quickview">--}}
{{--                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-68">
                <div class="shop-list-content ml-20">
                    <h3><a href="{{route('product.show', $item->product_name)}}">{{ $item->{'product_name_'.App::getLocale()} }}</a></h3>
                    <div class="pro-list-rating">
                        @for ($i = 0; $i < $item->rating; $i++)
                            <i class="yellow fa fa-star"></i>
                        @endfor
                    </div>
                    <div class="pro-list-price">
                        <span class="old">RM {{number_format($item->price_0, 2)}}</span>
                        <span>RM {{number_format($item->price_1, 2)}}</span>
                    </div>
                    <p>{{$item->{'product_short_desc_'.App::getLocale()} ?? ''}}</p>

                    <div class="product-list-action" id="variant-{{$item->id}}">
                        @foreach($item->productType as $key2 => $type)
                            <a title="Add to Wishlist" class="{{$key2 == 0 ? 'active' : ''}}" href="javascript:changeVariant('{{$item->id}}', '{{$type->id}}');" id="{{$type->id}}">{{$type->product_type_label}}</a>
                        @endforeach

                        <div class="pro-list-actioncart">
                            <a title="{{__('common.add_to_cart')}}" class="btn-primary" href="javascript:addCart('{{$item->id}}')">{{ __('common.add_to_cart') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<script>
    function changeVariant(productID, id){
        // remove active class
        $('#variant-'+productID+' > a.active').each(function(i) {
            $(this).removeClass('active');
        });
        $('#'+id).addClass('active');
    }
</script>
<style>
    .shop-list-content{
        padding-top: 30px;
    }
    .shop-list-content .product-list-action > a{
        text-transform: uppercase;
    }
    .shop-list-content .product-list-action > a.active {
        border: 2px solid {{ __('css.primary-border') }};
        color: {{ __('css.primary-text') }};
    }
    .shop-list-content .product-list-action > a {
        border: 1px solid rgba(0, 0, 0, 0.1);
        width: 54px;
        height: 54px;
        display: inline-block;
        font-weight: 400;
        margin-right: 10px;
        color: #262626;
        font-size: 18px;
        text-align: center;
        padding-top: 13px;
    }
    .product-wrap .product-img > a img{
        height: 360px;
        object-fit: contain;
        object-position: top;
        background: transparent;
    }
    @media (max-width: 768px){
        .shop-list-content{
            padding-top: 0;
        }
    }
</style>
