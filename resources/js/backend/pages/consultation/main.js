import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;
const options = {
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    wsHost: window.location.hostname,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: false,
    disableStats: true,
    cluster:import.meta.env.VITE_PUSHER_APP_CLUSTER,
}

window.Echo = new Echo({
    ...options,
});


$.fn.printConsultation = async function(options) {

    const settings = $.extend({
        url: '',
    }, options);

    let newwindow = window.open(options.url, name,'width=560,height=340,toolbar=0,menubar=0,location=0');
    newwindow.moveTo(0, 0);
    newwindow.resizeTo(screen.width, screen.height);
    if (window.focus) { newwindow.focus() }
}
