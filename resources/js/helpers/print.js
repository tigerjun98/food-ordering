$.fn.triggerPrint = function(options) {
    newwindow = window.open(url,windowName,'height=200,width=150');
    if (window.focus) {newwindow.focus()}
    return false;
}
