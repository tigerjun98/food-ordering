@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'Welcome Popup',
    'nav'   => ['details'],
    'submitLink' => route('admin.setting.update', $id)
])

    @slot('details')
        @component('admin.components.form.dropzone', [
           'submitUrl'   => route('admin.setting.uploadImage', $id),
           'deleteUrl'   => route('admin.setting.deleteDropzoneImage', $id)
        ])
            @if(isset($data->value) && $data->value)
                @slot('data')
                    @component('admin.components.dropzone.preview', [
                       'item'       => $data->value,
                       'path'       => 'settings',
                       'maxFile'    => 1
                    ]) @endcomponent
                @endslot
            @endif

        @endcomponent
    @endslot
@endcomponent
