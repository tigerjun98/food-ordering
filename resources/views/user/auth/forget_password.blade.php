@extends('user.layout')

@section('content')

    @component('user.components.layouts.header', ['title' => 'reset_password'])@endcomponent

    @component('user.components.form.card', ['title' => __('common.'.$type.'_password')])

        @slot('desc')
            <p>{{ __('common.already_have_an_account') }}</p>
            <a href="{{route('login')}}" class="text-p text-color-3 fw-6">{{ __('common.login') }}</a>
        @endslot

        @slot('body')
            @component('user.components.form.index', ['route' => $type == 'reset' ? route('submitResetPassword', app('request')->input('token')) : route('submitForgetPassword'), 'id' => true])
                @slot('body')
                    <div class="form-login flat-form flex-one">
                        <div class="info-login">
                            @if($type == 'reset')
                                <input type="hidden" name="email" value="{{app('request')->input('email')}}">
                                <input type="hidden" name="token" value="{{app('request')->input('token')}}">

                                @component('user.components.form.text',[ 'type' => 'password',
                                    'name' => 'password', 'label' => 'new_password'
                                ]) @endcomponent

                                @component('user.components.form.text',[ 'type' => 'password',
                                      'name' => 'password_confirmation', 'label' => 'confirm_password'
                                  ]) @endcomponent
                            @else
                                @component('user.components.form.text',[
                                      'name' => 'email'
                                  ]) @endcomponent
                            @endif
                            <button class="submit button-login cc mt-4" type="submit">{{ __('common.submit') }}</button>
                        </div>
                    </div>
                @endslot
            @endcomponent
        @endslot
    @endcomponent
@endsection
