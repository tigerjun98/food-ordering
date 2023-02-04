@extends('admin.auth.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class="text-white h4">WELCOME TO THE <br>HEALTHIEST COMMUNITY</p>

                        <p class="white mb-0 text-semi-muted">
                            Admin login only.
                            <br>If you are not a member, please
                            <a href="{{ route('login') }}" class="white">login here</a>.
                        </p>
                    </div>
                    <div class="form-side">

                        <h6 class="mb-4">Login</h6>

                        <x-admin.form
                            :route="route('admin.login')"
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
