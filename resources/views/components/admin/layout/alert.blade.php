<div class="app-alert" id="app-alert"></div>

<script type="module">
    let message = [];

    @if($errors->any())
    @foreach ($errors->all() as $error)
    message.push("{{$error}}");
    @endforeach
    @endif

    @if($errors->any())
        $("#app-alert").showAlert({
            status : 'danger', message, delay: '8000'
        });
    @endif

    @if(Session::get('success'))
    $('#app-alert').showAlert({message: Session::get('success')});
    @endif

    @if(Session::get('fail'))
    $('#app-alert').showAlert({status: 'danger', message: Session::get('fail')});
    @endif

    @if (session('status'))
    $('#app-alert').showAlert({status: 'danger', message: Session::get('status')});
    @endif

</script>
