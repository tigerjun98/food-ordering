import 'bootstrap-notify';

const setAlertPosition = () => {

    let openingModalIds = $(this).getModalId();
    if(openingModalIds.length > 0){
        let elemId =  $(this).getModalId( {latest: true} )
        let elem = $(`#modal-content-${elemId.replace('modalId', '')}`);


        if( !! document.getElementById(`modal-content-${elemId.replace('modalId', '')}`) ){

            $('#app-alert').css({
                'width' : parseInt(elem.css('width')),
                'left' : parseInt(elem.offset().left),
                'top' : parseInt(elem.offset().top),
                'transform' : 'inherit'
            });
        }


    } else if(!!document.getElementById('main_row')){

        let elem = $(`#main_row`);
        const width = parseInt(elem.css('width')) - parseInt(elem.css('padding-right'))

        $('#app-alert').css({
            'width' : width,
            'left' : elem.offset().left,
            'top' : elem.offset().top - 45,
            'transform' : 'inherit'
        });

    } else{

        let elem = $(`.navbar`);

        // $('#app-alert').css({
        //     'width' : parseInt(elem.css('width')),
        //     'left' : parseInt(elem.offset().left),
        //     'top' : parseInt(elem.offset().top)
        // });
    }
}

const delay = ms => new Promise(res => setTimeout(res, ms));

$.fn.hideAlert = function(options) {
    console.log('1230000PP');
    $("#app-alert").empty()
}

$.fn.showAlert = async function(options) {
    // default options.
    const settings = $.extend({
        status: 'success',
        response: null,
        message: null,
        delay: 2000,
        wait: 0, // execute the function after * Wait the modal close so that the set position will won't affect by the closing modal
    }, options);

    let id = Date.now(), errorsHtml = '<ul>';
    if(settings.wait > 0) await delay(settings.wait);
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
