@extends('user.layout')

@section('content')

    @component('user.components.layouts.header', ['title' => 'about_us'])@endcomponent

    <div class="tf-section flat-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="wrap-img">
                        <div class="media">
                            <img class="img-1" src="{{ asset('assets/user/images/box-item/about-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="post">
                        <h4 class="sub-title fs-18 font text-color-4">About Us</h4>
                        <h2 class="title-about text-t">That's why we're on list of favorites.</h2>
                        <div class="title-text fs-18 fw-4 text-color-3">Proin massa dui, maximus vitae massa in, ullamcorper euismod justo. Ut condimentum ipsum.</div>
                        <p class="text-1">Proin massa dui, maximus vitae massa in, ullamcorper euismod justo. Ut condimentum ipsum id nibh suscipit, eget iaculis
                            mi mollis. Proin quis turpis odio. Suspendisse non ex a leo lobortis tincidunt condimentum quis sem. Sed ornare nunc vel mi eleifend.</p>
                        <div class="box">
                            <div class="media">
                                <img class="img-1" src="{{ asset('assets/user/images/box-item/about-2.jpg') }}" alt="">
                                <img class="img-2" src="{{ asset('assets/user/images/box-item/about-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flat-counter tf-counter">
        <div class="container">
            <div class="row row-counter">
                <div class="col-lg-7 col-md-12">
                    <div class="wrap">
                        <h2 class="text-t">230,00+ Businesses
                            with <span class="text-color-3">trusted clients.</span></h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box box-1">
                        <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number number-one" data-speed="2000" data-to="31" data-inviewport="yes"></div>
                            <p class="heading">Website Visitor Per Day Using Out Tools.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="counter-box box-2">
                        <div class="content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number number-two" data-speed="2000" data-to="2" data-inviewport="yes"></div>
                            <p class="heading">Downloaded Total In 2018-2022.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flat-about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="flat-tabs themesflat-tabs">
                        <ul class="menu-tab tab-title">
                            <li class="item-title ">
                                <h3 class="inner">Great Strategy</h3>
                            </li>
                            <li class="item-title active">
                                <h3 class="inner"> Amazing Ideas </h3>
                            </li>
                            <li class="item-title">
                                <h3 class="inner">Creative Deals</h3>
                            </li>
                            <li class="item-title">
                                <h3 class="inner"> Quick Support</h3>
                            </li>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner tab-content">
                                <div class="provenance">
                                    <p>Maecenas pharetra sem ut metus dignissim, ac tincidunt purus fringilla. Integer ultrices enim at enim ultricies pharetra.
                                        Nam mollis pretium mi, at sagittis neque blandit id. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Phasellus tempor commodo velit sit amet porttitor. Integer id lectus ut arcu posuere pharetra id
                                        eget lorem. Suspendisse a sollicitudin turpis, ut fringilla lorem. Nam tincidunt libero vel gravida porttitor.</p>

                                    <p> Maecenas pharetra sem ut metus dignissim, ac tincidunt purus fringilla. Integer ultrices enim at enim ultricies pharetra.
                                        Nam mollis pretium mi, at sagittis neque blandit id. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Phasellus tempor commodo velit sit amet porttitor. Integer id lectus ut arcu posuere pharetra id
                                        eget lorem. Suspendisse a sollicitudin turpis, ut fringilla lorem. Nam tincidunt libero vel gravida porttitor.</p>
                                </div>
                            </div>
                            <div class="content-inner tab-content">
                                <div class="provenance">
                                    <p>Maecenas pharetra sem ut metus dignissim, ac tincidunt purus fringilla. Integer ultrices enim at enim ultricies pharetra.
                                        Nam mollis pretium mi, at sagittis neque blandit id. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Phasellus tempor commodo velit sit amet porttitor. Integer id lectus ut arcu posuere pharetra id
                                        eget lorem. Suspendisse a sollicitudin turpis, ut fringilla lorem. Nam tincidunt libero vel gravida porttitor.</p>

                                    <p> Maecenas pharetra sem ut metus dignissim, ac tincidunt purus fringilla. Integer ultrices enim at enim ultricies pharetra.
                                        Nam mollis pretium mi, at sagittis neque blandit id. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Phasellus tempor commodo velit sit amet porttitor. Integer id lectus ut arcu posuere pharetra id
                                        eget lorem. Suspendisse a sollicitudin turpis, ut fringilla lorem. Nam tincidunt libero vel gravida porttitor.</p>
                                </div>
                            </div>
                            <div class="content-inner tab-content">
                                <div class="provenance">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="content-inner tab-content">
                                <div class="provenance">
                                    <p>Maecenas pharetra sem ut metus dignissim, ac tincidunt purus fringilla. Integer ultrices enim at enim ultricies pharetra.
                                        Nam mollis pretium mi, at sagittis neque blandit id. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Phasellus tempor commodo velit sit amet porttitor. Integer id lectus ut arcu posuere pharetra id
                                        eget lorem. Suspendisse a sollicitudin turpis, ut fringilla lorem. Nam tincidunt libero vel gravida porttitor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flat blog -->
    <div class="tf-section flat-blog home3 page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="heading-section style center">
                        <h2 class="fw-5">Latest News & Blogs</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="fl-blog fl-item2">
                        <article class="sc-card-article blog-article">
                            <div class="card-media">
                                <a href="blog-details.html"><img class="img-item" src="{{ asset('assets/user/images/blog/blog-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post">
                                <div class="text-article">
                                    <h3><a href="blog-details.html">Axtronic Electronics VS-10</a></h3>
                                    <p>Proin massa dui, maximus vitae massa in, ullamcorper euismod justo. </p>
                                </div>
                                <div class="meta-info style">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/user/images/box-item/top-saller-3.jpg') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                            <div class="date"> Date <span class="text-color-6"> 04/10/2022</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="fl-blog fl-item2">
                        <article class="sc-card-article blog-article">
                            <div class="card-media">
                                <a href="blog-details.html"><img class="img-item" src="{{ asset('assets/user/images/blog/blog-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="post">
                                <div class="text-article">
                                    <h3><a href="blog-details.html">Axtronic Electronics VS-10</a></h3>
                                    <p>Proin massa dui, maximus vitae massa in, ullamcorper euismod justo. </p>
                                </div>
                                <div class="meta-info style">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/user/images/box-item/top-saller-2.jpg') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                            <div class="date"> Date <span class="text-color-6"> 04/10/2022</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="fl-blog fl-item2">
                        <article class="sc-card-article blog-article">
                            <div class="card-media">
                                <a href="blog-details.html"><img class="img-item" src="{{ asset('assets/user/images/blog/blog-3.jpg') }}" alt=""></a>
                            </div>
                            <div class="post">
                                <div class="text-article">
                                    <h3><a href="blog-details.html">Axtronic Electronics VS-10</a></h3>
                                    <p>Proin massa dui, maximus vitae massa in, ullamcorper euismod justo. </p>
                                </div>
                                <div class="meta-info style">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/user/images/box-item/top-saller-1.jpg') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                            <div class="date"> Date <span class="text-color-6"> 04/10/2022</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
