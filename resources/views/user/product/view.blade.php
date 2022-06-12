@extends('user.layout')

@section('meta')
    <?php
        $components = parse_url(\Illuminate\Support\Facades\Request::fullUrl());
        parse_str($components['query'] ?? 'referral=origin', $results);
    ?>
    {!! Meta::tag('url', \Illuminate\Support\Facades\Request::fullUrl()); !!}
    {!! Meta::tag('title', $data->{'product_name_'.App::getLocale()}. ' - '. env('APP_NAME')) !!}
    {!! Meta::tag('description', 'Referred By '.(ucfirst($results['referral'] ?? 'origin'))) !!}
    @if(isset($data->product_images[0]))
        {!! Meta::tag('image', asset("storage/products/".$data->product_images[0])) !!}
    @endif

    {!! Meta::tag('image', asset('images/default-logo.png')) !!}
@endsection

@section('content')
    @component('user.components.layouts.breadcrumb_line', [
        'items' => [
            ['product', route('product')]
        ],
        'title' => $data->product_name_en
    ])
    @endcomponent
    <div class="product-details-area pb-90">
        <div class="custom-container-6">
            <div class="row">
                <div class="col-pro-60">
                    <div class="product-details-tab">
                        <div class="product-dec-right pro-dec-big-img-slider">
                            @foreach($data->product_images as $key => $image)
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset("storage/products/".$image) }}">
                                            <img src="{{ asset("storage/products/".$image) }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset("storage/products/".$image) }}"><i class=" ti-fullscreen "></i></a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-dec-slider product-dec-left">
                            @foreach($data->product_images as $key => $image)
                                <div class="product-dec-small {{$key == 0 ? 'active' : ''}}">
                                    <img src="{{ asset("storage/products/".$image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-pro-40">
                    <div class="pl-35 product-details-content quickview-content">
                        <h2>{{ $data->{'product_name_'.App::getLocale()} }}</h2>
                        <div class="quickview-ratting-review">
                            <div class="quickview-ratting-wrap">
                                <div class="quickview-ratting">
                                <?php $rate = 5 - $data->rating?>
                                    @for ($i = 0; $i < $data->rating; $i++)
                                        <i class="yellow fa fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < $rate; $i++)
                                            <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <a href="#">({{$data->total_review}} {{ __('common.customer_review') }})</a>
                            </div>

                            @if($data->status == 0)
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> {{ __('common.in_stock') }}</span>
                                </div>
                            @endif
                        </div>
                        <h3>RM {{$data->price_1}}</h3>
                        <div class="quickview-peragraph">
                            <p>{{$data->{'product_short_desc_'.App::getLocale()} }}</p>
                        </div>
                        <div class="configurable-wrap">
                            <div class="configurable-size">
                                <span>{{$data->{'product_variant_name_'.App::getLocale()} }}</span>
                                <ul>
                                    @foreach($data->productType as $key2 => $type)
                                        <li id="variant-{{$data->id}}">
                                            <a class="{{$key2 == 0 ? 'active' : ''}}" id="{{$type->id}}" href="javascript:changeVariant('{{$data->id}}', '{{$type->id}}');">
                                                <span title="{{ucfirst($type->product_type_name)}}" class="swatch-anchor l">{{$type->product_type_label}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                                <script>
                                    function changeVariant(productID, id){
                                        // remove active class
                                        $('#variant-'+productID+' > a.active').each(function(i) {
                                            $(this).removeClass('active');
                                        });
                                        $('#'+id).addClass('active');
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="quickview-action-wrap configurable-mrg-dec">
                            <div class="quickview-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2" id="qtyval">
                                </div>
                            </div>
                            <div class="quickview-cart">
                                <a title="Add to cart" href="javascript:addCart('{{$data->id}}', $(`#qtyval`).val())">{{ __('common.add_to_cart') }}</a>
                            </div>
{{--                            <div class="quickview-wishlist">--}}
{{--                                <a title="Add to wishlist" href="#"><i class=" ti-heart"></i></a>--}}
{{--                            </div>--}}
                        </div>
{{--                        <div class="quickview-meta">--}}
{{--                            <span>SKU: <span>REF. LA-103</span></span>--}}
{{--                            <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 03</a></span>--}}
{{--                            <span>Tags: <a href="#">Coat</a>, <a href="#">Dresses</a>, <a href="#">Fashion</a></span>--}}
{{--                        </div>--}}
                        <div class="default-social a2a_kit a2a_kit_size_32">
                            <ul>
                                <li><a class="a2a_button_facebook facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="a2a_button_facebook_messenger messenger" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="a2a_button_whatsapp" href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a class="a2a_button_telegram" href="#"><i class="fa fa-telegram"></i></a></li>
                                <li><a class="a2a_button_twitter twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="a2a_button_wechat twitter" href="#"><i class="fa fa-weixin"></i></a></li>
                                <li><a class="a2a_button_copy_link" href="#"><i class="fa fa-files-o"></i></a></li>
                            </ul>
                            <style>
                                .default-social ul li a i {
                                    padding-left: 7px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-100">
        <div class="custom-container-6">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav text-capitalize">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">{{ __('common.description') }}</a>
                            <a data-bs-toggle="tab" href="#des-details2">{{ __('common.review') }}</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                   {!!$data->{'product_desc_'.App::getLocale()} !!}
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                               @include('user.product.include.reviews')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.include.product.related')
    <style>
        .configurable-wrap .configurable-size > span {
            text-transform: uppercase;
        }
        .quickview-content .quickview-action-wrap .quickview-cart a {
            background: {{ __('css.primary-color') }};
        }
        .description-review-topbar a.active {
            background: {{ __('css.primary-color') }};
        }
        .configurable-wrap .configurable-size ul li a span.swatch-anchor {
            display: inline-block;
            font-weight: 400;
            border: 1px solid {{ __('css.light-border') }};
            padding: 8px;
            color: {{ __('css.primary-text') }};
            width: 43px;
            height: 43px;
            text-align: center;
            text-transform: uppercase;
        }

        .configurable-wrap .configurable-size ul li a.active span.swatch-anchor {
            background: {{ __('css.primary-color') }};
            color: #fff;
        }
    </style>

    <script>
        @if(Auth::guard('user')->check())
        var url = new URL(window.location.href);
        var ref = url.searchParams.get("referral");
        if(!ref){
            window.history.pushState('page2', 'Title', window.location.href+'?referral={{Auth::guard('user')->check() ? Auth::user()->name : 'origin'}}');
        }
        @endif
    </script>
@endsection
