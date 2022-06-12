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
                        <form method="POST" id="SubmitLoginForm" action="{{route('admin.submitLogin')}}">
                            @csrf
                            <label class="form-group has-float-label mb-4">
                                <input id="phone" type="text" class="form-control" name="name" required autocomplete="name" autofocus/>
                                <span>Username</span>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                <span>Password</span>
                            </label>
                            <div class="d-flex justify-content-between align-items-center"></div>
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#SubmitLoginForm').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                url: "{{route('admin.submitLogin')}}",
                type:"POST",
                data: $(this).serialize(),
                success:function(response){
                    window.location.replace('{{route('admin.index')}}');
                },
                error: function(response) {
                    showAlert(response);
                },
            });
        });
    </script>
@endsection
