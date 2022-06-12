@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'home',
    'nav'   => ['details'],
    'submitLink' => route('admin.setting.update', $id)
])

    @slot('details')
        @component('admin.components.form.desc',[ 'data' => $data,
               'label' => 'home', 'name' => 'value', 'uploadAssetLink' => 'admin.setting.uploadEditorContent'
           ]) @endcomponent
    @endslot
@endcomponent
