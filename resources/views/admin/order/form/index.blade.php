@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'order_detail',
    'nav'   => ['details', 'variant', 'address', 'shipping', 'review'],
    'submitLink' => route('admin.order.update', $id)
])

    @slot('shipping')
        <p class="cc">{{ __('common.only_show_when_shipping') }}</p>
        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                    'label' => 'shipping_courier', 'name' => 'shipping_courier', 'required'=> false
                ]) @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                      'label' => 'tracking_no', 'name' => 'tracking_no', 'required'=> false
                  ]) @endcomponent
            </div>
        </div>
    @endslot

    @slot('details')
        @component('admin.components.form.text',[ 'required' => false,
            'label' => 'username', 'name' => 'name', 'small' => 'Leave blank to create an account for this user'
        ])
            @if(isset($data->user->name))
                @slot('value') {{ $data->user->name }} @endslot
                @slot('disabled') true @endslot
            @endif
        @endcomponent

        @component('admin.components.form.text',[
           'label' => 'referral_username', 'name' => 'referral_username'
        ])
            @slot('value')
                @if(isset($data->referral)){{$data->referral['name']}}@else origin @endif
                @if(isset($data->referral)) @slot('disabled') true @endslot @endif
            @endslot
        @endcomponent

        <script>
            $( "#name" ).change(function() {
                checkUsername($(this).val(), this.id)
            });

            $( "#referral_username" ).change(function() {
                checkUsername($(this).val(), 'referral_username')
            });

            async function checkUsername(name, id){

                try {
                    let result = await $("#updateTable").sendRequest({
                        url: '{{route('admin.selectOption')}}',
                        data: {
                            'type': id,
                            'ref': $('#'+id).val()
                        },
                    });

                    if(id == 'name'){
                        $('#first_name').val(result.first_name);
                        $('#last_name').val(result.last_name);
                        $('#phone').val(result.phone);
                        $('#email').val(result.email);

                        $('#address_1').val(result.address_1);
                        $('#address_2').val(result.address_2);
                        $('#postcode').val(result.postcode);
                        $('#state').val(result.state);
                        $("#state").updateOption({
                            id: 'area',
                            val: result.area
                        });
                    }
                } catch(err) {
                    $('#'+id).val('');
                    console.log(err, 'admin.order.form');
                }
            }
        </script>

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                    'label' => 'first_name', 'name' => 'first_name'
                ]) @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                      'label' => 'last_name', 'name' => 'last_name'
                  ]) @endcomponent
            </div>
        </div>

        @component('admin.components.form.text',[ 'data' => $data,
           'label' => 'email', 'name' => 'email'
        ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
           'label' => 'phone', 'name' => 'phone'
        ]) @endcomponent

        @component('admin.components.form.select',[ 'data' => $data,
            'label' => 'status', 'name' => 'status', 'option'=> \App\Models\OrderDetail::getStatusList(),
        ]) @endcomponent

    @endslot

    @slot('review')
        @include('admin.order.form.review')
    @endslot

    @slot('variant')
        @include('admin.order.form.product')
    @endslot

    @slot('address')
        @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
            'label' => 'street_address', 'name' => 'address_1', 'placeholder' => 'House number and street name',
        ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mt-0 mb-2',
            'name' => 'address_2', 'placeholder' => 'Apartment, suite, unit etc. (optional)', 'required' => false
        ]) @endcomponent

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.select',[ 'data' => $data,
                    'label' => 'state', 'name' => 'state', 'option'=> \App\Models\Location::getStateList(),
                ])
                @endcomponent
            </div>

            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                   'label' => 'area', 'name' => 'area',
               ]) @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mt-0',
                   'label' => 'postcode', 'name' => 'postcode', 'placeholder' => 'Postcode',
                ]) @endcomponent
            </div>
        </div>
    @endslot

    <script>
        $(document).ready(function(){
            let urlParams = new URLSearchParams(window.location.search);
            let referral = urlParams.get('referral');
            let username = urlParams.get('username');
            if(referral) $('#referral').val(referral).trigger('change');
            if(referral) $('#username').val(username).trigger('change');
        });
    </script>
@endcomponent
