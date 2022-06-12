@component('user.components.form.index', [
    'route'=> route('contactByEmail')
])
    @slot('body')
        <div class="billing-info-wrap mr-100 contact-us">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',[ 'name' => 'name',
                       'placeholder' => __('common.your_name'),
                    ]) @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',[ 'name' => 'email',
                       'placeholder' => __('common.your_email'),
                    ]) @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.text',[ 'name' => 'subject',
                       'placeholder' => __('common.subject'),
                    ]) @endcomponent
                </div>
                <div class="col-lg-12 col-md-12">
                    @component('user.components.form.textarea',['placeholder' => __('common.your_message'),
                    'name' => 'message'
                 ]) @endcomponent
                </div>
            </div>
        </div>
        <button type="submit" class="submit" id="checkoutBtn">{{ __('common.send') }}</button>
    @endslot
@endcomponent

<style>
    .contact-us input, .contact-us textarea{
        margin-bottom: 0;
    }
    .contact-us input, .contact-us textarea, .contact-us select{
        border: 1px solid #e8e8e8;
    }
</style>
