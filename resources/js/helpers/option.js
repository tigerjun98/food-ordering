$.fn.updateOption = async function(options) {
    // default options.
    const settings = $.extend({
        url: '/build_form',
        id: null,
        val: null,
        data: {
            'type': options.id,
            'ref': $(this).val()
        },
        loading: false,
        returnFormat: 'option'
    }, options);

    try {
        let result = await $(this).sendRequest({
            data: {
                type: settings.data.type,
                ref: $(this).val(),
            }
        });
        if (settings.returnFormat == 'text') {
            $("#" + settings.id).val(result);
        } else {
            $("#" + settings.id + " option").remove();
            $("#" + settings.id).append($('<option>', {
                value: ""
            }));
            $.each(result, function(k, v) {
                $("#" + settings.id).append($('<option>', {
                    value: k,
                    text: v
                }));
            });
            if (settings.val) {
                $("#" + settings.id).val(settings.val).trigger('change');
            }
        }

    } catch (err) {
        console.log(err);
    }
};
