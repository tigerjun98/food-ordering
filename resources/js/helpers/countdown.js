$(document).ready(function() {
    $('#time').initCountDown()
})

$.fn.initCountDown = function(options) {
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('%Dd %Hh %Mm %Ss'))}).on('finish.countdown', function() {
            alert("Finish");
        });
    });
}


const appendTimer = function(options) {

    const settings = $.extend({
        id: null, // disable the button only
        handleEnd: false,
        fullScreen: false,
    }, options);

    let elem = !!document.getElementById(id);
    if(elem){
        elem = document.getElementById(id);
        if(expiredAt.hasAttribute('data-expiry')){
            $('#countdown{{$data->id}}').setCountdown({datetime: expiredAt.dataset.expiry});
        }
    }
}

$.fn.setCountdown = function(options) {
    // default options.
    const settings = $.extend({
        datetime: null, // disable the button only
        handleEnd: false,
        fullScreen: false,
    }, options);

    $(this).countdown(settings.datetime).on('finish.countdown', function(event) {
        $(this).html('Expired')
    });

    $(this).countdown(settings.datetime).on('update.countdown', function(event) {
        let str = ''
        if(event.strftime('%-d')>0)
            str = str + event.strftime('%-d')+'d ';

        if(event.strftime('%-H')>0)
            str = str + event.strftime('%-H')+'h ';

        if(event.strftime('%M')>0)
            str = str + event.strftime('%-M')+'m ';

        if(event.strftime('%S')>0)
            str = str + event.strftime('%-S')+'s';

        if (event.elapsed) {
            console.log('123')
        }

        $(this).html(str)
        return str
    });
};
