@component('user.components.form.index')
    @slot('body')
        @if(Auth::check())
            <?php $data = \App\Models\User::getAddress(Auth::id()); ?>
        @else
            <?php $data = null; ?>
        @endif
        <div class="billing-info-wrap mr-100">
            <h3>{{__('common.billing_and_shipping_address')}}</h3>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @component('user.components.form.text',[ 'data' => $data,
                       'label' => 'first_name', 'name' => 'first_name'
                   ]) @endcomponent
                </div>
                <div class="col-lg-6 col-md-6">
                    @component('user.components.form.text',[ 'data' => $data,
                       'label' => 'last_name', 'name' => 'last_name'
                   ]) @endcomponent
                </div>
                <div class="col-lg-12">
                    @component('user.components.form.text',[ 'style' => 'mb-3', 'data' => $data,
                        'label' => 'street_address', 'name' => 'address_1', 'placeholder' => 'House number and street name',
                    ])
                    @endcomponent
                    @component('user.components.form.text',[  'style' => 'mt-0 mb-2', 'data' => $data,
                        'name' => 'address_2', 'placeholder' => 'Apartment, suite, unit etc. (optional)', 'required' => false
                    ])
                    @endcomponent
                </div>

                <div class="col-lg-12">
                    @component('user.components.form.select',[ 'data' => $data, 'onchange' => 'area',
                    'label' => 'state', 'name' => 'state', 'option'=> \App\Models\Location::getStateList(),
                    ])
                    @endcomponent
                </div>
                <div class="col-lg-12">
                    @component('user.components.form.text',[ 'style' => 'mb-3', 'data' => $data,
                     'label' => 'area', 'name' => 'area',
                 ])
                        @if(Auth::check())
                            @slot('value') {{\App\Models\User::getAddress(Auth::id(), 'area')}} @endslot
                        @endif
                    @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',[ 'data' => $data,
                        'label' => 'postcode', 'name' => 'postcode', 'placeholder' => 'Postcode',
                     ])
                        @if(Auth::check())
                            @slot('value') {{\App\Models\User::getAddress(Auth::id(), 'postcode')}} @endslot
                        @endif
                    @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',['data' => $data,
                      'label' => 'phone', 'name' => 'phone'
                    ])
                    @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',[
                       'label' => 'email', 'name' => 'email', 'value' => Auth::user()->email ?? ''
                    ])
                    @endcomponent
                </div>
            </div>
            <div class="additional-info-wrap">
                <h3>{{__('common.additional_information')}}</h3>
                @component('user.components.form.textarea',[ 'required'=>false, 'placeholder' => 'Notes about your order, e.g. special notes for delivery.',
                   'label' => 'order_notes', 'name' => 'remark'
                ]) @endcomponent
            </div>
        </div>
        <button type="submit" id="checkoutBtn" class="ds"></button>
    @endslot
@endcomponent



<style>
    .billing-info-wrap .billing-info label {
        text-transform: capitalize;
    }
    .billing-info-wrap .billing-info input {
        color: #000;
    }
    .billing-info-wrap .billing-info input::-webkit-input-placeholder { /* Edge */
        color: #c3c3c3;
    }
    .billing-info-wrap .billing-info input:-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #c3c3c3;
    }
    .billing-info-wrap .billing-info input::placeholder {
        color: #c3c3c3;
    }
</style>
