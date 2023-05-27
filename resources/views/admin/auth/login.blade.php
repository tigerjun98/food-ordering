@extends('admin.auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4">Food Ordering System</p>

                        <p class="white mb-0 text-semi-muted">
                            I am so happy to see. You can continue to login for manage your work.
{{--                            <a href="{{ route('login') }}" class="white">login here</a>.--}}
                        </p>
                    </div>
                    <div class="form-side alert-box">

                        <h6 class="mb-4">Admin Login</h6>

                        <x-admin.form
                            :route="route('admin.submit-login')"
                        >
                            @slot('body')
                                <x-admin.form.text
                                    :label="'email'"
                                    :name="'email'"
                                    :autofocus="'autofocus'"
                                    :remark="'We\'ll never share your phone with anyone else.'"
                                />

                                <x-admin.form.text
                                    :type="'password'"
                                    :name="'password'"
                                />

                            @endslot

                            @slot('footer')
                                <x-admin.component.button
                                    :text="'LOGIN'"
                                    :class="'btn-primary btn-lg'"
                                    :type="'submit'"
                                />
                            @endslot
                        </x-admin.form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
