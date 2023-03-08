import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const options = {
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    wsHost: window.location.hostname,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: false,
    disableStats: true,
    enabledTransports: ['ws', 'wss'],
    cluster:import.meta.env.VITE_PUSHER_APP_CLUSTER,
}

$.fn.broadcasting = async function() {
    window.Pusher = Pusher;
    window.Echo = new Echo({
        ...options,
    });
}

//
// window.Pusher = Pusher;
// const options = {
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     wsHost: window.location.hostname,
//     wsPort: import.meta.env.VITE_PUSHER_PORT,
//     forceTLS: false,
//     disableStats: true,
//     cluster:import.meta.env.VITE_PUSHER_APP_CLUSTER,
// }
//
// window.Echo = new Echo({
//     ...options,
// });
