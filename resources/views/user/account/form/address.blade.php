<div class="myaccount-content">
    <div class="account-details-form">
        @component('user.components.form.index', ['route' => route('account.updateAddress'), 'id' => true])
            @slot('body')
                <div class="billing-info-wrap mr-100">
                    <h3>{{__('common.billing_and_shipping_address')}}</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'value' => $data->address['first_name'] ?? '',
                               'label' => 'first_name', 'name' => 'first_name'
                            ]) @endcomponent
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'value' => $data->address['last_name'] ?? '',
                               'label' => 'last_name', 'name' => 'last_name'
                           ]) @endcomponent
                        </div>
                        <div class="col-lg-12">
                            @component('user.components.form.text',[ 'style' => 'mb-3', 'value' => $data->address['address_1'] ?? '',
                                'label' => 'street_address', 'name' => 'address_1', 'placeholder' => 'House number and street name',
                            ]) @endcomponent

                            @component('user.components.form.text',[ 'style' => 'mt-0 mb-2', 'data' => $data->address['address_2'] ?? '',
                                'name' => 'address_2', 'placeholder' => 'Apartment, suite, unit etc. (optional)', 'required' => false
                            ]) @endcomponent
                        </div>

                        <div class="col-lg-12">
                            @component('user.components.form.select',[ 'value' => $data->address['state'] ?? '', 'onchange' => 'area',
                                'label' => 'state', 'name' => 'state', 'option'=> \App\Models\Location::getStateList(),
                            ])
                                @if(isset($data->address['area'])) @slot('onchangeValue') {{$data->address['area']}} @endslot @endif
                            @endcomponent
{{--                            @if(Auth::check() && isset($data->area))<script>$('#state').val('{{$data->address['state']}}').trigger('change')</script>@endif--}}
                        </div>
                        <div class="col-lg-12">
                            @component('user.components.form.select',[
                               'label' => 'area', 'name' => 'area',
                            ]) @endcomponent
                        </div>
                        <div class="col-lg-12 col-md-12">
                            @component('user.components.form.text',[ 'value' => $data->address['postcode'] ?? '',
                                'label' => 'postcode', 'name' => 'postcode', 'placeholder' => 'Postcode',
                             ]) @endcomponent
                        </div>
                        <div class="col-lg-12 col-md-12">
                            @component('user.components.form.text',[ 'value' => $data->address['phone'] ?? '',
                              'label' => 'phone', 'name' => 'phone'
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <button class="check-btn sqr-btn" type="submit">{{__('common.submit')}}</button>
                </div>
            @endslot
        @endcomponent
    </div>
</div>
