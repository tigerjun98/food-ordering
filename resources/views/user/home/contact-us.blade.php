@extends('user.layout')

@section('content')
    @component('user.components.layouts.breadcrumb', ['title' => 'contact_us'])@endcomponent
    <div class="contact-us-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ms-auto me-auto">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h2>{{ __('desc.contact_us_title') }}</h2>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="contact-form-area">
                                @include('user.include.contact_us.form')
                            </div>
                        </div>

                        <?php $contact= json_decode(\App\Models\Setting::getValue('contact'));?>
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="contact-info-area">
                                <div class="contact-info-top">
                                    <div class="sin-contact-info-wrap mb-25">
                                        <div class="contact-address">
                                            <i class="ti-home"></i>
                                            <span>{{ __('common.headquarter') }}</span>
                                        </div>
                                        <p>{{$contact->address ?? ''}}</p>
                                    </div>
{{--                                    <div class="sin-contact-info-wrap">--}}
{{--                                        <div class="contact-address">--}}
{{--                                            <i class="ti-home"></i>--}}
{{--                                            <span>Johor</span>--}}
{{--                                        </div>--}}
{{--                                        <p>8131 Budd Rd Terre Haute, IN 47805</p>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="contact-info-bottom">
                                    <ul>
                                        <li><i class=" ti-email "></i>{{$contact->email ?? ''}}</li>
                                        <li><i class="ti-mobile"></i>{{$contact->phone ?? ''}}</li>
                                    </ul>
                                    <div class="contact-info-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-page-map pt-100">
            <div id="contact-2"></div>
        </div>
    </div>

@endsection
