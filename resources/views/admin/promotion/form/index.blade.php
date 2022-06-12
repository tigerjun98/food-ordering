@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'promotion_details',
    'nav'   => ['details', 'details_en', 'details_cn'],
    'submitLink' => route('admin.promotion.update', $id)
])

    @slot('details')
        @component('admin.components.form.datetime_range',[ 'data' => $data,
                         'label' => 'event_date', 'name' => 'event_date',
                         'startDate' => $data->start_at ?? \Carbon\Carbon::now(), 'endDate' => $data->end_at ?? \Carbon\Carbon::now()->addMonths(1),
                     ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
             'label' => 'url', 'name' => 'url', 'required' => false
        ]) @endcomponent

        @component('admin.components.form.select',[ 'data' => $data,
           'label' => 'status', 'name' => 'status', 'option'=> \App\Models\Promotion::getStatusList(),
       ]) @endcomponent



    @endslot

    @slot('details_en')
        @component('admin.components.form.text',[ 'data' => $data,
                 'label' => 'label', 'name' => 'label_en', 'small' => 'Max 20 characters only!'
             ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'title', 'name' => 'title_en', 'small' => 'Max 50 characters only!'
               ]) @endcomponent

        @component('admin.components.form.textarea',[ 'data' => $data,
                 'label' => 'description', 'name' => 'desc_en'
             ]) @endcomponent

        @component('admin.components.form.dropzone', [
                 'id' => 'en',
                'small' => 'Recommended size 1170 x 468px',
               'submitUrl'   => route('admin.promotion.uploadImage', ['id'=>$id, 'lang' => 'en']),
               'deleteUrl'   => route('admin.promotion.deleteDropzoneImage', ['id'=>$id, 'lang' => 'en'])
            ])

            @if(isset($data->image_en))
            @slot('data')
            @component('admin.components.dropzone.preview', [
                        'id' => 'en',
                       'item'    => $data->image_en,
                       'path'   => 'promotions',
                    ]) @endcomponent
                @endslot
            @endif
        @endcomponent


    @endslot

    @slot('details_cn')
        @component('admin.components.form.text',[ 'data' => $data,
              'label' => 'label', 'name' => 'label_cn', 'small' => 'Max 20 characters only!'
          ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                  'label' => 'title', 'name' => 'title_cn', 'small' => 'Max 50 characters only!'
              ]) @endcomponent

        @component('admin.components.form.textarea',[ 'data' => $data,
                 'label' => 'description', 'name' => 'desc_cn'
             ]) @endcomponent

        @component('admin.components.form.dropzone', [
                 'id' => 'cn',
        'submitUrl'   => route('admin.promotion.uploadImage', ['id'=>$id, 'lang' => 'cn']),
        'deleteUrl'   => route('admin.promotion.deleteDropzoneImage', ['id'=>$id, 'lang' => 'cn'])
     ])
            @if(isset($data->image_cn))
            @slot('data')
                @component('admin.components.dropzone.preview', [
                            'id' => 'cn',
                           'item'    => $data->image_cn,
                           'path'   => 'promotions'
                        ]) @endcomponent
            @endslot
            @endif
        @endcomponent
    @endslot

@endcomponent
