
console.log('loaded123');

$.fn.showAlert = function(options) {
    // default options.
    const settings = $.extend({
        status: 'success',
        response: null,
        message: null,
        delay: 6000
    }, options);

    let id = Date.now(), errorsHtml = '';
    this.append('<div class="alert alert_wrapper ' + settings.status + '" id="alert-' + id + '"><button onclick="hideAlert(`' + id + '`)"></button><ul id="ul-' + id + '">' +
        '</ul></div>');

    if (settings.status == 'success') {

        // delay to redirect // show msg first
        if (settings.response && settings.response.redirect) {
            setTimeout(function() {
                window.location.href = settings.response.redirect;
            }, 1500);
        }
        errorsHtml += '<li>' + settings.message ?? 'Success' + '</li>';

    } else {
        if (settings.message) {
            errorsHtml += '<li>' + settings.message + '</li>';

        } else if (settings.response) {
            let errorsMsg = settings.response.message;
            if (errorsMsg) {
                errorsHtml += '<li>' + errorsMsg + '</li>';
            } else {
                let errors = settings.response.responseJSON;
                if (errors.errors && Object.keys(errors.errors).length > 0) {
                    $.each(errors.errors, function(k, v) {
                        errorsHtml += '<li>' + v + '</li>';
                    });

                } else if (errors.message) {
                    errorsHtml += '<li>' + errors.message + '</li>';

                } else {
                    errorsHtml += '<li>' + settings.message + '</li>';
                }
            }

        } else {
            errorsHtml += '<li>' + settings.message + '</li>';
        }
    }


    $('#ul-' + id).html(errorsHtml);
    $("#alert-" + id).hide().slideDown(700);

    if (settings.delay > 1000) {
        setTimeout(function() {
            $("#alert-" + id).slideUp("slow", function() {
                $("#alert-" + id).remove()
            });
        }, settings.delay);
    }
};
