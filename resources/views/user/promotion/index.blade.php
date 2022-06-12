@extends('user.layout')

@section('content')
    @component('user.components.layouts.breadcrumb', ['title' => 'promotions'])@endcomponent
    <div class="blog-main-area pt-90 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @component('user.components.infiniteScroll.page')
                        @slot('filter')
                            <input type="hidden" name="status" id="status">
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <style>
        .blog-img img{
            max-height: 468px;
            object-fit: contain;
        }
    </style>
@endsection
