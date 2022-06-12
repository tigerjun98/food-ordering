@extends('user.components.mails.layout')
@section('content')
    <table>
        @component('user.components.mails.orders.welcome',[
    'title' => 'Hi '.$data->last_name.','
])
        @slot('desc')
                Yay, {{__('common.your_order_is_placed')}}<br><br>
                We have received your <span style="font-weight: 600;">Order #{{$data->id}}</span> on {{ date("d M Y h:m A", strtotime($data->created_at)) }}.
                We're excited for you to receive your order and will notify you once it is on its way!
                You can find your purchase information below.
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
    'value' => $data->total_price,
])@endcomponent
            @component('user.components.mails.orders.total', [
               'label' => 'total',
               'value' => $data->total_price,
           ])@endcomponent

            @component('user.components.mails.orders.description')
                @slot('content')
                    You can always check the status of your order by clicking on the <span style="font-weight: 600;">Account > My Orders</span> link
                    located at the top of every page. After signing in, your most recent order status
                    will appear on the order history page.<br><br>

                    @if($data->new_user)
                        Your member account has been successfully created. Click on the button below to set your password and get started.<br><br>
                        <a href="{{route('password.reset', 'token='.$data->reset_password_token.'&email='.$data->email)}}" title="START NOW" target="_blank" style="font-size: 14px; line-height: 3; font-weight: 700; letter-spacing: 1px; padding: 15px 40px; text-align:center; text-decoration:none; color:#FFFFFF; border-radius: 50px; background-color:#145388;">
                            SET NOW</a><br><br>
                        If that doesn't work, copy and paste the following link in your browser: <a href="{{route('password.reset', 'token='.$data->reset_password_token.'&email='.$data->email)}}">{{route('password.reset', 'token='.$data->reset_password_token.'&email='.$data->email)}}</a>
                        <br><br>
                    @endif

                    Thank you for shopping with <a href="{{env('APP_URL')}}">{{env('APP_NAME')}}</a> and we hope that you will visit us
                    again soon.<br><br>
                    Cheers,<br>
                    The {{env('APP_NAME')}} Team
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
">SAMBOJA</p>
                <p style="
    color: #8f8f8f;
    font-size: 12px;
    padding-bottom: 20px;
    line-height: 1.4;
    margin-bottom: 0;
    margin-top: 0;
">We are available to assist you Mon-Fri 8am-8pm CST. Closed Sat &amp; Sun
                    Call {{json_decode(\App\Models\Setting::getValue('contact'))->phone}} or email <span style="
    font-weight: 600;
">{{json_decode(\App\Models\Setting::getValue('contact'))->email}}</span></p>
            </td>
        </tr>

    </table>
@endsection
