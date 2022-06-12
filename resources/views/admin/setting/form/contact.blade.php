@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'contact',
    'nav'   => ['details'],
    'submitLink' => route('admin.setting.update', $id)
])
    @slot('details')
        @component('admin.components.form.text',[ 'value' => json_decode($data['value'])->email,
                   'label' => 'email', 'name' => 'email'
               ]) @endcomponent

        @component('admin.components.form.text',[ 'value' => json_decode($data['value'])->phone,
                  'label' => 'phone', 'name' => 'phone'
              ]) @endcomponent

        @component('admin.components.form.textarea',[ 'value' => json_decode($data['value'])->address,
                   'label' => 'address', 'name' => 'address'
               ]) @endcomponent
    @endslot
@endcomponent
