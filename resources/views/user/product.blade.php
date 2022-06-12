@extends('user.app')

@section('content')
    <div class="breadcrumb-area border-top-2 pt-50 pb-50">
        <div class="custom-container-6">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home </a></li>
                    <li><span> > </span></li>
                    <li><a href="shop-3col.html">Shop Page </a></li>
                    <li><span> > </span></li>
                    <li><a href="shop-3col.html">Fashions </a></li>
                    <li><span> > </span></li>
                    <li class="active">Long shirt dress</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pb-90">
        <div class="custom-container-6">
            <div class="row">
                <div class="col-pro-60">
                    <div class="product-details-tab">
                        <div class="product-dec-right pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/user/images/product-details/b-large-1.jpg">
                                        <img src="{{asset('assets/user/images/product-details/large-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/user/images/product-details/b-large-1.jpg"><i class=" ti-fullscreen "></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/user/images/product-details/b-large-2.jpg">
                                        <img src="{{asset('assets/user/images/product-details/large-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/user/images/product-details/b-large-2.jpg"><i class=" ti-fullscreen "></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/user/images/product-details/b-large-3.jpg">
                                        <img src="{{asset('assets/user/images/product-details/large-3.jpg')}}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/user/images/product-details/b-large-3.jpg"><i class=" ti-fullscreen "></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/user/images/product-details/b-large-4.jpg">
                                        <img src="{{asset('assets/user/images/product-details/large-4.jpg')}}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/user/images/product-details/b-large-4.jpg"><i class=" ti-fullscreen "></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="assets/user/images/product-details/b-large-2.jpg">
                                        <img src="{{asset('assets/user/images/product-details/large-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="assets/user/images/product-details/b-large-2.jpg"><i class=" ti-fullscreen "></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider product-dec-left">
                            <div class="product-dec-small active">
                                <img src="{{asset('assets/user/images/product-details/small-1.jpg')}}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{asset('assets/user/images/product-details/small-2.jpg')}}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{asset('assets/user/images/product-details/small-3.jpg')}}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{asset('assets/user/images/product-details/small-4.jpg')}}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{asset('assets/user/images/product-details/small-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-pro-40">
                    <div class="pl-35 product-details-content quickview-content">
                        <div class="pro-details-next-prv">
                            <a href="#"><i class=" ti-arrow-left "></i></a>
                            <a href="#"><i class=" ti-arrow-right "></i></a>
                        </div>
                        <h2>High Collar Jacket</h2>
                        <div class="quickview-ratting-review">
                            <div class="quickview-ratting-wrap">
                                <div class="quickview-ratting">
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="#"> (1 customer review)</a>
                            </div>
                            <div class="quickview-stock">
                                <span><i class="fa fa-check-circle-o"></i> in stock</span>
                            </div>
                        </div>
                        <h3>$29.00</h3>
                        <div class="quickview-peragraph">
                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra</p>
                        </div>
                        <div class="configurable-wrap">
                            <div class="configurable-color">
                                <span>Color</span>
                                <ul>
                                    <li><a href="#"><span title="Blue" class="swatch-anchor blue">Blue</span></a></li>
                                    <li><a href="#"><span title="Brown" class="swatch-anchor brown">Brown</span></a></li>
                                    <li><a href="#"><span title="Green" class="swatch-anchor green">Green</span></a></li>
                                </ul>
                            </div>
                            <div class="configurable-size">
                                <span>Size</span>
                                <ul>
                                    <li><a href="#"><span title="L" class="swatch-anchor l">L</span></a></li>
                                    <li><a href="#"><span title="M" class="swatch-anchor m">M</span></a></li>
                                    <li><a href="#"><span title="S" class="swatch-anchor s">S</span></a></li>
                                    <li><a href="#"><span title="XL" class="swatch-anchor xl">XL</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="quickview-action-wrap configurable-mrg-dec">
                            <div class="quickview-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                            </div>
                            <div class="quickview-cart">
                                <a title="Add to cart" href="#">Add to cart</a>
                            </div>
                            <div class="quickview-wishlist">
                                <a title="Add to wishlist" href="#"><i class=" ti-heart "></i></a>
                            </div>
                            <div class="quickview-compare">
                                <a title="Add to compare" href="#"><i class="ti-bar-chart-alt"></i></a>
                            </div>
                        </div>
                        <div class="quickview-meta">
                            <span>SKU: <span>REF. LA-103</span></span>
                            <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 03</a></span>
                            <span>Tags: <a href="#">Coat</a>, <a href="#">Dresses</a>, <a href="#">Fashion</a></span>
                        </div>
                        <div class="default-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
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
                        <div class="description-review-topbar nav">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a data-bs-toggle="tab" href="#des-details2">Reviews (1)</a>
                            <a data-bs-toggle="tab" href="#des-details3">About Brand</a>
                            <a data-bs-toggle="tab" href="#des-details4">Shipping & Delivery</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <div class="row">
                                        <div class="col-38">
                                            <div class="pro-details-banner banner-zoom default-overlay">
                                                <a href="#"><img src="{{asset('assets/user/images/product-details/pro-details-banner.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-62">
                                            <div class="product-dec-content">
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                                <ul>
                                                    <li>Maecenas eu ante a elit tempus fermentum. Aliquam <br>commodo tincidunt semper</li>
                                                    <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                                </ul>
                                                <img src="{{asset('assets/user/images/icon-img/pro-dec-icon.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane ">
                                <div class="review-wrapper">
                                    <h2>1 review for High Collar Jacket</h2>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="{{asset('assets/user/images/product-details/client-1.jpg')}}" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h5><span>John Snow</span> - March 14, 2019</h5>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class=" fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="star-box-wrap">
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="Your Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="about-shiping-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                    <ul>
                                        <li>Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper</li>
                                        <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                    </ul>
                                    <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra,.</p>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane">
                                <div class="about-shiping-content">
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu..</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <ul>
                                        <li>Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper</li>
                                        <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                    </ul>
                                    <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra,.</p>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area bg-gray-2 section-padding-8 pt-100 pb-95">
        <div class="container-fluid">
            <div class="section-title-12 mb-50">
                <h2>Related Products</h2>
            </div>
            <div class="related-slider-active owl-carousel">
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/user/images/product/hm-1-pro-2.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/user/images/product/hm-1-pro-2-2.jpg')}}" alt="">
                            <span class="price-dec">-10.1%</span>
                        </a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="product-details.html">Double-breasted coat</a></h3>
                        <div class="product-price">
                            <span class="old">$90.00</span>
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/user/images/product/hm-1-pro-9.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/user/images/product/hm-1-pro-9-2.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="product-details.html">RUF</a></h3>
                        <div class="product-price">
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/user/images/product/hm-1-pro-10.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/user/images/product/hm-1-pro-10-2.jpg')}}" alt="">
                            <span class="price-dec">-25.1%</span>
                        </a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="product-details.html">Donec accumsan auctor iaculis</a></h3>
                        <div class="product-price">
                            <span class="old">$90.00</span>
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/user/images/product/hm-1-pro-11.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/user/images/product/hm-1-pro-11-2.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="product-details.html">Slim-fit dark wash Patrick</a></h3>
                        <div class="product-price">
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img default-overlay mb-20">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/user/images/product/hm-1-pro-11.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/user/images/product/hm-1-pro-11-2.jpg')}}" alt="">
                            <span class="price-dec">-11.1%</span>
                        </a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i><span>Quick Shop</span></a>
                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                        </div>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#">Add to cart</a>
                        </div>
                    </div>
                    <div class="product-content pro-content-pro-details">
                        <h3><a href="product-details.html">Slim-fit cotton shirt</a></h3>
                        <div class="product-price">
                            <span class="old">$90.00</span>
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
