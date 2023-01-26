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
                            @foreach($data as $key => $d)
                                <div class="card-dt">
                                    <div class="left">
                                        <div class="avatar" style="background: url('{{ asset("storage/avatar/". Auth::user()->avatar ?? 'default.jpg') }}')"></div>
                                        <div class="body">
                                            <div class="title">By <span>{{ Auth::user()->name }}</span></div>
                                            <div class="desc">Place a deposit <span>@ {{ date("Y-m-d G:i", strtotime($d->created_at))}}</span></div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="icon"></div>
                                        <div class="body">
                                            <div class="title">{{$d->amount}} <span>{{$d->token_explain}}</span></div>
                                            <div class="desc">{{ number_format(\App\Models\Transaction::convertCurrency($d->amount, $d->token)) }} <span>MYR</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-dt{
            border: 1px solid var(--primary-color6);
            background-color: var(--primary-color10);
            padding: 20px 17px;
            position: relative;
            margin-bottom: 15px;
        }
        .card-dt .left{
            display: flex;
        }
        .card-dt .left .avatar{
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-size: contain !important;
        }
        .card-dt .left .body{
            margin-top: 3px;
            margin-left: 10px;
            font-size: 13px;
        }

        .card-dt .left .body .title{
            margin-bottom: 7px;
        }
        .card-dt .left .body .desc{
            font-weight: 500;
            color: #7e7e7e;
        }
        .card-dt .left .body .desc span{
            color: #fff;
        }
        .card-dt .right{
            display: flex;
            position: absolute;
            right: 17px;
            top: 50%;
            transform: translateY(-50%);
        }
        .card-dt .right .icon{
            background: url("/images/icons/money.svg");
            background-size: contain;
            background-repeat: no-repeat;
            width: 22px;
            height: 22px;
            margin: 4px 11px 0 0;
        }

        @media (max-width: 768px) {
            .card-dt .right{
                position: relative;
                right: unset;
                top: unset;
                transform: none;
                margin-top: 18px;
            }
        }

        .card-dt .right .title{
            font-size: 16px;
            margin-bottom: 5px;
        }
        .card-dt .right .title span{
            font-size: 12px;
        }
        .card-dt .right .desc{
            font-size: 14px;
            opacity: 0.7;
        }
        .card-dt .right .desc span{
            font-size: 10px;
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
