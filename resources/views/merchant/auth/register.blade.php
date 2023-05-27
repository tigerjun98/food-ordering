@extends('admin.auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4">Vendor Food Ordering Management</p>

                        <p class="white mb-0 text-semi-muted">
                            I am so happy to see. You can continue to login for manage your work.
                            <a href="{{ route('merchant.login') }}" class="text-white">Login here</a>.
                        </p>
                    </div>
                    <div class="form-side alert-box">

                        <h6 class="mb-4">Vendor Register</h6>

                        <x-admin.form
                            :route="route('merchant.submit-register')"
                        >
                            @slot('body')

                                <div class="row">
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :name="'first_name'"
                                        />
                                    </div>
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :name="'last_name'"
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :name="'contact'"
                                        />
                                    </div>
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :name="'email'"
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :type="'password'"
                                            :name="'password'"
                                        />
                                    </div>
                                    <div class="col-6">
                                        <x-admin.form.text
                                            :type="'password'"
                                            :name="'password_confirmation'"
                                        />
                                    </div>
                                </div>
                            @endslot

                            @slot('footer')
                                <x-admin.component.button
                                    :text="'LOGIN'"
                                    :class="'btn-outline-primary btn-lg'"
                                    :redirect="route('merchant.login')"
                                />
                                <x-admin.component.button
                                    :text="'REGISTER'"
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
