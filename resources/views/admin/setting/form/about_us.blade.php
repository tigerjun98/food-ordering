@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'contact',
    'nav'   => ['details'],
    'submitLink' => route('admin.setting.update', $id)
])

    @slot('details')
        @component('admin.components.form.desc',[ 'data' => $data,
               'label' => 'about_us', 'name' => 'value', 'uploadAssetLink' => 'admin.setting.uploadEditorContent'
           ]) @endcomponent
    @endslot
@endcomponent
