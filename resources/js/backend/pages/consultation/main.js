$.fn.printConsultation = async function(options) {

    const settings = $.extend({
        url: '',
    }, options);

    let newwindow = window.open(options.url, name,'width=560,height=340,toolbar=0,menubar=0,location=0');
    newwindow.moveTo(0, 0);
    newwindow.resizeTo(screen.width, screen.height);
    if (window.focus) { newwindow.focus() }
}
