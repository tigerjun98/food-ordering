@extends('user.layout')

@section('content')
    @component('user.components.layouts.header', ['title' => 'history'])@endcomponent

    <div class="tf-section dark-style flat-auctions live-auctions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap-box explore-1 flex-one mb-30">
{{--                        <div class="seclect-box style-1 flex text-t font">--}}
{{--                            <div id="status_opt" class="dropdown">--}}
{{--                                <input type="hidden" name="status" id="status_opt-val">--}}
{{--                                <a href="#" class="btn-selector nolink ">All categories</a>--}}
{{--                                <ul>--}}
{{--                                    <li id="status_opt-art"><span>Art</span></li>--}}
{{--                                    <li class="active" id="status_opt-music"><span>Music</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="seclect-box style-2 box-right flex">--}}
{{--                            <div class="title-item btn-selector nolink fw-6 font fs-16"><span class="text-color-3">{{$option['total']}}</span> Transaction Found</div>--}}
{{--                            <div class="widget search">--}}
{{--                                <form action="#" method="get" role="search" class="search-form">--}}
{{--                                    <input type="search" class="search-field"--}}
{{--                                           placeholder="Project Name..." value="" name="s"--}}
{{--                                           title="Search for" required="">--}}
{{--                                    <button class="search-icon search-submit" type="submit" title="Search"></button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-12">
                    <div class="post">
                        <div class="flat-tabs themesflat-tabs">
                            <ul class="bid-history-list list-1">
                                @foreach($data as $key => $d)
                                    <li class="">
                                        <div class="content">
                                            <div class="meta-info flex-one style">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ asset("storage/avatar/". Auth::user()->avatar ?? 'default.jpg') }}" alt="">
                                                        <img class="check" src="{{asset('assets/user/images/icon/author-check.svg')}}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <h5> By<a class="text-color-3" href="#"> {{ Auth::user()->name }}</a> </h5>
                                                        <div class="date"> Place A deposit <span class="text-color-6"> @ {{ date("Y-m-d G:i", strtotime($d->created_at))}}</span></div>
                                                    </div>
                                                </div>
                                                <div class="flat-price">
                                                    <div class="price flex">
                                                        <img class="" src="{{asset('assets/user/images/icon/icon-price.svg')}}" alt="">
                                                        <div class="title-price"> {{$d->amount}} {{$d->token_explain}}
                                                            <p class="font-2"> = RM {{ number_format(\App\Models\Transaction::convertCurrency($d->amount, $d->token)) }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="action">--}}
{{--                                            <div class="action-btn">--}}
{{--                                                <span class="action-btn-icon"></span>--}}
{{--                                                <span>Update</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .action{
            display: flex;
        }
        .action-btn{
            display: flex;
        }
        .action-btn span{
            display: block;
        }
        .action-btn-icon{
            background-size: contain;
            height: 20px;
            width: 20px;
        }
    </style>
    <script>
        function filterStatus(status, val){
            $("a.status-tab").removeClass("active");
            $("a.status-tab."+status).addClass("active");
            $('#status').val(val);
            $.updateTableFunction()
        }
    </script>
@endsection
