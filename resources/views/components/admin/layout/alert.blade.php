{{--<div class="app-alert" id="app-alert"></div>--}}

<script type="module">

    // if(!!document.querySelector('div.alert-box')){
    //     $('div.alert-box').prepend(`<div class="app-alert" id="app-alert"></div>`)
    //
    // } else if(!!document.getElementById('main_row')){
        $('#main_row').prepend(`<div class="app-alert" id="app-alert"></div>`)
    // }

    let message = [];

    @if($errors->any())
    @foreach ($errors->all() as $error)
    message.push("{{$error}}");
    @endforeach
    $("#app-alert").showAlert({
        status : 'danger', message, delay: '8000'
    });
    @endif

    @if(session('success'))
    $('#app-alert').showAlert({message: '{{ session('success')}}'});
    @endif

    @if(session('fail'))
    $('#app-alert').showAlert({status: 'danger', message: '{{ session('fail')}}'});
    @endif

</script>
