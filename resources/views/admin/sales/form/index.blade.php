@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'Create Order',
    'nav'   => ['details', 'variant', 'address'],
    'submitLink' => route('admin.order.update', $id)
])

    @slot('details')
        @component('admin.components.form.text',[ 'data' => $data,
            'label' => 'username', 'name' => 'name'
        ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
           'label' => 'Referral username', 'name' => 'referral_username'
       ]) @endcomponent

        <script>
            $( "#name" ).change(function() {
                checkUsername($(this).val(), 'name')
            });

            $( "#referral" ).change(function() {
                checkUsername($(this).val(), 'referral')
            });

            function checkUsername(name, id){
                let url = '{{route('admin.order.getUserInfo', ':id')}}'
                url = url.replace(':id', name);
                $.showLoading()
                $.ajax({
                    url,
                    type: 'GET',
                    dataType: 'json',
                    success: function( result ) {
                        $.hideLoading();
                        $('#first_name').val(result.first_name);
                        $('#last_name').val(result.last_name);
                        $('#phone').val(result.phone);
                        $('#email').val(result.email);
                    },
                    error: function(res) {
                        $.hideLoading();
                        // $('#'+id).val('');
                        showAlert(res)
                    }
                });
            }
        </script>

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                    'label' => 'first name', 'name' => 'first_name'
                ]) @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
                      'label' => 'last name', 'name' => 'last_name'
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
          'label' => 'Order status', 'name' => 'status', 'option'=> \App\Models\OrderDetail::getStatusList(),
     ]) @endcomponent

    @endslot

    @slot('variant')
        @include('admin.order.form.product')
    @endslot

    @slot('address')
        @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mb-3',
            'label' => 'Street address', 'name' => 'address_1', 'placeholder' => 'House number and street name',
        ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mt-0 mb-2',
            'name' => 'address_2', 'placeholder' => 'Apartment, suite, unit etc. (optional)', 'required' => false
        ]) @endcomponent

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.select',[ 'data' => $data, 'onchange' => 'area',
                    'label' => 'State', 'name' => 'state', 'option'=> \App\Models\Location::getStateList(),
                ])
                @if(isset($data->area)) @slot('onchangeValue') $data->area @endslot @endif
                @endcomponent
            </div>

            <div class="col-6">
                @component('admin.components.form.select',[ 'data' => $data,
                    'label' => 'Town / City', 'name' => 'area',
                ]) @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data, 'style' => 'mt-0',
                   'label' => 'Postcode / ZIP', 'name' => 'postcode', 'placeholder' => 'Postcode',
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
