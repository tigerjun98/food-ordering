<div class="tf-section flat-explore flat-edit-profile flat-auctions-details mt-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-upload-profile post">
                    <h3 class="title-two fw-6 mb-5">{{ __('common.update_your_info') }}</h3>
                    @component('user.components.form.index', ['route' => route('account.update'), 'id' => true])
                        @slot('body')
                            @component('user.components.form.text',['name' => 'old_password', 'type' => 'password'
                                      ]) @endcomponent
                            <div class="form-infor-profile flat-form">
                                <div class="form-infor flex">
                                    @component('user.components.form.text',[
                                        'name' => 'password', 'type' => 'password'
                                    ]) @endcomponent
                                    @component('user.components.form.text',[
                                        'label' => 'confirm_new_password', 'name' => 'password_confirmation', 'type' => 'password'
                                    ]) @endcomponent
                                </div>
                            </div>
                            <button class="tf-button-submit mg-t-15" type="submit">
                                {{ __('common.save_and_update_info') }}
                            </button>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
