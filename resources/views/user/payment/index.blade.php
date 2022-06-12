@extends('user.layout')

@section('content')

    <div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120" id="payment">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2 id="title" class="text-capitalize">{{ __('common.finalize_order_and_redirect_to_payment') }}</h2>
                </div>
                <div class="ds" id="resubmit">
                    <a class="btn" href="javascript:resubmit()">{{__('common.resubmit_payment')}}</a>
                    <a class="text-underline" href="javascript:confirmModal('{{route('order.cancel', $id)}}')">{{__('common.cancel_order')}}</a>
                </div>

                <div class="ds" id="success">
                    <a class="btn text-capitalize" href="{{route('order.')}}">{{__('common.view_order')}}</a>
{{--                    <a class="text-underline" href="javascript:confirmModal('{{route('order.cancel', $id)}}')">Cancel order</a>--}}
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn{
            width: 90%;
            display: block;
            text-align: center;
            line-height: 20px;
            padding: 20px 20px 21px;
            background-color: #262626;
            color: #fff;
            text-transform: capitalize;
            font-size: 14px;
            max-width: 250px;
            margin: 50px auto 20px;
            border-radius: 0;
        }
    </style>
    @component('user.components.layouts.loading') @endcomponent

    <script>
        $(document).ready(function(){
            $('.header-area').addClass('ds');
            $('footer').addClass('ds');
            sayHello();
            start();
        });

        var intervalID;

        // Function to call repeatedly
        async function sayHello(){
            try {
                let response = await $('#payment').sendRequest({
                    url: "{{route('payment.request', $id)}}",
                    loading: {show: false},
                    data: null
                });

                if(response.data.status == 1){
                    clearInterval(intervalID);
                    $('#title').text('{{__('common.payment_success')}}');
                    $('#success').removeClass('ds');
                    $('.snippet').addClass('ds');

                    // window.location.replace(response.redirect);
                }


            } catch(err) {
                clearInterval(intervalID);
                $('#title').text(err.responseJSON.message);
                // $('#desc').text('Resubmit payment to continue paying the order');

                let msg = err.status;

                // payment expired
                if(err.status == 441){
                    $('#resubmit').removeClass('ds');
                }
                console.log(msg);
                {{--setTimeout(function() {--}}
                {{--    window.location.replace('{{route('order.')}}');--}}
                {{--}, 2500);--}}
            }
        }

        async function resubmit(){
            try {
                let response = await $('#payment').sendRequest({
                    url: "{{route('payment.resubmit', $id)}}",
                    loading: {show: false},
                    data: null
                });

            } catch(err) {
                clearInterval(intervalID);
                $('#title').text('Failed!');
                $('#desc').text('Redirecting to order details...');
                setTimeout(function() {
                    {{--window.location.replace('{{route('order.')}}');--}}
                }, 2500);
            }
        }

        // Function to start setInterval call
        function start(){
            intervalID = setInterval(sayHello, 5000);
        }


    </script>
@endsection
