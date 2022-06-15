<div class="tf-section flat-explore flat-edit-profile flat-auctions-details mt-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-upload-profile post">
                    <h3 class="title-two fw-6 mb-5">{{ __('common.update_your_info') }}</h3>
                    @component('user.components.form.index', ['route' => route('account.update'), 'id' => true])
                        @slot('body')
                            @component('user.components.form.text',[
                                          'data' => $data, 'name' => 'name', 'label' => 'username'
                                      ]) @endcomponent

                            <div class="form-infor-profile flat-form mb-0">
                                <div class="form-infor flex">
                                    @component('user.components.form.text',[
                                          'data' => $data, 'name' => 'first_name'
                                      ]) @endcomponent
                                    @component('user.components.form.text',[ 'data' => $data,
                                           'label' => 'last_name', 'name' => 'last_name'
                                         ]) @endcomponent
                                </div>
                            </div>

                            <div class="form-infor-profile flat-form mb-0">
                                <div class="form-infor flex">
                                    @component('user.components.form.text',[
                                            'data' => $data, 'name' => 'email', 'type' => 'email'
                                        ]) @endcomponent
                                    @component('user.components.form.text',[
                                'data' => $data, 'name' => 'phone',
                            ]) @endcomponent
                                </div>
                            </div>
                            <button class="tf-button-submit mg-t-15 mt-5" type="submit">
                                {{ __('common.save_and_update_info') }}
                            </button>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
