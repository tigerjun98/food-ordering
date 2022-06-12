<div class="alert_wrapper" id="alert_wrapper">
    <button onclick="hideAlert()">x</button>
    <ul id="alert_message"></ul>
</div>

<script>
    function showAlert(response, type='danger'){
        $('#alert_wrapper').removeClass("danger success");
        let errorsHtml = '';
        if(response.responseJSON){
            let errors = response.responseJSON;
            if(errors.errors && Object.keys(errors.errors).length > 0){
                $.each(errors.errors, function (k, v) {
                    errorsHtml += '<li>' + v + '</li>';
                });
            } else{
                errorsHtml = errors.message
            }
        } else if(response.message) {
            errorsHtml = '<li>' + response.message + '</li>';
        }

        $('#alert_message').html(errorsHtml);
        $("#alert_wrapper").hide().slideDown(700);
        $('#alert_wrapper').addClass(type);

        if(type == 'success') {
            setTimeout(function(){
                $("#alert_wrapper").slideUp(700);
            },4000);
        }
    }

    function hideAlert(){
        $("#alert_wrapper").slideUp(700);
    }

    function showSuccessAlert(response){

        if(response.custom){
            $.showAlert("danger", response.custom[0], response.custom[1], response.custom[2]);
            return;
        }

        if(response.openTab){
            $.showAlert("danger", "Insufficient Wallet Amount!", "Wallet left "+ response.openTab[1] +". Top up total "+ response.openTab[2] +" or choose another payment method to continue.", response.openTab[0]);
            return;
        }

        if(response.success){
            $.latestNotif('success', 'Success','Save change', null, null, 1000);
        }
        else if(response.errors){
            if($.isArray(response.errors) == true){
                $.each( response.errors, function( key, value ) {
                    $.latestNotif('danger', 'Error', value, null, null, 1000);
                    if (typeof errorCode == 'function') {
                        errorCode(value.substr(0, value.indexOf('-')));
                    }
                });
            }
            else{
                if(response.errors.length > 0){
                    if (typeof errorCode == 'function') {
                        errorCode(response.errors.substr(0, response.errors.indexOf('-')));
                    }
                    $.latestNotif('danger', 'Oops! Something is wrong', response.errors, null, null, 1000);
                } else{
                    $.each( response.errors, function( key, value ) {
                        if (typeof errorCode == 'function') {
                            errorCode(value.substr(0, value.indexOf('-')));
                        }
                        $.latestNotif('danger', "Invalid "+key, value, null, null, 1000);
                    });
                }
            }

        } else{
            $.ajaxAlert("top", "right", "danger", "Error", "Underfined!", "target");
        }
    }

    function showErrorAlert(response){
        if (typeof response.responseJSON != "undefined") {
            if(response.responseJSON.errors != null){
                $.each( response.responseJSON.errors, function( key, value ) {
                    if (typeof errorCode == 'function') {
                        errorCode(value[0].split('-')[0]);
                    }
                    $.latestNotif('danger', response.responseJSON.message, value, null, null, 1000);
                });
            }
        }
        else{
            if(response.errors){
                $.latestNotif('danger', Error, response.errors, null, null, 1000);
            } else{
                $.latestNotif('danger', Error, "Underfined Error", null, null, 1000);
            }

        }
    }
</script>

<style>
    .alert_wrapper{
        width: 97%;
        position: fixed;
        top: 10px;
        z-index: 9999;
        padding: 20px 30px;
        border-radius: 6px;
        left: 50%;
        transform: translateX(-50%);
        height: auto;
        display: none;
    }
    .alert_wrapper.danger{
        color: #842029;
        background-color: #f8d7da;
        border-color: #f5c2c7;
    }
    .alert_wrapper.success{
        color: #0f5132;
        background-color: #d1e6dd;
        border-color: #0f5132;
    }
    .alert_wrapper ul li{
        font-size: 14px;
        font-family: "Montserrat", sans-serif;
    }
    .alert_wrapper button{
        background: none;
        position: absolute;
        right: 20px;
        top: 15px;
        border: none;
        color: #831f29;
        font-size: 16px;
        border-radius: 50%;
    }
</style>
