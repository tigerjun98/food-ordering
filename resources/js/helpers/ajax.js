$.fn.setHtml = async function(options) {
    const settings = $.extend({
        html: '',
        url: '',
        data: [],
        method: 'GET',
    }, options);

    let res = ''
    if(settings.url){
        res = await $(this).sendRequest({
            data: settings.data,
            url: settings.url,
            method: settings.method
        });
    }

    $(this).hide().html(settings.url ? res.html : options.html).fadeIn();
    myLazyLoad.update();
}

$.fn.sendRequest = function(options) {
    // default options.
    const settings = $.extend({
        url: window.location.href,
        id: null,
        val: null,
        data: {
            'type': options.id,
            // 'ref': $(this).val()
        },
        method: 'POST',
        showLoading: true,
        closeModal: [], // hide multiple modal
        modalSuccess: false, // hide modal when success
        alertSuccess: true, // show alert when success
        alertRedirect: true, // allow redirect when response have redirect
    }, options);

    return $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: settings.url,
        type: settings.method,
        data: settings.data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            if(settings.showLoading) $(this).setLoader()
        },
        success: function(data) {
            if(settings.showLoading) $(this).hideLoader()
            switch(data.status) {
                case 200: // success message
                    if(data.message){
                        if(!settings.alertSuccess) return true;
                        $('#app-alert').showAlert({message: data.message});
                    }

                    if(data.redirect){
                        window.location.href = data.redirect
                    }
                    break;
                default:
                // code block
            }

            // close the modal
            settings.closeModal.forEach(function (item, index) {
                $('#'+item).modal('hide');
                $('.modal-backdrop').remove();
            });
        },
        error: function(xhr) {
            if(settings.showLoading) $(this).hideLoader()
            handleAjaxErr(xhr)
        }
    });
};

const handleAjaxErr = (xhr) => {
    switch(xhr.status) {
        case 401: // no login
            window.location.replace("admin/login");
            break;
        case 422: // laravel validation errors
            $('#app-alert').showAlert({message: xhr.responseJSON.message, status: 'danger'});
            if (typeof handleValidationErr === "function") {
                handleValidationErr(xhr)
            }
            break;
        case 500:
            handleServerErr(xhr)
            break;
        default:
            if(xhr.responseJSON && xhr.responseJSON.message) {
                handleServerErr(xhr)
            } else if(xhr.message){
                $('#app-alert').showAlert({message: xhr.message, status: 'danger'});
            }
    }
}

const handleValidationErr = (err) => {
    let resJson = err.responseJSON;
    if (resJson.errors && Object.keys(resJson.errors).length > 0) {
        $.each(resJson.errors, function(k, v) {
            appendErrMsg(k, v)
        });
    }
}

const handleServerErr = (xhr) => {
    $("#app-alert").showAlert({
        status : 'danger', message: xhr.responseJSON.message, delay: 0
    });
}

