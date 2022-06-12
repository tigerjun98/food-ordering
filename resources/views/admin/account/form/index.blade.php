@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'account_details',
    'nav'   => ['details'],
    'submitLink' => route('admin.account.update', $id)
])

    @slot('details')

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
            'label' => 'password', 'name' => 'password', 'type'=> 'password', 'small' => 'Leave blank to remain unchanged'
        ]) @endcomponent

        @IF($data->getPermissionsInStr())
            @component('admin.components.form.multi_select',['value' => $data->getPermissionsInStr(),
                'label' => 'permissions', 'name' => 'permissions', 'option'=> \App\Models\Admin::getPermissionsLists(),
            ]) @endcomponent
        @ELSE
            @component('admin.components.form.multi_select',[
                'label' => 'permissions', 'name' => 'permissions', 'option'=> \App\Models\Admin::getPermissionsLists(),
            ]) @endcomponent
        @ENDIF

    @endslot
@endcomponent
