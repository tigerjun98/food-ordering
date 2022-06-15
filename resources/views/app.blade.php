<script>
    var button_text_cache = [];

    (function ( $ ) {
        $.fn.showLoading = function( options ) {
            // default options.
            var settings = $.extend({
                id : null,
                focusID : null,
                disable : true,
                show: true,
                focus: false,
                fullScreen: false,
            }, options );

            if(settings.show){

                if(settings.fullScreen){
                    $('body').addClass('show-spinner');
                } else if(settings.focus){
                    $('#'+settings.focusID).addClass('show-spinner');
                }

                if(settings.id){
                    $('#'+settings.id).prop('disabled',true);
                    $('#'+settings.id).addClass('disabled');
                } else{
                    $(this).prop('disabled',true);
                    $(this).addClass('disabled');
                }
            }
            else{
                if(settings.fullScreen){
                    $('body').removeClass('show-spinner');
                } else if(settings.focus){
                    $('#'+settings.focusID).removeClass('show-spinner');
                }

                // var elements = document.getElementsByClassName('show-spinner')
                // for (var element of elements) {
                //     element.removeClass('show-spinner')
                // }

                if(settings.id){
                    $('#'+settings.id).prop('disabled',false);
                    $('#'+settings.id).removeClass('disabled');
                } else{
                    $(this).prop('disabled',false);
                    $(this).removeClass('disabled');
                }

            }
        };

        $.fn.showAlert = function( options ) {
            // default options.
            var settings = $.extend({
                status : 'success',
                response: null,
                message: null,
                delay: 6000
            }, options );

            let id = Date.now(), errorsHtml = '';
            this.append('<div class="alert_wrapper '+settings.status+'" id="alert-'+id+'"><button onclick="hideAlert(`'+id+'`)"><i class="simple-icon-close"></i></button><ul id="ul-'+id+'">' +
                '</ul></div>');

            if(settings.status == 'success'){

                // delay to redirect // show msg first
                if(settings.response && settings.response.redirect){
                    setTimeout(function() {
                        window.location.href = settings.response.redirect;
                    }, 1500);
                }
                errorsHtml += '<li>' + settings.message ?? 'Success'+ '</li>';

            } else{
                if(settings.message){
                    errorsHtml += '<li>' + settings.message + '</li>';

                } else if(settings.response){
                    let errorsMsg = settings.response.message;
                    if(errorsMsg){
                        errorsHtml += '<li>' + errorsMsg + '</li>';
                    } else{
                        let errors = settings.response.responseJSON;
                        if(errors.errors && Object.keys(errors.errors).length > 0){
                            $.each(errors.errors, function (k, v) {
                                errorsHtml += '<li>' + v + '</li>';
                            });

                        } else if(errors.message){
                            errorsHtml += '<li>' + errors.message + '</li>';

                        } else{
                            errorsHtml += '<li>' + settings.message + '</li>';
                        }
                    }

                } else{
                    errorsHtml += '<li>' + settings.message + '</li>';
                }
            }


            $('#ul-'+id).html(errorsHtml);
            $("#alert-"+id).hide().slideDown(700);

            if(settings.delay > 1000){
                setTimeout(function(){
                    $("#alert-"+id).slideUp( "slow", function() {
                        $("#alert-"+id).remove()
                    });
                }, settings.delay);
            }
        };

        $.fn.sendRequest = function( options ) {
            // default options.
            var settings = $.extend({
                url: '{{ route('ajaxRequest') }}',
                id : null,
                val: null,
                data: {
                    'type': options.id,
                    'ref': $(this).val()
                },
                method: 'POST',
                loading:{
                    id: options.id,
                    show: true,
                    focus: false,
                    focusID: null,
                    fullScreen: true,
                },
                modalSuccess: false, // hide modal when success
                alertSuccess: false, // show alert when success
                alertRedirect: true, // allow redirect when response have redirect
            }, options );

            var elem = $(this);
            return $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: settings.url,
                type: settings.method,
                data: settings.data,
                beforeSend: function() {
                    if(settings.loading.show){
                        $('#'+settings.id).showLoading(settings.loading);
                    }
                },
                success: function(response) {
                    if(settings.loading.show){
                        $(elem).showLoading({
                            id: settings.id,
                            show: false,
                            fullScreen: settings.loading.fullScreen,
                            focus: settings.loading.focus,
                        });


                    }

                    if(response.redirect && settings.alertRedirect){
                        $("#app-alert").showAlert({
                            message: response.message, delay: 0, response: {
                                redirect: response.redirect
                            }
                        });
                    } else if(settings.alertSuccess){
                        $("#app-alert").showAlert({
                            message: response.message
                        });
                    }

                    if($('#publicModal').hasClass('show') && settings.modalSuccess){
                        $('#publicModal').modal('hide');
                    }

                    // try {
                    //     if ($.isFunction($.updateTableFunction())) {
                    //         $.updateTableFunction();
                    //     }
                    // } catch (err) {
                    //
                    // }

                },
                error: function(response) {
                    if(settings.loading.show){
                        $(elem).showLoading({
                            id: settings.id,
                            show: false,
                            fullScreen: settings.loading.fullScreen,
                            focus: settings.loading.focus,
                        });
                    }
                    $("#app-alert").showAlert({
                        status : 'danger', response, delay: 0
                    });
                }
            });
        };

        $.fn.updateOption = async function( options ) {
            // default options.
            var settings = $.extend({
                url: '{{ route('ajaxRequest') }}',
                id : null,
                val: null,
                data: {
                    'type': options.id,
                    'ref': $(this).val()
                },
                loading: false,
                returnFormat: 'option'
            }, options );

            try {
                let result = await $(this).sendRequest({
                    data: {
                        type: settings.data.type,
                        ref: $(this).val(),
                    }
                });
                if(settings.returnFormat == 'text'){
                    $("#"+settings.id).val(result);
                } else{
                    $("#"+settings.id+" option").remove();
                    $("#"+settings.id).append($('<option>', {value:""}));
                    $.each( result, function(k, v) {
                        $("#"+settings.id).append($('<option>', {value:k, text:v}));
                    });
                    if(settings.val){
                        $("#"+settings.id).val(settings.val).trigger('change');
                    }
                }

            } catch(err) {
                console.log(err);
            }
        };

    }( jQuery ));
</script>
