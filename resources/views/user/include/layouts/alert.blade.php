<div class="app-alert" id="app-alert"></div>

<script>
    function hideAlert(id){
        $("#alert-"+id).slideUp( "slow", function() {
            $("#alert-"+id).remove()
        });
    }

    $( document ).ready(function() {
        let message = [];

        @if (session('status'))
            console.log("{{session('status')}}");
        message.push("{{session('status')}}");
        @endif

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
    });
</script>

<style>
    .app-alert{
        width: 100%;
        position: fixed;
        top: 10px;
        z-index: 9999;
        padding: 0 30px;
        border-radius: 6px;
        left: 50%;
        transform: translateX(-50%);
        height: auto;
        /*display: none;*/
    }

    /* for backend */
    .container-fluid .app-alert{
        padding: 0;
        position: absolute;
        top: -10px;
    }
    .container-fluid .app-alert .alert_wrapper.success ul {
        border-radius: 5px;
    }


    .alert_wrapper{
        position: relative;
    }
    .alert_wrapper.danger ul, .alert_wrapper.danger button{
        color: #842029;
        background-color: #f8d7da;
        /*border-color: #f5c2c7;*/
    }
    .alert_wrapper.success ul, .alert_wrapper.success button{
        color: #0f5132;
        background-color: #d1e6dd;
        /*border-color: #0f5132;*/
    }
    .alert_wrapper ul{
        background: #262626;
        margin: 10px 0;
        padding: 10px 40px;
        color: #fff;
    }
    .alert_wrapper ul li{
        font-size: 14px;
        font-family: "Montserrat", sans-serif;
        margin: 10px 0;
    }
    .alert_wrapper button{
        background: none;
        position: absolute;
        right: 20px;
        top: 17px;
        font-size: 16px;
        background: #262626;
        border: 1px solid #e5e5e5;
        width: 30px;
        height: 30px;
    }
</style>
