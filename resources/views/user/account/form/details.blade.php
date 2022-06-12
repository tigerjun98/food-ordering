<div class="myaccount-content">
    <div class="account-details-form">
        @component('user.components.form.index', ['route' => route('account.update'), 'id' => true])
            @slot('body')
                <div class="billing-info-wrap mr-100">
                    <h3 class="text-capitalize">{{__('common.profile_details')}}</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'data' => $data,
                               'label' => 'first_name', 'name' => 'first_name'
                            ]) @endcomponent
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'data' => $data,
                               'label' => 'last_name', 'name' => 'last_name'
                           ]) @endcomponent
                        </div>

                        <div class="col-lg-12 col-md-12">
                            @component('user.components.form.text',['data' => $data,
                              'label' => 'phone', 'name' => 'phone'
                            ]) @endcomponent
                        </div>
                        <div class="col-lg-12 col-md-12">
                            @component('user.components.form.text',[
                               'label' => 'email', 'name' => 'email', 'data'=> $data
                            ]) @endcomponent
                        </div>
                    </div>
                </div>

                <div class="billing-info-wrap mr-100">
                    <h3 class="text-capitalize">{{__('common.password_changes')}}</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @component('user.components.form.text',[ 'type' => 'password', 'required' => false,
                               'label' => 'current_password',
                               'name' => 'old_password'
                            ])
                            @slot('small')({{__('common.leave_blank_unchanged')}})@endslot
                            @endcomponent
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'type' => 'password', 'required' => false,
                               'label' => 'new_password', 'name' => 'password'
                           ])
                                @slot('small')({{__('common.leave_blank_unchanged')}})@endslot
                            @endcomponent
                        </div>

                        <div class="col-lg-6 col-md-6">
                            @component('user.components.form.text',[ 'type' => 'password', 'required' => false,
                              'label' => 'confirm_new_password', 'name' => 'password_confirmation'
                            ]) @endcomponent
                        </div>
                    </div>
                </div>

                <div class="single-input-item">
                    <button class="check-btn sqr-btn" type="submit">Save Changes</button>
                </div>
            @endslot
        @endcomponent
    </div>
</div>
