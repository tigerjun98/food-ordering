import 'bootstrap-notify';

function getPos(ele){
    var x=0;
    var y=0;
    while(true){
        x += ele.offsetLeft;
        y += ele.offsetTop;
        if(ele.offsetParent === null){
            break;
        }
        ele = ele.offsetParent;
    }
    return [x, y];
}

const setAlertPosition = async () => {

    let openingModalIds = $(this).getModalId();
    if(openingModalIds.length > 0){
        let elem = document.getElementById($(this).getModalId({latest: true}))
        $('#app-alert').css({
            'width' : elem.style.width,
        });

    } else{

        let elem = document.getElementById('main_row')
        const width = parseInt($('#main_row').css('width')) - parseInt($('#main_row').css('padding-right'))
        const elemPosition = getPos(elem)

        $('#app-alert').css({
            'width' : width,
            'left' : elemPosition[0]+'px',
        });
    }
}


$.fn.showAlert = function(options) {
    // default options.
    const settings = $.extend({
        status: 'success',
        response: null,
        message: null,
        delay: 6000
    }, options);

    let id = Date.now(), errorsHtml = '<ul>';
    setAlertPosition();

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

    errorsHtml += '</ul>'

    // https://grotesquegentleadvance--samkhaled.repl.co
    $.notify(
        errorsHtml,
        {
            spacing: 10,
            z_index: 2000,
            class: 'alert alert-dismissible fade show rounded mb-0 w-100',
            type: settings.status,
            delay: settings.delay,
            allow_dismiss: true,
            element: "#app-alert",
            placement: {
                from: "top",
                align: "center"
            },
            animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp"
            },
            template:
                '<div data-notify="container" class="alert-dismissible fade show mb-0 alert alert-{0} " role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title" class="font-weight-bold">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                "</div>" +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                "</div>"
        }
    );
};
