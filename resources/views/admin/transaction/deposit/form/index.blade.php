@component('admin.components.modal.form',[
    'id'    => $id,
    'title' => 'deposit_details',
    'nav'   => ['details'],
    'submitLink' => route('admin.transaction.deposit.update', $id)
])

    @slot('details')

        @component('admin.components.form.text',[ 'data' => $data,
                   'label' => 'username', 'name' => 'name', 'readonly' => true
               ])
            @slot('value')
                @if(isset($data->user) && $data->user){{$data->user['name']}}@endif
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.select',[
                    'name' => 'token', 'option'=> \App\Models\Transaction::getTokenList(),
                ]) @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[ 'data' => $data,
                    'name' => 'amount', 'type'=> 'number'
                ]) @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                @component('admin.components.form.select',['data' => $data, 'onchange' => 'address',
                   'name' => 'network', 'option'=> \App\Models\Transaction::getNetworkList(),
               ]) @endcomponent
            </div>
            <div class="col-6">
                <label class="form-group has-float-label mb-2">
                    <div class="input-group typeahead-container">
                        <input type="text" class="form-control typeahead" name="address" id="address" value="{{$data->address ?? '' }}">
                        <div class="input-group-append ">
                            <button class="btn btn-primary default" data-clipboard-target="#address" type="button">
                                <i class="simple-icon-share-alt"></i>
                            </button>
                        </div>
                    </div>
                    <span>{{ __('common.address') }}</span>
                </label>
            </div>

{{--            <script>--}}
{{--                $( document ).ready(function() {--}}
{{--                    new ClipboardJS('.btn');--}}
{{--                });--}}
{{--            </script>--}}
        </div>


{{--        <x-admin.form.dropzone--}}
{{--            :label="'receipt'"--}}
{{--            :submitUrl="route('admin.transaction.deposit.uploadImage', $id)"--}}
{{--            :deleteUrl="route('admin.transaction.deposit.deleteDropzoneImage', $id)"--}}
{{--        >--}}
{{--            @slot('data')--}}
{{--                @if(isset($data->receipt))--}}
{{--                    @foreach($data->receipt as $key => $item)--}}
{{--                        @component('admin.components.dropzone.preview', [--}}
{{--                           'item'    => $item->file,--}}
{{--                            'path'   => 'deposit'--}}
{{--                        ])--}}
{{--                        @endcomponent--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endslot--}}
{{--        </x-admin.form.dropzone>--}}



        @component('admin.components.form.select',['data' => $data,
            'name' => 'status', 'option'=> \App\Models\Transaction::getStatusList(),
        ]) @endcomponent
    @endslot
@endcomponent
