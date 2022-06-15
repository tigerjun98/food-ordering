@extends('user.layout')

@section('content')
    <!-- slider -->
    <section class="flat-title-page style2 slider">
        <img class="absolute mark-page" src="{{ asset('assets/user/images/mark/mark-header-04.png') }}" alt="">
        <img class="absolute mark-page2 animate-rotate" src="{{ asset('assets/user/images/mark/mark-header-01.png') }}" alt="">
        <img class="absolute mark-page3" src="{{ asset('assets/user/images/mark/mark-header-02.png') }}" alt="">
        <img class="absolute mark-page4" src="{{ asset('assets/user/images/mark/mark-header-03.png') }}" alt="">
        <img class="absolute mark-page5" src="{{ asset('assets/user/images/mark/mark-header-05.png') }}" alt="">
        <img class="absolute mark-page9" src="{{ asset('assets/user/images/mark/mark-header-06.png') }}" alt="">
        <img class="absolute mark-page8" src="{{ asset('assets/user/images/mark/mark-slider-4.png') }}" alt="">
        <div class="swiper-container mainslider home">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="themes-container">
                            <div class="wrap-heading flat-slider flex">
                                <div class="content">
                                    <h1 class="heading">Discover Collec<span class="s2">t </span><br> and Sell <span class="tf-text style s1">NFT Token.</span>  </h1>
                                    <p class="sub-heading">Etiam sit amet magna risus. Pellentesque laoreet, ligula sit amet lacinia.</p>
                                    <div class="flat-bt-slider flex style2">
                                        <a href="explore.html" class="sc-button style-1 fl-button"><span>Explore More
                                                </span></a>
                                        <a href="connect-wallet.html" class="sc-button style-2 btn-5"><span>Collect NFT
                                                </span></a>
                                    </div>
                                </div>
                                <div class="image">
                                    <img class="mark-slider-01 animate-up" src="{{ asset('assets/user/images/mark/mark-slider-3.png') }}" alt="">
                                    <img class="absolute mark-slider-02 animate-zoom" src="{{ asset('assets/user/images/mark/mark-header-07.png') }}" alt="">
                                    <div class="img-slider">
                                        <div class="box-img flat-img flex">
                                            <div class="img-1"><img src="{{ asset('assets/user/images/mark/mark-slider-1.jpg') }}" alt=""></div>
                                            <div class="img-2"><img src="{{ asset('assets/user/images/mark/mark-slider-2.jpg') }}" alt=""> </div>
                                        </div>
                                        <div class="bg-color"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="themes-container">
                            <div class="wrap-heading flat-slider flex">
                                <div class="content">
                                    <h1 class="heading">Discover Collec<span class="s2">t </span><br> and Sell <span class="tf-text style s1">NFT Token.</span>  </h1>
                                    <p class="sub-heading">Etiam sit amet magna risus. Pellentesque laoreet, ligula sit amet lacinia.</p>
                                    <div class="flat-bt-slider flex style2">
                                        <a href="explore.html" class="sc-button style-1 fl-button"><span>Explore More
                                                </span></a>
                                        <a href="connect-wallet.html" class="sc-button style-2 btn-5"><span>Collect NFT
                                                </span></a>
                                    </div>
                                </div>
                                <div class="image">
                                    <img class="mark-slider-01" src="{{ asset('assets/user/images/mark/mark-slider-3.png') }}" alt="">
                                    <img class="absolute mark-slider-02" src="{{ asset('assets/user/images/mark/mark-header-07.png') }}" alt="">
                                    <div class="img-slider">
                                        <div class="box-img flat-img flex">
                                            <div class="img-1"><img src="{{ asset('assets/user/images/mark/mark-slider-1.jpg') }}" alt=""></div>
                                            <div class="img-2"><img src="{{ asset('assets/user/images/mark/mark-slider-2.jpg') }}" alt=""> </div>
                                        </div>
                                        <div class="bg-color"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="themes-container">
                            <div class="wrap-heading flat-slider flex">
                                <div class="content">
                                    <h1 class="heading">Discover Collec<span class="s2">t </span><br> and Sell <span class="tf-text style s1">NFT Token.</span>  </h1>
                                    <p class="sub-heading">Etiam sit amet magna risus. Pellentesque laoreet, ligula sit amet lacinia.</p>
                                    <div class="flat-bt-slider flex style2">
                                        <a href="explore.html" class="sc-button style-1 fl-button"><span>Explore More
                                                </span></a>
                                        <a href="connect-wallet.html" class="sc-button style-2 btn-5"><span>Collect NFT
                                                </span></a>
                                    </div>
                                </div>
                                <div class="image">
                                    <img class="mark-slider-01" src="{{ asset('assets/user/images/mark/mark-slider-3.png') }}" alt="">
                                    <img class="absolute mark-slider-02" src="{{ asset('assets/user/images/mark/mark-header-07.png') }}" alt="">
                                    <div class="img-slider">
                                        <div class="box-img flat-img flex">
                                            <div class="img-1"><img src="{{ asset('assets/user/images/mark/mark-slider-1.jpg') }}" alt=""></div>
                                            <div class="img-2"><img src="{{ asset('assets/user/images/mark/mark-slider-2.jpg') }}" alt=""> </div>
                                        </div>
                                        <div class="bg-color"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-slide-next"><i class="far fa-long-arrow-right"></i></div>
            <div class="btn-slide-prev"><i class="far fa-long-arrow-left"></i></div>
        </div>
    </section>

    <!-- flat cetagories -->
    <div class="tf-section flat-cetagories style">
        <div class="themes-container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="wrap-cetagories">
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Creative Arts</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img src="{{ asset('assets/user/images/box-item/cetagories-1.png') }}" alt="img">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Virtual World</a></h3>
                                <p class="font-2"> 20+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-2.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">3D Art</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-3.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Books</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-4.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Music</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-5.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Animation</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-6.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Discovery</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-7.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">3D Modeling</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-8.png') }}" alt="">
                        </div>
                        <div class="cetagories flex">
                            <div class="content">
                                <h3><a href="#">Galaxy</a></h3>
                                <p class="font-2"> 50+ Items </p>
                            </div>
                            <img class="" src="{{ asset('assets/user/images/box-item/cetagories-9.png') }}" alt="">
                        </div>

                        <div class="cetagories-button flex">
                            <div class="sc-btn-button">
                                <a href="#" class="sc-button btn-2"><span>View All More
                                        </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat auctions -->
    <div class="flat-auctions live-auctions pb-120 seller style2 ">
        <div class="container">
            <div class="row help-row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2>Live Auctions</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="swiper-container show-shadow carousel auctions">
                        <div class="swiper-wrapper mb-60">
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="sc-card-product sc-card-article blog-article">
                                        <div class="card-media flat-img">
                                            <a href="live-auctions-details.html"><img src="{{ asset('assets/user/images/box-item/auctions-1.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="content">
                                            <h6 class="tags">6 in stock</h6>
                                            <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3>
                                            <div class="meta-info mb-17">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="meta-price flex-one">
                                                <div class="price flex">
                                                    <img class="" src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                                    <div class="title-price"> 2.39 ETH</div>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="featured-countdown">
                                                <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                    <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="sc-card-product sc-card-article blog-article">
                                        <div class="card-media flat-img">
                                            <a href="live-auctions-details.html"><img src="{{ asset('assets/user/images/box-item/auctions-4.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="content">
                                            <h6 class="tags">6 in stock</h6>
                                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                                            <div class="meta-info mb-17">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="meta-price flex-one">
                                                <div class="price flex">
                                                    <img class="" src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                                    <div class="title-price"> 2.39 ETH</div>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="featured-countdown">
                                                <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                    <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="sc-card-product sc-card-article blog-article">
                                        <div class="card-media flat-img">
                                            <a href="live-auctions-details.html"><img src="{{ asset('assets/user/images/box-item/auctions-3.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="content">
                                            <h6 class="tags">5 in stock</h6>
                                            <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3>
                                            <div class="meta-info mb-17">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="meta-price flex-one">
                                                <div class="price flex">
                                                    <img class="" src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                                    <div class="title-price"> 2.39 ETH</div>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="featured-countdown">
                                                <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                    <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item">
                                    <div class="sc-card-product sc-card-article blog-article">
                                        <div class="card-media flat-img">
                                            <a href="live-auctions-details.html"><img src="{{ asset('assets/user/images/box-item/auctions-2.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="content">
                                            <h6 class="tags">4 in stock</h6>
                                            <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3>
                                            <div class="meta-info mb-17">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="meta-price flex-one">
                                                <div class="price flex">
                                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                                    <div class="title-price"> 2.39 ETH</div>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <div class="featured-countdown">
                                                <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                    <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc-btn-button center">
                        <a href="live-auctions.html" class="sc-button btn-2"><span>View All More
                                </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat top seller -->
    <div class="tf-section flat-top-seller">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-1.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-2.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-3.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-4.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-5.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="wrap-seller center">
                        <div class="img-box flat-img">
                            <div class="img-author"><img src="{{ asset('assets/user/images/box-item/top-saller-6.jpg') }}" alt=""></div>
                            <img class="check" src="{{ asset('assets/user/images/icon/icon-check.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="author-profile.html">Liam Olivia</a></h3>
                            <div class="price flex">
                                <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                <div class="title-price fs-16"> 2.39 ETH</div>
                            </div>
                            <div class="button-follow">
                                <a href="#" class="sc-button btn-6"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3 class="title center font fw-6 mt-58 text-t text-color-5">Empowering 230,000+ Businesses with Innovation <span class="text-color-3">Top Creators</span> Digital NFT Marketplace. </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- flat explore -->
    <div class="tf-section flat-explore flat-auctions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section center">
                        <h2>Explore Assets NFTS</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-5.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">6 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-6.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">6 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-3.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">5 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-7.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">4 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-8.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">6 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-9.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">6 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-10.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">5 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="sc-card-product sc-card-article blog-article">
                        <div class="card-media flat-img">
                            <a class="images" href="live-auctions-details.html"><img class="img-item" src="{{ asset('assets/user/images/box-item/auctions-11.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <h6 class="tags">4 in stock</h6>
                            <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3>
                            <div class="meta-info mb-17">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                        <div class="date"> In <span> @ 3d Models</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-price flex-one">
                                <div class="price flex">
                                    <img class="" src="{{ asset('assets/user/images/icon/icon-diamond.svg') }}" alt="">
                                    <div class="title-price"> 2.39 ETH</div>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sc-btn-button center mt-30">
                        <a href="explore.html" class="sc-button btn-2"><span>View All More
                                </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat friendly -->
    <div class="flat-friendly">
        <div class="themes-container2 wrap-friendly">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box-img animate-up">
                        <img src="{{ asset('assets/user/images/mark/friendly-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <ul class="flex">
                        <li>
                            <img class="img-icon" src="{{ asset('assets/user/images/icon/icon-friendly-1.svg') }}" alt="">
                            <div class="title-friendly fs-24 text-color-1">Decentralized Platform.</div>
                        </li>
                        <li>
                            <img class="img-icon" src="{{ asset('assets/user/images/icon/icon-friendly-2.svg') }}" alt="">
                            <div class="title-friendly fs-24 text-color-1">Crowd Meet Wisdom</div>
                        </li>
                        <li>
                            <img class="img-icon" src="{{ asset('assets/user/images/icon/icon-friendly-3.svg') }}" alt="">
                            <div class="title-friendly fs-24 text-color-1">Rewards Meachanism</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- flat collection -->
    <div class="flat-collection seller style2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="heading-section2">
                        <h2 class="fw-5">Popular Collection</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="swiper-container carousel-1 show-slider show-boder">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="fl-blog fl-item2">
                                    <article class="sc-card-article blog-article style-article">
                                        <div class="flat-tabs card-media media">
                                            <div class="content-tab content-img">
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-1.jpg') }}'" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-13.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-17.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <ul class="menu-tab menu-img">
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-2.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-3.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-4.jpg') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post">
                                            <div class="text-article">
                                                <h3><a href="popular-collections.html">Axtronic Electronics VS-10</a></h3>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-nft flex-one">
                                                        <img class="img-nft" src="{{ asset('assets/user/images/icon/icon-nft.svg') }}" alt="">
                                                        <h4>805 Items</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fl-blog fl-item2">
                                    <article class="sc-card-article blog-article style-article">
                                        <div class="flat-tabs card-media media">
                                            <div class="content-tab content-img">
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-5.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-21.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-9.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <ul class="menu-tab menu-img">
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-6.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-7.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-8.jpg') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post">
                                            <div class="text-article">
                                                <h3><a href="popular-collections.html">Axtronic Electronics VS-10</a></h3>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-nft flex-one">
                                                        <img class="img-nft" src="{{ asset('assets/user/images/icon/icon-nft.svg') }}" alt="">
                                                        <h4>805 Items</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fl-blog fl-item2">
                                    <article class="sc-card-article blog-article style-article">
                                        <div class="flat-tabs card-media media">
                                            <div class="content-tab content-img">
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-9.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-13.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-21.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <ul class="menu-tab menu-img">
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-10.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-11.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-12.jpg') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post">
                                            <div class="text-article">
                                                <h3><a href="popular-collections.html">Axtronic Electronics VS-10</a></h3>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author02.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-nft flex-one">
                                                        <img class="img-nft" src="{{ asset('assets/user/images/icon/icon-nft.svg') }}" alt="">
                                                        <h4>805 Items</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fl-blog fl-item2">
                                    <article class="sc-card-article blog-article style-article">
                                        <div class="flat-tabs card-media media">
                                            <div class="content-tab content-img">
                                                <div class="content-inner tab-content">
                                                    <div class=""><img src="{{ asset('assets/user/images/box-item/conlection-1.jpg') }}" alt=""></div>
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <div class="img-item-"><img src="{{ asset('assets/user/images/box-item/conlection-5.jpg') }}" alt=""></div>
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <div class="img-item-"><img src="{{ asset('assets/user/images/box-item/conlection-13.jpg') }}" alt=""></div>
                                                </div>
                                            </div>
                                            <ul class="menu-tab menu-img">
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-2.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-3.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-4.jpg') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post">
                                            <div class="text-article">
                                                <h3><a href="popular-collections.html">Axtronic Electronics VS-10</a></h3>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-nft flex-one">
                                                        <img class="img-nft" src="{{ asset('assets/user/images/icon/icon-nft.svg') }}" alt="">
                                                        <h4>805 Items</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="fl-blog fl-item2">
                                    <article class="sc-card-article blog-article style-article">
                                        <div class="flat-tabs card-media media">
                                            <div class="content-tab content-img">
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-5.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-17.jpg') }}" alt="">
                                                </div>
                                                <div class="content-inner tab-content">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-21.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <ul class="menu-tab menu-img">
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-6.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-7.jpg') }}" alt="">
                                                </li>
                                                <li class="item-title">
                                                    <img src="{{ asset('assets/user/images/box-item/conlection-8.jpg') }}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post">
                                            <div class="text-article">
                                                <h3><a href="popular-collections.html">Axtronic Electronics VS-10</a></h3>
                                            </div>
                                            <div class="meta-info">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/user/images/avatar/avt-01.png') }}" alt="">
                                                        <img class="check" src="{{ asset('assets/user/images/icon/author-check.svg') }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                        <div class="date"> In <span> @ 3d Models</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="item-nft flex-one">
                                                        <img class="img-nft" src="{{ asset('assets/user/images/icon/icon-nft.svg') }}" alt="">
                                                        <h4>805 Items</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next btn-slide-next active"></div>
                        <div class="swiper-button-prev btn-slide-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat brand -->
    <div class="tf-section flat-brand">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="brand-slider">
                        <div class="swiper-container carousel-2">
                            <div class="swiper-wrapper align">
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-01.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo active">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-02.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-03.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-04.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-5.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{ asset('assets/user/images/box-item/brand-6.png') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat help -->
    <div class="flat-help">
        <div class="container">
            <div class="row help-row">
                <div class="col-lg-5 col-md-5">
                    <div class="title-help">
                        <h2>Have Any Help to
                            Newsletter.</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="widget-subcribe">
                        <div class="form-subcribe">
                            <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                                <input name="email" value="" class="email" type="email" placeholder="Enter Your Email..." required>
                                <button id="submit" name="submit" type="submit"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <mask id="mask0_120_16159" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="url(#pattern0)"/>
                                        </mask>
                                        <g mask="url(#mask0_120_16159)"> <rect x="-13" y="-13" width="50" height="50" fill="black"/> </g>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_120_16159" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_120_16159" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                        </defs> </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
