@extends('user.layout')

@section('content')
    @component('user.components.layouts.header', ['title' => 'deposit'])@endcomponent

    <div class="tf-section flat-create-item flat-edit-profile flat-auctions-details flat-explore flat-auctions cc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-upload-profile post">
                        @component('user.components.form.index', ['route' => route('transaction.deposit.store', $id), 'id' => true])
                            @slot('body')
                                <h3 class="title-two fw-6">{{ __('common.deposit_detail') }}</h3>

                                <div class="form-infor-profile flat-form">
                                    <div class="form-infor flex">
                                        @component('user.components.form.select',[
                                           'name' => 'token', 'option'=> \App\Models\Transaction::getTokenList(),
                                       ]) @endcomponent
                                            @component('user.components.form.text',[
                                           'name' => 'amount', 'type'=> 'number'
                                       ]) @endcomponent
                                    </div>
                                </div>


                                <div class="flat-form">
                                    <h3 class="title-two fw-6">{{ __('common.select_network') }}</h3>
                                    @component('user.components.form.select',[ 'onchange' => 'address',
                                        'name' => 'network', 'option'=> \App\Models\Transaction::getNetworkList(),
                                    ]) @endcomponent
                                </div>


                                <h3 class="title-three fw-6 mt-5">{{ __('common.copy_address') }}</h3>
                                <p class="text-social text-t">Proin massa dui, maximus vitae massa in, ullamcorper euismod justo.</p>
                                <div class="button-social">
                                    @component('user.components.form.text',[
                                         'name' => 'address', 'readonly' => true, 'label' => ''
                                     ]) @endcomponent

                                    <button class="sc-button mt-4 btn" data-clipboard-target="#address" type="button">
                                        {{--                                    <i class="fab fa-facebook-f"></i>--}}
                                        <span class="font">{{ __('common.copy_address') }}</span></button>
                                </div>


                                <div class="flat-form mt-5">
                                    <h3 class="title-two fw-6 mb-5">{{ __('common.upload_invoice') }}</h3>
                                    @component('user.components.form.dropzone', [
                                        'submitUrl'   => route('transaction.deposit.uploadImage', $id),
                                        'deleteUrl'   => route('transaction.deposit.deleteDropzoneImage', $id)
                                    ])@endcomponent
                                </div>


                                <button class="tf-button-submit mg-t-15 mt-5" type="submit">
                                    {{ __('common.submit') }}
                                </button>
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link href="{{ asset('assets/admin/css/vendor/dropzone.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/admin/js/vendor/dropzone.min.js') }}"></script>
    <script defer>
        $( document ).ready(function() {
            new ClipboardJS('.btn');
        });
    </script>
@endsection
