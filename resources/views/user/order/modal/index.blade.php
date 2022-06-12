<div class="popup-subscribe-area mb-5">
    <span>#{{$data->id}}</span>
    <h2 class="text-capitalize">{{ __('common.order_details') }}</h2>
</div>

<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.full_name') }}</p>
    <p class="mb-0 w-70 w-xs-100">{{$data->full_name}}</p>
</div>
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.phone') }}</p>
    <p class="mb-0 w-70 w-xs-100">{{$data->phone}}</p>
</div>
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.shipping_address') }}</p>
    <p class="mb-0 w-70 w-xs-100">{{$data->full_address}}</p>
</div>
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.status') }}</p>
    <span class="badge badge-pill badge-{{\App\Models\OrderDetail::getBadgeList($data->status)}} cc">{{$data->getStatusDescription()}}</span>
    @if($data->status == 0)
        <span class="ml-2 cc text-danger">{{ __('common.expire_in') }} {{date("h:i A", strtotime(''.$data->created_at .'+ 15 minutes'))}}</span>
    @endif
</div>
@if($data->status >= 3 && $data->status <= 5)
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.shipping_details') }}</p>
        <span class="badge badge-pill mr-2 badge-info cc">{{$data->shipping_courier}}</span>
        <a class="text-underline" onclick="linkTrack('{{$data->tracking_no}}')">#{{$data->tracking_no}}</a>
    </div>
@endif
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.created_at') }}</p>
    <p class="mb-0 w-70 w-xs-100">{{date("F d, Y h:i A", strtotime($data->created_at))}}</p>
</div>
@if($data->remark)
<div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc">{{ __('common.remark') }}</p>
    <p class="mb-0 w-70 w-xs-100">{{$data->remark}}</p>
</div>
@endif


@if((!$data->orders->isEmpty()))
    <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc mb-2">{{ __('common.orders') }}</p>
    <div class="order_table">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('common.product') }}</th>
                <th scope="col">{{ __('common.quantity') }}</th>
                <th scope="col">{{ __('common.price') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data->orders as $key => $d)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td scope="row">{{$d->product_name}} ({{$d->product_type_name}})</td>
                    <td scope="row">{{$d->quantity}}</td>
                    <td scope="row">{{ __('common.currency') }} {{number_format($d->quantity * $d->unit_price, 2,'.',',')}}</td>
                </tr>
            @endforeach
            <tr>
                <th colspan="2"></th>
                <td class="text-capitalize">{{ __('common.total_price') }}</td>
                <td class="font-weight-semibold">{{ __('common.currency') }} {{number_format($data->total_price, 2,'.',',')}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endif

@if((!$data->reviews->isEmpty()) && $data->status == 5)
    <div class="overflow-auto">
        <p class="mb-0 w-30 w-xs-100 font-weight-semibold cc mb-2">{{ __('common.reviews') }}</p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('common.product') }}</th>
                <th scope="col">{{ __('common.rating') }}</th>
                <th scope="col">{{ __('common.comment') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data->reviews as $key => $d)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td scope="row">{{$d->product->product_name_en}}</td>
                    <td scope="row">
                        <div class="pro-list-rating">
                            <?php $rate = 5 - $d->rating?>
                            @for ($i = 0; $i < $d->rating; $i++)
                                <i class="yellow fa fa-star text-warning"></i>
                            @endfor
                            @for ($i = 0; $i < $rate; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </div>
                    </td>
                    <td scope="row" class="comments">{{$d->comment}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif

<style>
    .order_table, .review_table{
        overflow: auto;
    }
</style>

