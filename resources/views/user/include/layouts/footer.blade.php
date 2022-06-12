<footer class="footer-area section-padding-1 bg-black pt-70">
    <div class="container-fluid">
        <div class="row cc">
            <div class="footer-column footer-width-32">
                <div class="footer-widget mb-40">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="/"><img src="{{ asset('/images/logo/logo-white.svg') }}" alt="logo"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <?php $contact= json_decode(\App\Models\Setting::getValue('contact'));?>
                                <li><a href="{{route('contactUs')}}">{{$contact->email ?? ''}}</a></li>
                                <li> {{$contact->phone ?? ''}} </li>
                                <li> {{$contact->address ?? ''}} </li>
                            </ul>
                        </div>
{{--                        <div class="footer-social">--}}
{{--                            <ul>--}}
{{--                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>--}}
{{--                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-22">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>{{ __('common.about_us') }}</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{route('aboutUs')}}">{{ __('common.about_us') }}</a></li>
                            <li><a href="{{route('aboutUs')}}">{{ __('common.brand_story') }}</a></li>
                            <li><a href="{{route('aboutUs')}}">{{ __('common.contact_us') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-22">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>{{ __('common.shop_now') }}</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{route('product')}}">{{ __('common.all_product') }}</a></li>
                            <li><a href="{{route('promotion.')}}">{{ __('common.promotions') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-22">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>{{ __('common.help_and_information') }}</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{route('faq')}}">{{ __('common.refund_policy') }}</a></li>
                            <li><a href="{{route('faq')}}">{{ __('common.payment') }}</a></li>
                            <li><a href="{{route('faq')}}">{{ __('common.delivery') }}</a></li>
                            <li><a href="{{route('faq')}}">{{ __('common.order_processing') }}</a></li>
                            <li><a href="{{route('faq')}}">{{ __('common.privacy_policy') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-31 ds">
                <div class="footer-widget subscribe-right mb-40">
                    <div class="footer-title">
                        <h3>JOIN OUR NEWSLETTER</h3>
                    </div>
                    <div id="mc_embed_signup" class="subscribe-form mt-20">
                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email address..." name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center pt-25 pb-10">
            <p>© Samboja Store All rights reserved </p>
        </div>
    </div>
</footer>
