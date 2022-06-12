@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'account_details',
    'nav'   => ['details'],
    'submitLink' => route('admin.user.update', $id)
])

    @slot('details')

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'first_name', 'name' => 'first_name'
               ]) @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data,
                  'label' => 'last_name', 'name' => 'last_name'
               ]) @endcomponent
            </div>
        </div>

        @component('admin.components.form.text',[ 'data' => $data,
                    'label' => 'username', 'name' => 'name'
                ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                  'label' => 'phone', 'name' => 'phone'
              ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
            'label' => 'email', 'name' => 'email', 'type'=> 'email',
        ]) @endcomponent

        @component('admin.components.form.text',[ 'required' => false,
            'label' => 'password', 'name' => 'password', 'type'=> 'password', 'small' => 'Leave blank if want to remain old password'
        ]) @endcomponent

        @component('admin.components.form.select',['data' => $data,
            'label' => 'status', 'name' => 'status', 'option'=> \App\Models\User::getStatusList(),
        ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                'label' => 'referral_username', 'name' => 'referral_username'
            ])
            @slot('value')
                @if(isset($data->referral) && $data->referral){{$data->referral['name']}}@endif
            @endslot
        @endcomponent
    @endslot
@endcomponent
