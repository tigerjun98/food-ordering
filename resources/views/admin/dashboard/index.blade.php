@extends('admin.layout')

@section('title', 'Page Title')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>

{{--            <div class="col-12">--}}
{{--                <div class="row first_row">--}}
{{--                    <div class="col-md-12 col-lg-4 mb-4">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="head mb-2">--}}
{{--                                    <h6 class="mt-2 text-medium cc">Total Profit</h6>--}}
{{--                                    <h5 class="lead font-weight-semibold">--}}
{{--                                        RM 123--}}
{{--                                    </h5>--}}
{{--                                    <h5 class="text-small font-weight-semibold d-flex">--}}
{{--                                        <div class="text-primary mr-3">--}}
{{--                                            <i class="iconsminds-up-1"></i>--}}
{{--                                            RM 123--}}
{{--                                            <span class="text-extra-small ml-1 cc">Tpday</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="text-primary mr-3">--}}
{{--                                            <i class="iconsminds-up-1"></i>--}}
{{--                                            RM 123--}}
{{--                                            <span class="text-extra-small ml-1 cc">Tpday</span>--}}
{{--                                        </div>--}}
{{--                                    </h5>--}}
{{--                                </div>--}}
{{--                                <div class="content d-flex flex-wrap mt-2 border-top pt-3">--}}
{{--                                    <a class="mb-2 mr-4 hover" href="#">--}}
{{--                                        <p class="mb-1 font-weight-semibold text-small mr-2 cc">123</p>--}}
{{--                                        <p class="mb-0 text-small">--}}
{{--                                            RM 123}</p>--}}
{{--                                    </a>--}}
{{--                                    <a class="mb-2 mr-4 hover" href="#">--}}
{{--                                        <p class="mb-1 font-weight-semibold text-small mr-2 cc">123123</p>--}}
{{--                                        <p class="mb-0 text-small">--}}
{{--                                            RM 123</p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex flex-wrap mt-2 border-top pt-3 mb-3">--}}
{{--                                    <a href="#" class="text-underline hover mr-2">123123</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

    </div>
@endsection

@section('script')
<script>

</script>
@endsection



