@extends('user.components.mails.layout')
@section('content')
    <table>
        @component('user.components.mails.orders.welcome',[
    'title' => 'Hi '.$data->last_name.','
])
        @slot('desc')
                Yay, {{__('common.your_order_is_placed')}}<br><br>
                We have received your <span style="font-weight: 600;">Order #{{$data->id}}</span> on {{ date("d M Y H:m", strtotime($data->created_at)) }}.
                We're excited for you to receive your order and will notify you once it is on its way!
        @endslot

        @endcomponent
        @component('user.components.mails.orders.info',[
    'title' => $data->full_name.' (+'.$data->phone.')',
    'desc'=> $data->full_address,
    'date' => $data->created_at
])@endcomponent

            @if((!$data->orders->isEmpty()))
                @foreach($data->orders as $key => $d)
                    @component('user.components.mails.orders.item',[
    'image' => asset("storage/products/".$d->product->product_images[0] ?? ''),
   'label'  => $d->product_name,
   'type'   => $d->product_type_name,
   'quantity' => $d->quantity,
   'total'  => $d->quantity * $d->unit_price,
]) @endcomponent
                @endforeach
            @endif

            @component('user.components.mails.orders.price', [
    'label' => 'subtotal',
    'value' => '123',
])@endcomponent
            @component('user.components.mails.orders.total', [
               'label' => 'total',
               'value' => '123',
           ])@endcomponent

            @component('user.components.mails.orders.description')
            @slot('content')
                    You can always check the status of your order by clicking on the <span style="font-weight: 600;">Account > My Orders</span> link
                    located at the top of every page. After signing in, your most recent order status
                    will appear on the order history page.<br><br>
                    Thank you for shopping with <a href="{{env('APP_URL')}}">{{env('APP_NAME')}}</a> and we hope that you will visit us
                    again soon.<br><br>
                    Cheers,<br>
                    The Expressionery Team
                @endslot
            @endcomponent

        <tr>
            <td colspan="3" style="border-top:1px solid #e4e2e2">&nbsp;</td>
        </tr>

        <tr>
            <td>
                <img src="https://coloredstrategies.com/mailing/dore.png" />
            </td>
            <td colspan="2">
                <p style="
    margin-bottom: 5px;
    font-size: 14px;
">SAMBOJA GURANTEE</p>
                <p style="
    color: #8f8f8f;
    font-size: 12px;
    padding-bottom: 20px;
    line-height: 1.4;
    margin-bottom: 0;
    margin-top: 0;
">We are available to assist you Mon-Fri 8am-8pm CST. Closed Sat &amp; Sun
                    Call 866-521-6211 or email <span style="
    font-weight: 600;
">service@expressionery.com</span></p>
            </td>
        </tr>

    </table>
@endsection
