<div class="modal-header modal-lg pb-0">
    <div class="mb-2">
        <h1>{{ __('common.order_details') }}</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<div class="modal-body add_modal">
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.full_name') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{$data->full_name}}</p>
    </div>
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.phone') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{$data->phone}}</p>
    </div>
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.address') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{$data->full_address}}</p>
    </div>
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.status') }}</p>
        <span class="badge badge-pill mr-2 badge-{{\App\Models\OrderDetail::getBadgeList($data->status)}} cc">{{ __('common.'.$data->getStatusDescription())}}</span>
        @if($data->status == 0)
            <span class="ml-2 cc text-danger">{{ __('common.expire_in') }} {{date("h:i A", strtotime(''.$data->created_at .'+ 15 minutes'))}}</span>
        @endif
        @if($data->paid_at)
            <span class="badge badge-pill badge-success cc">{{ __('common.paid') }}</span>
        @endif
    </div>
    @if($data->paid_at)
        <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
            <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.paid_at') }}</p>
            <p class="mb-0 w-70 w-xs-100 truncate">{{date("F d, Y h:i A", strtotime($data->paid_at))}}</p>
        </div>
    @endif

    @if($data->status == 3)
        <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
            <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.shipping_details') }}</p>
            <span class="badge badge-pill mr-2 badge-info cc">{{$data->shipping_courier}}</span> #{{$data->tracking_no}}
        </div>
    @endif
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.last_update_at') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{date("F d, Y h:i A", strtotime($data->updated_at))}}</p>
    </div>
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.created_at') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{date("F d, Y h:i A", strtotime($data->created_at))}}</p>
    </div>
    <div class="border-bottom d-flex flex-column flex-md-row pb-2 mb-2">
        <p class="mb-0 w-30 w-xs-100 font-weight-bold cc">{{ __('common.remark') }}</p>
        <p class="mb-0 w-70 w-xs-100 truncate">{{ $data->remark }}</p>
    </div>

    @if((!$data->orders->isEmpty()))
        <div class="overflow-auto">
            <h5 class="card-title mt-4 text-capitalize">{{ __('common.orders') }}</h5>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('common.id') }}</th>
                    <th scope="col">{{ __('common.product') }}</th>
                    <th scope="col">{{ __('common.quantity') }}</th>
                    <th scope="col">{{ __('common.unit_price') }}</th>
                    <th scope="col">{{ __('common.price') }}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data->orders as $key => $d)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td scope="row">{{$d->product_name}} ({{$d->product_type_name}})</td>
                        <td scope="row">{{$d->quantity}}</td>
                        <td scope="row">{{__('common.currency')}} {{number_format($d->unit_price, 2,'.',',')}}</td>
                        <td scope="row">{{__('common.currency')}} {{number_format($d->quantity * $d->unit_price, 2,'.',',')}}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="3"></th>
                    <td>{{ __('common.total_price') }}</td>
                    <td class="font-weight-bold">RM {{number_format($data->total_price, 2,'.',',')}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endif

    @if((!$data->reviews->isEmpty()))
        <div class="overflow-auto">
            <h5 class="card-title mt-4 text-capitalize">{{ __('common.reviews') }}</h5>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('common.product') }}</th>
                    <th scope="col">{{ __('common.rating') }}</th>
                    <th scope="col">{{ __('common.status') }}</th>
                    <th scope="col">{{ __('common.comment') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data->reviews as $key => $d)
                    <tr>
                        <td scope="row">{{$d->product->product_name_en}}</td>
                        <td scope="row">
                            <select class="rating" data-current-rating="{{$d->rating ?? -1}}" data-readonly="true">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td scope="row">
                            <span class="badge badge-pill mr-2 badge-{{$d->status == 1 ? 'success' : 'light'}} cc">{{$d->status == 1 ? __('common.publish') : __('common.hidden')}}</span>
                        </td>
                        <td scope="row" class="comments">{{$d->comment}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif



</div>
<div class="modal-footer justify-content-center">
    <button type="submit" id="submitButton" class="btn btn-primary">{{ __('common.save') }}</button>
    <button type="button" class="btn btn-outline-primary closeModal" data-dismiss="modal">{{ __('common.close') }}</button>
</div>
<script>
    $(".rating").each(function () {
        var current = $(this).data("currentRating");
        var readonly = $(this).data("readonly");
        $(this).barrating({
            theme: "bootstrap-stars",
            initialRating: current,
            readonly: readonly
        });
    });
</script>
<style>
    .comments{
        max-width: 200px;
        white-space: pre-wrap !important;
    }
    .select2-container .select2-selection--single, .select2-container--bootstrap .select2-results__option {
        text-transform: capitalize;
    }
    .has-float-label label, .has-float-label > span:last-of-type{
        text-transform: capitalize;
    }
    .has-float-label{
        margin-bottom: 2rem;
        margin-top: 1rem;
    }
    .modal .modal-header{
        display: block;
    }
    .nav-tabs.separator-tabs {
        border-bottom: 1px solid #fff;
    }
    .nav-tabs.separator-tabs .nav-link.active::before, .nav-tabs.separator-tabs .nav-item.show .nav-link::before {
        height: 3px;
        bottom: -2px;
    }
    .nav-tabs .nav-item {
        text-transform: uppercase;
    }

</style>
