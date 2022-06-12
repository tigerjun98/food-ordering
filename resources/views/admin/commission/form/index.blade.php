@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'product_details',
    'nav'   => ['details_en', 'commission'],
    'submitLink' => route('admin.commission.update', $id)
])

    @slot('commission')
        @include('admin.commission.form.product_type')
    @endslot

    @slot('details_en')
        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'title_en', 'name' => 'name_en'
               ]) @endcomponent

        @component('admin.components.form.text',[ 'data' => $data,
                  'label' => 'title_cn', 'name' => 'name_cn'
              ]) @endcomponent

        @component('admin.components.form.datetime_range',[ 'data' => $data,
                        'label' => 'event_date', 'name' => 'event_date',
                        'startDate' => $data->start_at ?? \Carbon\Carbon::now(), 'endDate' => $data->end_at ?? \Carbon\Carbon::now()->addMonths(1),
                    ]) @endcomponent
    @endslot

@endcomponent
